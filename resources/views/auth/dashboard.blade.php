@extends('layouts.auth')

@section('title', 'Dashboard | ApexCrypto Finance LTD')

@section('content')
<div class="auth-page d-flex min-vh-100 align-items-center justify-content-center bg-light">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <!-- Dashboard Content -->
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="auth-form w-100 p-4 p-md-5 bg-white rounded-4 shadow-sm" style="max-width: 420px;">
          <h4 class="mb-4 text-center fw-semibold">Dashboard</h4>
          <p class="text-center">Welcome to your dashboard, {{ Auth::user()->name }}!</p>
          <p class="text-center mb-4">This is a placeholder for your dashboard content.</p>

          <!-- Logout Button -->
          <form method="POST" action="{{ route('logout') }}" class="text-center">
            @csrf
            <button type="submit" class="btn btn-danger w-100">
              Logout
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
