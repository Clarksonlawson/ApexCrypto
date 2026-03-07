<?php

namespace App\Http\Controllers;

use App\Models\Verifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use function Symfony\Component\Clock\now;

class AccountVerficiationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;  
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
        $verification = Verifications::where('user_id', $user->id)->first();
        return view('auth.v4.verification', compact(
           'verification',
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'bonus',
            'notifications',
            'unreadCount',
        ));
       
    }

    public function kycForm()
    {
        $user = Auth::user();
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;  
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
        return view('auth.v4.kyc-form', compact(
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'bonus',
            'notifications',
            'unreadCount',
        ));
    }
public function submit(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'dob'        => 'required|date',
            'social_media' => 'nullable|string|max:255',
            'address'    => 'required|string|max:255',
            'city'       => 'required|string|max:100',
            'state'      => 'required|string|max:100',
            'country'    => 'required|string|max:100',
            'document_type' => 'required|string|max:50',
            'frontimg'   => 'required|image|max:10240', // 10MB
            'backimg'    => 'required|image|max:10240',
        ]);

        // Handle file uploads
        $frontPath = $request->file('frontimg')->store('verifications', 'public');
        $backPath = $request->file('backimg')->store('verifications', 'public');

        // Create verification entry
        Verifications::create([
            'user_id'       => Auth::id(),
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'email'         => $request->email,
            'phone_number'  => $request->phone_number,
            'dob'           => $request->dob,
            'social_media'  => $request->social_media,
            'address'       => $request->address,
            'city'          => $request->city,
            'state'         => $request->state,
            'country'       => $request->country,
            'document_type' => $request->document_type,
            'document_front'=> $frontPath,
            'document_back' => $backPath,
            'status'        => 'pending',
        ]);
        $user = Auth::user();
        $user->verification_status = 'in progress';
        $user->save();
        $user->notify(new \App\Notifications\UserNotification(
            'KYC Update',
            'Your KYC documents have been submitted successfully. We will reach out after verification',
            'verification',
            request()->ip()
        ));
        return redirect()->back()->with('success', 'KYC submitted successfully!');
    }
    public function uploadIDs(Request $request)
    {
       

        $request->validate([
            'government_id' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'utility_bill' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'proof_of_address' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'occupation' => 'required|string',
            'job_title' => 'required|string',
            'languages' => 'required|string',
        ]);

        $user = Auth::user();
        $verification = new Verifications();
        $verification->user_id = $user->id;
        $verification->first_name = explode(' ', $user->name)[0];
        $verification->last_name = explode(' ', $user->name)[1] ?? '';
        $verification->email = $user->email;
        $verification->occupation = $request->occupation;
        $verification->job_title = $request->job_title;
        $verification->languages = $request->languages;

        // ✅ Loop through files and store paths
        foreach (['government_id', 'utility_bill', 'proof_of_address'] as $fileField) {
            if ($request->hasFile($fileField)) {
                $path = $request->file($fileField)->store('verifications', 'public');
                $verification->$fileField = $path;
            }
        }

      
        $verification->save();
          // ✅ Save once after all files have been processed
        $user->verification_status = 'in progress'; // or 'in_review' if appropriate
        $user->updated_at = now();
        $user->save();

        
        return back()->with('success', 'Verification submitted successfully.');
    }
}

