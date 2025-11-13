@extends('auth.v3.layouts.dashboard')

@section('title', 'User Account')
@php
    use Carbon\Carbon;

    $fullName = Auth::user()->name;
    $nameParts = explode(' ', trim($fullName));
    $firstName = $nameParts[0] ?? '';
    $lastName = $nameParts[1] ?? '';

@endphp

@section('content')
    <div class="RZmKBZs1E1eXw8vkE6jY p_2EXc_a2sDA_h41l8QU">
        <nav class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc" aria-label="Breadcrumb">
            <ol
                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 R0X5VtiZIoV7IjvrxBJ_ hPWJir4VhLurUkdR8iyI UiRKvjjl_rZRhuc5tGul">
                <li class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                    <a href="../../index.html"
                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe rYHHksRBEMl_guI3q0UQ YXx9oZ15oLXSCG32YPBT XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
                        <svg class="E_3B4mrFSil75QXvKTiK _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M11.3 3.3a1 1 0 0 1 1.4 0l6 6 2 2a1 1 0 0 1-1.4 1.4l-.3-.3V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3c0 .6-.4 1-1 1H7a2 2 0 0 1-2-2v-6.6l-.3.3a1 1 0 0 1-1.4-1.4l2-2 6-6Z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                        <svg class="H9gtVTm5_rPWftCfV_9B _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _JmTNv5EiHqK2A1jcQSf _oMLPqquxUE25nEAshY6"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7"></path>
                        </svg>
                        <a href="#"
                            class="UwVmaTmxbsmvnpCB2B1K c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe rYHHksRBEMl_guI3q0UQ YXx9oZ15oLXSCG32YPBT XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW _9RDyySiJ2_PuvLFkRD4">Account</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                        <svg class="H9gtVTm5_rPWftCfV_9B _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _JmTNv5EiHqK2A1jcQSf _oMLPqquxUE25nEAshY6"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7"></path>
                        </svg>
                        <span
                            class="UwVmaTmxbsmvnpCB2B1K c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _9RDyySiJ2_PuvLFkRD4">Verification</span>
                    </div>
                </li>
            </ol>
        </nav>
        <h1 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Account Verification
            Status</h1>
    </div>
    @if ($errors->any())
        <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 border border-red-300" role="alert">
            <svg class="w-4 h-4 me-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <div>
                <span class="font-medium">Ensure that these requirements are met:</span>
                <ul class="mt-2 list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if (session('success'))
        <div class="flex p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 border border-green-300" role="alert">
            <svg class="w-4 h-4 me-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <div>
                <span class="font-medium">Success!</span> {{ session('success') }}
            </div>
        </div>
    @endif


    <div class="iHPddplqYvrN6qWgvntn _wYiJGbRZyFZeCc8y7Sf _76JqJyIVrH7ISZu_lpR h6ZjYPWLn_mAxjSYNWsM">
        <div
            class="hD0sTTDgbxakubcHVW2X mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _YxZw_O8dWkTljptcO7z roTtmJKSiubwdmgJkwrv">

            <form action="#">
                <div
                    class="hD0sTTDgbxakubcHVW2X xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn tEb_kuxyY7OFFhZr5l7l AqVNvLG_H6VHhym2yKMp">



                </div>
                <h3
                    class="Z3N7I2IDDsoXK6xJ1cSW y0nOgdpiqOUaFDbjAxwD IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                    Verification status</h3>
                <p class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y tEb_kuxyY7OFFhZr5l7l">Complete your
                    account verification to request a loan today!</p>
                <!-- Toggle 1 -->
                <div
                    class="hD0sTTDgbxakubcHVW2X mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00">
                    <div class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24px" height="24px">
                            <path fill="#4caf50" d="M45,16.2l-5,2.75l-5,4.75L35,40h7c1.657,0,3-1.343,3-3V16.2z" />
                            <path fill="#1e88e5" d="M3,16.2l3.614,1.71L13,23.7V40H6c-1.657,0-3-1.343-3-3V16.2z" />
                            <polygon fill="#e53935"
                                points="35,11.2 24,19.45 13,11.2 12,17 13,23.7 24,31.95 35,23.7 36,17" />
                            <path fill="#c62828"
                                d="M3,12.298V16.2l10,7.5V11.2L9.876,8.859C9.132,8.301,8.228,8,7.298,8h0C4.924,8,3,9.924,3,12.298z" />
                            <path fill="#fbc02d"
                                d="M45,12.298V16.2l-10,7.5V11.2l3.124-2.341C38.868,8.301,39.772,8,40.702,8h0 C43.076,8,45,9.924,45,12.298z" />
                        </svg>
                        
                        <label for="github-connect"
                            class="ahOqFrhzLjivRe8a1kX_ YRrCJSr_j5nopfm4duUc SA5DoMHfwOFtY4h_qzuM Q_jg_EPdNf9eDMn1mLI2">

                            <span
                                class="fhCwost7CSNRc2WSHLFW Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">Verified</span>
                        </label>
                    </div>
                    <div class="d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Your
                        email {{ Auth::user()->email }} has been successfully verified.</div>
                </div>

                <div
                    class="hD0sTTDgbxakubcHVW2X mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00">
                    <div class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j">


                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24px" height="24px">
                            <path fill="#2196f3"
                                d="M37,45H11c-1.657,0-3-1.343-3-3V6c0-1.657,1.343-3,3-3h19l10,10v29C40,43.657,38.657,45,37,45z" />
                            <path fill="#bbdefb" d="M40 13L30 13 30 3z" />
                            <path fill="#1565c0" d="M30 13L40 23 40 13z" />
                            <path fill="#e3f2fd" d="M15 23H33V25H15zM15 27H33V29H15zM15 31H33V33H15zM15 35H25V37H15z" />
                        </svg>

                        <label for="github-connect"
                            class="ahOqFrhzLjivRe8a1kX_ YRrCJSr_j5nopfm4duUc SA5DoMHfwOFtY4h_qzuM Q_jg_EPdNf9eDMn1mLI2">
                            @switch(Auth::user()->verification_status)
                                        @case("in progress")
                                            <span class="_6aYwdjzDCvXK0bVJQOb Y3FxyuXtj2gecrGXvLEI YccXYy5sNIz6FJlLxw0D St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe mbOxN7eW74XygTKQC_r3 V9HgZms3_2W5sanRatci Uq09bvia_7yL7hYv2uSO">Verification in progress</span>
                                            @break
                                        @case("pending")
                                        
                                            <span class="_6aYwdjzDCvXK0bVJQOb Y3FxyuXtj2gecrGXvLEI __CUdK3mSkcMQpxc1Lod St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe ZN_OBnKt2VQjvkKnCO6j _GlwOcA9YuerMlQx_c88 _XapmO5DQjdm9xWcSSv9">Not verified</span>
                                            @break
                                        @case("verified")
                                            <span class="fhCwost7CSNRc2WSHLFW Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">Verified</span>
                                        @break
                                        @default
                                            
                                    @endswitch
                        </label>
                    </div>
                    <div class="d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Upload
                        valid government-issued IDs to complete account verification. Accepted IDs: Passport, Driver's
                        License, National ID.</div>
                    <br />
                   @if ($verification && $verification->status == "pending")
                       
                   @else
                         <button type="button" id="uploadIDButton" data-modal-target="uploadIDAccordionModal"
                        data-modal-toggle="uploadIDAccordionModal"
                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM icxWjIgUd9_dzYucx1nx">
                        <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 3c.3 0 .6.1.8.4l4 5a1 1 0 1 1-1.6 1.2L13 7v7a1 1 0 1 1-2 0V6.9L8.8 9.6a1 1 0 1 1-1.6-1.2l4-5c.2-.3.5-.4.8-.4ZM9 14v-1H5a2 2 0 0 0-2 2v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-4v1a3 3 0 1 1-6 0Zm8 2a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Upload
                    </button>
                    @endif
                </div>
            </form>
        </div>

        <div
            class="_uQa_ExcsTN6BoybQjcN mveJTCIb2WII7J4sY22F jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf jqg6J89cvxmDiFpnV56r">
            <h3
                class="Z3N7I2IDDsoXK6xJ1cSW c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                Verification requirements:</h3>
            <p
                class="hD0sTTDgbxakubcHVW2X c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                Ensure that these requirements are met to verify your account and request loans:</p>
            <ul class="TVHgSaRh3muGJct_epr9 c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                    <svg class="_6aYwdjzDCvXK0bVJQOb _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _VPh6kIywCMfXFfQLas4 _slPOgYG58UZfxi9teaV"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm13.7-1.3a1 1 0 0 0-1.4-1.4L11 12.6l-1.8-1.8a1 1 0 0 0-1.4 1.4l2.5 2.5c.4.4 1 .4 1.4 0l4-4Z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Email must be verified
                </li>
                <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                    <svg class="_6aYwdjzDCvXK0bVJQOb _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _VPh6kIywCMfXFfQLas4 _slPOgYG58UZfxi9teaV"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm13.7-1.3a1 1 0 0 0-1.4-1.4L11 12.6l-1.8-1.8a1 1 0 0 0-1.4 1.4l2.5 2.5c.4.4 1 .4 1.4 0l4-4Z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Upload government-issued ID (Passport, Driver’s License, National ID)
                </li>
                <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                    <svg class="_6aYwdjzDCvXK0bVJQOb _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _VPh6kIywCMfXFfQLas4 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Proof of address (utility bill, bank statement, or official document)
                </li>
                <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                    <svg class="_6aYwdjzDCvXK0bVJQOb _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _VPh6kIywCMfXFfQLas4 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Verified phone number
                </li>
                <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                    <svg class="_6aYwdjzDCvXK0bVJQOb _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _VPh6kIywCMfXFfQLas4 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Strong password (10–100 chars, include uppercase, lowercase, number, special character)
                </li>
            </ul>
        </div>

    </div>
    <!-- Create User Modal -->
    <div id="uploadIDAccordionModal" tabindex="-1" aria-hidden="true"
        class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
        <div
            class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ TnCneWVBJS9LByVLKjZH _wYiJGbRZyFZeCc8y7Sf">
            <!-- Modal content -->
            <form action="{{ route('verificaiton.submit') }}"
                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi"
                method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Modal header -->
                <div
                    class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j zQeL_bQRwh9WGEnvS5ug RZmKBZs1E1eXw8vkE6jY _9igzqn_6D3Qq5Hcwkfk _Ura23Qklq9Ri0XExDX2">
                    <h3 class="y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Upload
                        documents</h3>
                    <button type="button"
                        class="zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                        data-modal-toggle="uploadIDAccordionModal">
                        <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 17.94 6M18 18 6.06 6"></path>
                        </svg>
                        <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
                    </button>
                </div>
                <div id="accordion-collapse-create-user" data-accordion="collapse">
                    <h2 id="accordion-collapse-heading-3">
                        <button type="button"
                            class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j jtAJHOc7mn7b4IKRO59D RZmKBZs1E1eXw8vkE6jY _9igzqn_6D3Qq5Hcwkfk upQp7iWehfaU8VTbfx_w ezMFUVl744lvw6ht0lFe wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 _dylIDxYTN3qgvD4U597 _6wdnQrxT_dGdAdNk5AQ _fGhMnSfYmaGrv7DvZ00 jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal iVFnMKM9o7j5GIWfxm2b _Ura23Qklq9Ri0XExDX2"
                            data-accordion-target="#accordion-collapse-body-3" aria-expanded="true"
                            aria-controls="accordion-collapse-body-3">
                            <span>Personal Documents</span>
                            <svg data-accordion-icon=""
                                class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _VPh6kIywCMfXFfQLas4 mhH4ImM_a5UEMNIgl2cJ"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m5 15 7-7 7 7"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-3" class="" aria-labelledby="accordion-collapse-heading-3">
                        <div class="qUWbS_LTZujDB4XCd11V _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _aDtgllJkTzUlILozHgX">
                            <!-- Inputs -->
                            <div class="xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn AqVNvLG_H6VHhym2yKMp">
                                <div class="wwofGIyK_H_z3Xjelq8G">
                                    <label
                                        class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        for="file_input">Government-issued ID</label>
                                    <div class="t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 rvdRhGyExrNYTA6euxsF">
                                        <div class="t6gkcSf0Bt4MLItXvDJ_">
                                            <input
                                                class="t6gkcSf0Bt4MLItXvDJ_ SA5DoMHfwOFtY4h_qzuM mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl BkIbg_JwkgiyRW804Hhu Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r XIIs8ZOri3wm8Wnj9N_y H7KQDhgKsqZaTUouEUQL"
                                                name="government_id" aria-describedby="file_input_help" id="file_input"
                                                type="file">
                                            <p class="iRFVFKvV59EjIwjCM62m gMXmdpOPfqG_3CKkL0VD _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 EJIoL6514Ry8r7nh011L"
                                                id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="first-name"
                                        class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">First
                                        Name</label>
                                    <input type="text" name="first_name" id="first-name"
                                        class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                        value="{{ $firstName }}" disabled>
                                </div>
                                <div>
                                    <label for="last-name"
                                        class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Last
                                        Name</label>
                                    <input type="text" disabled name="last_name" id="last-name"
                                        class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                        value="{{ $lastName }}">
                                </div>
                                <div>
                                    <label for="email"
                                        class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Email</label>
                                    <input type="email" disabled name="email" id="email"
                                        class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                        placeholder="{{ Auth::user()->email }}" required="">
                                </div>
                                <div>
                                    <label for="user-permissions"
                                        class="TR_P65x9ie7j6uxFo_Cs _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                        Occupation
                                        <button type="button" data-tooltip-target="tooltip-user-permissions"
                                            data-tooltip-style="dark"
                                            class="c2LzVf9SsdSEMBrRjNwS _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n qIT6vrYn0Fr1U3wlPXaS dMTOiA3mf3FTjlHu6DqW">
                                            <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="_DVAfiyo21kM68EUVzEQ">Your occupation details</span>
                                        </button>
                                        <div id="tooltip-user-permissions" role="tooltip"
                                            class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt ZhzOGpbwY0R4TKKYr5pG mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ yVD6UHmZ_BcStq0KYFeK">
                                            Choose the occupation that best describes your field of employemnt at this time.
                                            <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
                                        </div>
                                    </label>
                                    <select id="user-permissions" required name="occupation"
                                        class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                                        <option selected disabled>-- Select Occupation --</option>
                                        <option value="Employed">Employed (Private or Public)</option>
                                        <option value="Self-Employed">Self-Employed / Business Owner</option>
                                        <option value="Student">Student</option>
                                        <option value="Freelancer">Freelancer / Contractor</option>
                                        <option value="Unemployed">Unemployed</option>
                                        <option value="Retired">Retired</option>
                                        <option value="Other">Other</option>
                                    </select>

                                </div>
                                <div>
                                    <label for="job-title"
                                        class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Job
                                        Title</label>
                                    <input type="text" name="job_title" id="job-title"
                                        class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                        placeholder="e.g React Native Developer" required="">
                                </div>
                                <div>
                                    <label for="languages"
                                        class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Languages</label>
                                    <input type="text" name="languages" id="languages"
                                        class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                        placeholder="e.g English" required="">
                                </div>


                            </div>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-4">
                        <button type="button"
                            class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V jtAJHOc7mn7b4IKRO59D RZmKBZs1E1eXw8vkE6jY _9igzqn_6D3Qq5Hcwkfk upQp7iWehfaU8VTbfx_w ezMFUVl744lvw6ht0lFe wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 _dylIDxYTN3qgvD4U597 _6wdnQrxT_dGdAdNk5AQ _fGhMnSfYmaGrv7DvZ00 jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal iVFnMKM9o7j5GIWfxm2b _Ura23Qklq9Ri0XExDX2"
                            data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                            aria-controls="accordion-collapse-body-4">
                            <span>Government-issued Documents</span>
                            <svg data-accordion-icon=""
                                class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _VPh6kIywCMfXFfQLas4 mhH4ImM_a5UEMNIgl2cJ"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m5 15 7-7 7 7"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-4" class="_SmdlCf6eUKB_V9S5IDj"
                        aria-labelledby="accordion-collapse-heading-4">
                        <div class="qUWbS_LTZujDB4XCd11V _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _aDtgllJkTzUlILozHgX">
                            <!-- Inputs -->
                            <div class="xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn AqVNvLG_H6VHhym2yKMp">
                                <div class="NM7Z1HBVjN_86WhEcXan">
                                    <label for="skills"
                                        class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Utility
                                        bill</label>
                                    <input
                                        class="t6gkcSf0Bt4MLItXvDJ_ SA5DoMHfwOFtY4h_qzuM mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl BkIbg_JwkgiyRW804Hhu Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r XIIs8ZOri3wm8Wnj9N_y H7KQDhgKsqZaTUouEUQL"
                                        name="utility_bill" aria-describedby="file_input_help" id="file_input_utility"
                                        type="file">
                                    <div class="NM7Z1HBVjN_86WhEcXan">
                                        <label for="phone-number"
                                            class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Proof
                                            of address</label>
                                        <input
                                            class="t6gkcSf0Bt4MLItXvDJ_ SA5DoMHfwOFtY4h_qzuM mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl BkIbg_JwkgiyRW804Hhu Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r XIIs8ZOri3wm8Wnj9N_y H7KQDhgKsqZaTUouEUQL"
                                            name="proof_of_address" aria-describedby="file_input_help"
                                            id="file_input_proof" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6 RZmKBZs1E1eXw8vkE6jY _9igzqn_6D3Qq5Hcwkfk _Ura23Qklq9Ri0XExDX2">
                        <button type="submit" data-modal-target="uploadIDAccordionModal"
                            data-modal-toggle="uploadIDAccordionModal"
                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                            <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 12h14m-7 7V5"></path>
                            </svg>
                            Submit
                        </button>
                        <button data-modal-toggle="uploadIDAccordionModal" type="button"
                            class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                            Discard
                        </button>
                    </div>
            </form>
        </div>
    </div>


    </div>
@endsection
