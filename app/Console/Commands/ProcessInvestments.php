<?php

use Illuminate\Console\Command;
use App\Models\Investment;
use Illuminate\Support\Carbon;

class ProcessInvestments extends Command
{
        /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'investments:process-investments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process All investments and credit users.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
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
                $user->balance += ($investment->amount + $profit);
                $user->save();

                // Mark investment completed
                $investment->status = 'completed';
                $investment->save();

                $this->info("Processed investment {$investment->id}");
            }
        }
    }
}