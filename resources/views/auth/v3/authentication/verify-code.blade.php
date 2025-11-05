@extends('auth.v3.layouts.emails')
@section('title', 'Verify Email Address | ApexCrypto Finance LTD')
@section('content')
 <div class="mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi adv_Pw1petdbtsnaTJHz _YxZw_O8dWkTljptcO7z">
        <a href="#" class="hD0sTTDgbxakubcHVW2X _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 vyo_A8gnQD1QWDPglr3h yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE tEb_kuxyY7OFFhZr5l7l">
          <img class="fhCwost7CSNRc2WSHLFW mWvJQyBFgwNGEt0h7bSP yNvZ2JlUalNo5uPPv1sf" src="{{asset('auth/images/favicon.png')}}" alt="logo">
          ApexCrypto Finance LTD
        </a>
        <h1 class="TR_P65x9ie7j6uxFo_Cs q1oXbofRCOhVhOSB8tiU RB_um5eBnoFmJV2qT7_S OXyBmUnmaFHYN14c7Giu AX9fWk_1GRI2Pnhm8wfX __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Email verification</h1>
        <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"> We’ve sent a 6-digit code to <strong>{{ $email }}</strong>.  
        Please enter it below to verify your account.</p>

            @if (session('status'))
                <div class="flex p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg class="shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 7.793-4 4a1 1 0 0 1-1.414 0l-2-2A1 1 0 1 1 7.707 9.293L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <div>{{ session('status') }}</div>
                </div>
            @endif
         @if ($errors->any())
            <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Erorr</span>
            <div>
            <span class="font-medium">The following errors occured:</span>
                <ul class="mt-1.5 list-disc list-inside">
               @foreach ($errors->all() as $error) 
                    <li>{{$error}}</li>
               @endforeach
               </ul> 
            </div>
            </div>
        @endif
        <form method="POST" novalidate action="{{ route('verification.check') }}">
            @csrf
             <input type="hidden" name="email" value="{{ $email }}">
          <div class="aJF41JQLhtfw_MCGt5Th YRrCJSr_j5nopfm4duUc EU43bH15DCmsqkGyVBGj FlX7c0AwKKGiqaMG10wT SQf297smyJVNzzOO3iQL">
            <div>
              <label for="code-1" class="_DVAfiyo21kM68EUVzEQ">First code</label>
              <input type="text" maxlength="1" onkeyup="focusNextInput(this, 'code-1', 'code-2')" id="code-1" class="_Vb9igHms0hI1PQcvp_S upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 i8v96MUlFwGv9qJUkAx7 ijrOHNoSVGATsWYKl4Id q1oXbofRCOhVhOSB8tiU RB_um5eBnoFmJV2qT7_S __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput Dti3WNs_D_W48R1Mjy7P sMx5h__UKZNX6CaCuyRj yMBL9uNh7GmEQ_E_GNSh _W6lL4Tl4FRQaFVvDlM2" required="">
            </div>
            <div>
              <label for="code-2" class="_DVAfiyo21kM68EUVzEQ">Second code</label>
              <input type="text" maxlength="1" onkeyup="focusNextInput(this, 'code-1', 'code-3')" id="code-2" class="_Vb9igHms0hI1PQcvp_S upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 i8v96MUlFwGv9qJUkAx7 ijrOHNoSVGATsWYKl4Id q1oXbofRCOhVhOSB8tiU RB_um5eBnoFmJV2qT7_S __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput Dti3WNs_D_W48R1Mjy7P sMx5h__UKZNX6CaCuyRj yMBL9uNh7GmEQ_E_GNSh _W6lL4Tl4FRQaFVvDlM2" required="">
            </div>
            <div>
              <label for="code-3" class="_DVAfiyo21kM68EUVzEQ">Third code</label>
              <input type="text" maxlength="1" onkeyup="focusNextInput(this, 'code-2', 'code-4')" id="code-3" class="_Vb9igHms0hI1PQcvp_S upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 i8v96MUlFwGv9qJUkAx7 ijrOHNoSVGATsWYKl4Id q1oXbofRCOhVhOSB8tiU RB_um5eBnoFmJV2qT7_S __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput Dti3WNs_D_W48R1Mjy7P sMx5h__UKZNX6CaCuyRj yMBL9uNh7GmEQ_E_GNSh _W6lL4Tl4FRQaFVvDlM2" required="">
            </div>
            <div>
              <label for="code-4" class="_DVAfiyo21kM68EUVzEQ">Fourth code</label>
              <input type="text" maxlength="1" onkeyup="focusNextInput(this, 'code-3', 'code-5')" id="code-4" class="_Vb9igHms0hI1PQcvp_S upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 i8v96MUlFwGv9qJUkAx7 ijrOHNoSVGATsWYKl4Id q1oXbofRCOhVhOSB8tiU RB_um5eBnoFmJV2qT7_S __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput Dti3WNs_D_W48R1Mjy7P sMx5h__UKZNX6CaCuyRj yMBL9uNh7GmEQ_E_GNSh _W6lL4Tl4FRQaFVvDlM2" required="">
            </div>
            <div>
              <label for="code-5" class="_DVAfiyo21kM68EUVzEQ">Fivth code</label>
              <input type="text" maxlength="1" onkeyup="focusNextInput(this, 'code-4', 'code-6')" id="code-5" class="_Vb9igHms0hI1PQcvp_S upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 i8v96MUlFwGv9qJUkAx7 ijrOHNoSVGATsWYKl4Id q1oXbofRCOhVhOSB8tiU RB_um5eBnoFmJV2qT7_S __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput Dti3WNs_D_W48R1Mjy7P sMx5h__UKZNX6CaCuyRj yMBL9uNh7GmEQ_E_GNSh _W6lL4Tl4FRQaFVvDlM2" required="">
            </div>
            <div>
              <label for="code-6" class="_DVAfiyo21kM68EUVzEQ">Sixth code</label>
              <input type="text" maxlength="1" onkeyup="focusNextInput(this, 'code-5', 'code-6')" id="code-6" class="_Vb9igHms0hI1PQcvp_S upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 i8v96MUlFwGv9qJUkAx7 ijrOHNoSVGATsWYKl4Id q1oXbofRCOhVhOSB8tiU RB_um5eBnoFmJV2qT7_S __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput Dti3WNs_D_W48R1Mjy7P sMx5h__UKZNX6CaCuyRj yMBL9uNh7GmEQ_E_GNSh _W6lL4Tl4FRQaFVvDlM2" required="">
            </div>
          </div>
          <button type="submit" class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F HstV_RZX_OUMWsk6ZYSX ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 TKeSBXd8a26q1Ch1_Anl BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM VHHUc8eFu6cbBHjM1TAZ">
            Verify
          </button>
            
          <input type="hidden" name="code" id="full-code">

        </form>
        <p class="XJih04pKHf8Cekga6Hj3 mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs _wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 jqg6J89cvxmDiFpnV56r XIIs8ZOri3wm8Wnj9N_y r5KuxJZQn7b3JA3UD_k_">
            Didn't receive a code?
            <a href="#"
                id="resend-link"
                class="ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ W_sCP6_PDfz0Lqf875WU _JuCjEvnRAY7i_IOYa7l fZf6W_ZtzEh6EEqmWMA9"
                onclick="handleResend(event)">
                Resend.
                </a>
            </p>
            <form id="resend-form" action="{{ route('verification.resend') }}" method="POST" style="display: none;">
            @csrf
            <input type="hidden" name="email" value="{{ $email }}">
            </form>
      </div>
      <script>
        function focusNextInput(current, prevId, nextId) {
            const value = current.value;
            if (value && nextId) {
                document.getElementById(nextId).focus();
            } else if (!value && prevId) {
                document.getElementById(prevId).focus();
            }
        }
        function handleResend(e) {
            e.preventDefault();
            const link = e.target;
            link.textContent = 'Resending...';
            link.style.pointerEvents = 'none';
            document.getElementById('resend-form').submit();
            setTimeout(() => {
                link.textContent = 'Resend.';
                link.style.pointerEvents = 'auto';
            }, 30000);
        }
        // Before submitting, combine the digits into one 6-digit code
      // Attach only to the verification form
    document.querySelector('form[action="{{ route('verification.check') }}"]').addEventListener('submit', function (e) {
        const digits = [
            document.getElementById('code-1').value,
            document.getElementById('code-2').value,
            document.getElementById('code-3').value,
            document.getElementById('code-4').value,
            document.getElementById('code-5').value,
            document.getElementById('code-6').value,
        ];
        document.getElementById('full-code').value = digits.join('');
    });
    </script>
@endsection