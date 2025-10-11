<?php

namespace App\Http\Controllers;
use illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    use SendsPasswordResetEmails;
}
