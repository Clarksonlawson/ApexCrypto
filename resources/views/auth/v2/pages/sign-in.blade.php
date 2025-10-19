@extends('auth.v2.layouts.app')

@section('content')
 <div id="page" class="">
    <div class="sign-in-wrap d-flex flex-column flex-md-row min-vh-100">
        <div class="sign-in-box d-flex flex-column flex-md-row w-100">

            {{-- LEFT SIDE: Form --}}
            <div class="left flex-grow-1 d-flex align-items-center justify-content-center p-4 p-md-5">
                <div class="content w-100" style="max-width: 420px;">
                    <h3 class="heading mb-2">
                        Hello!
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- your SVG here -->
                        </svg>
                    </h3>
                    <div class="sub f12-regular text-GrayDark mb-4">Welcome again to {{ config('app.name') }}</div>

                    <div class="sign-in-inner">
                        <h4 class="mb-3">Sign In</h4>
                        <form class="form-login flex flex-column gap24" method="POST" action="{{ route('login') }}">
                            @csrf

                            {{-- Email --}}
                            <fieldset class="email mb-3">
                                <div class="f14-regular mb-6">Email</div>
                                <input class="flex-grow form-control" type="email" name="email"
                                    placeholder="Enter your email address" required>
                                @error('email')
                                    <div class="box-status bg-LightGray type-red mt-2">
                                        <span class="font-poppins">{{ $message }}</span>
                                    </div>
                                @enderror
                            </fieldset>

                            {{-- Password --}}
                            <fieldset class="password mb-3">
                                <div class="f14-regular mb-6">Password</div>
                                <div class="position-relative">
                                    <input class="password-input form-control" type="password"
                                        name="password" placeholder="Enter your password" required>
                                    <span class="show-pass position-absolute top-50 end-0 translate-middle-y me-3">
                                        <i class="icon-view view"></i>
                                        <i class="icon-hide hide"></i>
                                    </span>
                                </div>
                                @error('password')
                                    <div class="box-status bg-LightGray type-red mt-2">
                                        <span class="font-poppins">{{ $message }}</span>
                                    </div>
                                @enderror
                            </fieldset>

                            {{-- Checkbox + Forgot password --}}
                          <div class="d-flex justify-content-end mb-3">
                                <a href="{{ route('password.request') }}" class="f12-bold">Forgot Password?</a>
                            </div>

                            <button class="tf-button style-1 label-01 w-100" type="submit">Sign In</button>
                        </form>

                        {{-- Google Sign-In --}}
                        <div class="mt-4">
                            {{-- <div class="f14-regular mb-2">Google sign in</div> --}}
                            <a href="#" class="f14-regular btn-signin-with d-flex align-items-center justify-content-center">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <!-- your Google SVG here -->
                                </svg>
                                <span class="ms-2">Sign in with Google</span>
                            </a>
                        </div>

                        <div class="f14-regular text-center mt-4">
                            Don’t have an account?
                            <a href="/sign-up" class="f14-bold">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- RIGHT SIDE: Image --}}
            <div class="right d-none d-md-flex flex-column justify-content-center align-items-center text-center text-white position-relative w-50">
                <img src="{{ asset('auth/images/item/bg-sign-in.jpg') }}" alt="" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover">
                <div class="text position-relative p-4">
                    <img src="{{ asset('auth/images/item/sign-in.png') }}" alt="" class="mb-3" style="max-width: 100%;">
                    <h3 class="mb-3 fw-bold fs-3">Finance Built for the Future of Bitcoin.</h3>
                    <p class="f14-regular text-white mb-0">
                        Experience effortless liquidity with institutional-grade security.<br>
                        Your Bitcoin works for you — earning flexibility, not risk.<br>
                        Borrow confidently, without ever selling.
                    </p>
                </div>
           
            </div>
    
         </div>
    </div>
</div>

       
        {{-- @if ($errors->has('email') || $errors->has('password'))
        <script>
            document.addEventListener('turbo:load', function() {
                // Get the first available error
                const errorMessage = @json($errors->first('email') ?: $errors->first('password'));

                console.log("Login error:", errorMessage);

                // ✅ Show toast notification
                toast(errorMessage, "error");
            });
        </script> --}}
    {{-- @endif --}}

@endsection