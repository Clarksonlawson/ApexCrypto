@extends('auth.v3.layouts.auth')
@section('title', 'Password Reset | ApexCrypto Finance LTD')

@section('content')
 <div class="YajDCE_nRj_FDIevNpsd Rv1FIuLTiXLx6VXsBFe9 mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _YxZw_O8dWkTljptcO7z">
    <a href="/" class="hD0sTTDgbxakubcHVW2X _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 vyo_A8gnQD1QWDPglr3h yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE tEb_kuxyY7OFFhZr5l7l">
        <img class="fhCwost7CSNRc2WSHLFW mWvJQyBFgwNGEt0h7bSP yNvZ2JlUalNo5uPPv1sf" src="{{asset('auth/images/favicon.png')}}" alt="logo">
       ApexCrypto Finance LTD 
    </a>
    <h1 class="TR_P65x9ie7j6uxFo_Cs q1oXbofRCOhVhOSB8tiU RB_um5eBnoFmJV2qT7_S OXyBmUnmaFHYN14c7Giu AX9fWk_1GRI2Pnhm8wfX __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Reset your Password</h1>
       <form class="XJih04pKHf8Cekga6Hj3 UYOSZJ1_pv3B5nt1ujCP r5KuxJZQn7b3JA3UD_k_ CH8t8DqOvljTiy3xWnXb" action="{{route('password.update')}}" method="POST">
       @csrf
        @error('password')
        
        <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            
            <div>
                <span class="font-medium">Error!</span> {{ $message }}
            </div>
        </div>
            
        @enderror
         @error('token')
        
        <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            
            <div>
                <span class="font-medium">Error!</span> {{ $message }}
            </div>
        </div>
            
        @enderror
        <div class="xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn AqVNvLG_H6VHhym2yKMp i22Nyzy1wKMZsQ3sIMsx">
            <div>
                <label for="password" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">New Password</label>
                <input type="password" name="password" id="password" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput gx_pYWtAG2cJIqhquLbx" placeholder="name@company.com" required="">
            <input class="flex-grow" type="hidden" name="email" value="{{ request()->email }}">
            <input class="flex-grow" type="hidden" name="token" value="{{ request()->token }}">
            </div>
             <div>
                <label for="password_confirmation" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Confirm New Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput gx_pYWtAG2cJIqhquLbx" placeholder="name@company.com" required="">
            </div>
        </div>
        <button type="submit" class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
        Proceed
        </button>
    </form>
    </div>
@endsection