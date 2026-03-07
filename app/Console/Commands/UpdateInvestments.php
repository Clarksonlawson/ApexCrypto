<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Investment;
use Illuminate\Support\Carbon;
use App\Notifications\InvestmentCompleted;

class UpdateInvestments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-investments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the Account Balance of Active Investment users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Initializing...');
        $investments = Investment::where('status', 'active')
            ->with(['plan', 'user'])
            ->get();

        foreach ($investments as $investment) {

            $plan = $investment->plan;

            if (!$plan) {
                continue;
            }

            // Parse duration
            $durationParts = explode(' ', $plan->duration);
            $durationValue = (int)$durationParts[0];
            $durationType = strtolower($durationParts[1]);

            $endTime = Carbon::parse($investment->created_at);

            if ($durationType == 'minutes') {
                $endTime->addMinutes($durationValue);
            }

            if ($durationType == 'days') {
                $endTime->addDays($durationValue);
            }

            if (now()->greaterThanOrEqualTo($endTime)) {
                $user = $investment->user;

                // Calculate profit
                $profit = ($investment->amount * $plan->return_rate) / 100;

                // Credit user balance
                $user->account_balance += ($investment->amount + $profit);
                $user->total_profit += $profit;
                $user->save();

                // Mark investment completed
                $investment->status = 'completed';
                $investment->save();

                // Send notification
                $user->notify(new InvestmentCompleted($investment, $profit));

                $this->info("Processed investment {$investment->id} and notified user {$user->id}");
            } else {
                $this->info("Investment {$investment->id} is still active. Ends at: {$endTime}");
            }
        }

        $this->info('Run completed ✅');
    }
}
