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
        $verification = Verifications::where('user_id', $user->id)->first();
        return view('auth.v3.dashboard.verification', compact('verification'));
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

