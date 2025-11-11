@extends('auth.v3.layouts.dashboard')
@section('title', 'User Account')
@php
    use Carbon\Carbon;

@endphp

@section('content')
<div class="RZmKBZs1E1eXw8vkE6jY p_2EXc_a2sDA_h41l8QU">
  <nav class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc" aria-label="Breadcrumb">
    <ol class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 R0X5VtiZIoV7IjvrxBJ_ hPWJir4VhLurUkdR8iyI UiRKvjjl_rZRhuc5tGul">
      <li class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
        <a href="{{route('user.dashboard')}}" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe rYHHksRBEMl_guI3q0UQ YXx9oZ15oLXSCG32YPBT XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
          <svg class="E_3B4mrFSil75QXvKTiK _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M11.3 3.3a1 1 0 0 1 1.4 0l6 6 2 2a1 1 0 0 1-1.4 1.4l-.3-.3V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3c0 .6-.4 1-1 1H7a2 2 0 0 1-2-2v-6.6l-.3.3a1 1 0 0 1-1.4-1.4l2-2 6-6Z" clip-rule="evenodd"></path>
          </svg>
          Home
        </a>
      </li>
      <li>
        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
          <svg class="H9gtVTm5_rPWftCfV_9B _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _JmTNv5EiHqK2A1jcQSf _oMLPqquxUE25nEAshY6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"></path>
          </svg>
          <a href="#" class="UwVmaTmxbsmvnpCB2B1K c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe rYHHksRBEMl_guI3q0UQ YXx9oZ15oLXSCG32YPBT XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW _9RDyySiJ2_PuvLFkRD4">User</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
          <svg class="H9gtVTm5_rPWftCfV_9B _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _JmTNv5EiHqK2A1jcQSf _oMLPqquxUE25nEAshY6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"></path>
          </svg>
          <span class="UwVmaTmxbsmvnpCB2B1K c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _9RDyySiJ2_PuvLFkRD4">Account</span>
        </div>
      </li>
    </ol>
  </nav>
  <h1 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">My Account</h1>
</div>
<div class="iHPddplqYvrN6qWgvntn _wYiJGbRZyFZeCc8y7Sf _76JqJyIVrH7ISZu_lpR h6ZjYPWLn_mAxjSYNWsM">
  {{-- <div class="NM7Z1HBVjN_86WhEcXan hD0sTTDgbxakubcHVW2X mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi roTtmJKSiubwdmgJkwrv">
    <div class="AbYb4ISri2OeSBF2fen7">
      <label for="tabs" class="_DVAfiyo21kM68EUVzEQ">Menu</label>
      <select id="tabs" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
        <option>Overview</option>
        <option>Sett</option>
        <option>Projects</option>
        <option>Invoice</option>
        <option>Account</option>
      </select>
    </div>
    <ul class="_SmdlCf6eUKB_V9S5IDj ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL">
      <li>
        <a href="#" class="active VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 y6GKdvUrd7vp_pxsFb57 d8_fVOcgDmbt7UdpfeLK" aria-current="page">Overview</a>
      </li>
      <li>
        <a href="#" class="VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n iIDqXVKz6wdYnAVfRsN2 dMTOiA3mf3FTjlHu6DqW">Notification</a>
      </li>
      <li>
        <a href="#" class="VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n iIDqXVKz6wdYnAVfRsN2 dMTOiA3mf3FTjlHu6DqW">Projects</a>
      </li>
      <li>
        <a href="#" class="VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n iIDqXVKz6wdYnAVfRsN2 dMTOiA3mf3FTjlHu6DqW">Invoice</a>
      </li>
      <li>
        <a href="#" class="VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n iIDqXVKz6wdYnAVfRsN2 dMTOiA3mf3FTjlHu6DqW">Account</a>
      </li>
    </ul>
  </div> --}}
  <div class="hD0sTTDgbxakubcHVW2X mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _YxZw_O8dWkTljptcO7z roTtmJKSiubwdmgJkwrv">
    <h2 class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
      Profile picture<button data-popover-target="popover-image-description" type="button" class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">
        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd"></path>
        </svg>

        <span class="_DVAfiyo21kM68EUVzEQ">Show information</span>
      </button>
    </h2>
    <div id="popover-image-description" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt p4AJk9ET4ZlyzNjHjPnM mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf yVD6UHmZ_BcStq0KYFeK">
      You can change your profile photo here, you can upload a new photo from your computer.
      <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
    </div>
    <div class="XJih04pKHf8Cekga6Hj3 YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V pjVv_HvtzX_QkbymyvoG _fGhMnSfYmaGrv7DvZ00 r5KuxJZQn7b3JA3UD_k_ _qELbPoH7h3PHo6d1UFn">
      <img class="jQTg0WAmErnoq6yqaBVq _m642ApgC88SsmX5RGWt nXXJb4baZCQ1uzyny9BT mveJTCIb2WII7J4sY22F tkZo48dB4RhnHSlDXzoe" src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : 'https://www.gravatar.com/avatar/' . md5(strtolower(trim(Auth::user()->email))) . '?s=30&d=identicon' }}" alt="Helene avatar">
      <div class="t6gkcSf0Bt4MLItXvDJ_ TVHgSaRh3muGJct_epr9">
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
        <h4 class="q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">{{Auth::user()->name}}</h4>
        <span class="vyo_A8gnQD1QWDPglr3h _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">{{Auth::user()->email}}</span>
      </div>
    </div>
    <button id="profilePictureButton" data-modal-target="profilePictureModal" data-modal-toggle="profilePictureModal" type="button" class="XJih04pKHf8Cekga6Hj3 _k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM r5KuxJZQn7b3JA3UD_k_ icxWjIgUd9_dzYucx1nx">
      <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.8 1.3l-2.5 2.5A4 4 0 0 1 5 8Zm4 5H7a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h2.2a3 3 0 0 1-.1-1.6l.6-3.4a3 3 0 0 1 .9-1.5L9 13Zm9-5a3 3 0 0 0-2 .9l-6 6a1 1 0 0 0-.3.5L9 18.8a1 1 0 0 0 1.2 1.2l3.4-.7c.2 0 .3-.1.5-.3l6-6a3 3 0 0 0-2-5Z" clip-rule="evenodd"></path>
      </svg>
      Edit
    </button>
  </div>
  <div class="hD0sTTDgbxakubcHVW2X mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _YxZw_O8dWkTljptcO7z roTtmJKSiubwdmgJkwrv">
    <form action="{{route("update.user.metadata")}}" method="POST">
        @csrf
      <div class="xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V pjVv_HvtzX_QkbymyvoG _fGhMnSfYmaGrv7DvZ00 AqVNvLG_H6VHhym2yKMp _qELbPoH7h3PHo6d1UFn">
        <div>
          <label for="countries" class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Timezone<button data-popover-target="popover-timezone-description" type="button" class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">
              <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd"></path>
              </svg>
              <span class="_DVAfiyo21kM68EUVzEQ">Show information</span>
            </button></label>
          <select id="countries" name="timezone" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
            <option selected="">UTC-08:00 - Pacific Standard Time (PST)</option>
            <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
            <option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
            <option value="-10:00">(GMT -10:00) Hawaii</option>
            <option value="-09:50">(GMT -9:30) Taiohae</option>
            <option value="-09:00">(GMT -9:00) Alaska</option>
            <option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
            <option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
            <option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
            <option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
            <option value="-04:50">(GMT -4:30) Caracas</option>
            <option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
            <option value="-03:50">(GMT -3:30) Newfoundland</option>
            <option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
            <option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
            <option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
            <option value="+00:00">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
            <option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
            <option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
            <option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
            <option value="+03:50">(GMT +3:30) Tehran</option>
            <option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
            <option value="+04:50">(GMT +4:30) Kabul</option>
            <option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
            <option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
            <option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
            <option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
            <option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
            <option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
            <option value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
            <option value="+08:75">(GMT +8:45) Eucla</option>
            <option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
            <option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
            <option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
            <option value="+10:50">(GMT +10:30) Lord Howe Island</option>
            <option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
            <option value="+11:50">(GMT +11:30) Norfolk Island</option>
            <option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
            <option value="+12:75">(GMT +12:45) Chatham Islands</option>
            <option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
            <option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
          </select>
          <div id="popover-timezone-description" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt p4AJk9ET4ZlyzNjHjPnM mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf yVD6UHmZ_BcStq0KYFeK">
            A timezone is a region of the Earth that has the same standard time.
            <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
          </div>
        </div>
        <div>
          <label for="language" class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Language</label>
          <select id="language" name="language" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
            <option selected="">Choose your account type</option>
            <option value="EN">English (US)</option>
            <option value="EN">English (UK)</option>
            <option value="SP">Spanish</option>
            <option value="FR">French</option>
            <option value="DE">German</option>
            <option value="CH">Chinese (Mandarin)</option>
          </select>
        </div>
        <div>
          <label for="date-of-birth" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Date of birth</label>
          <div class="ahOqFrhzLjivRe8a1kX_">
            <div class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua QwmoUJgpayek67mTbNEE YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _JkMHdqR7opeZfvAIXNl">
              <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <input datepicker="" name="dob" type="text" id="date-of-birth" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx n_1ZsN_bGSniwE3IxRHu c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Select date">
          </div>
        </div>
        <div>
          <label for="gender" class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Gender</label>
          <select id="gender" name="gender" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
            <option selected="">Choose your gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            {{-- <option value="education">Other</option> --}}
          </select>
        </div>
      </div>
      <button type="submit" class="XJih04pKHf8Cekga6Hj3 t6gkcSf0Bt4MLItXvDJ_ Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM r5KuxJZQn7b3JA3UD_k_ icxWjIgUd9_dzYucx1nx">
        Save
      </button>
    </form>
  </div>
  <div class="NM7Z1HBVjN_86WhEcXan hD0sTTDgbxakubcHVW2X mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _YxZw_O8dWkTljptcO7z roTtmJKSiubwdmgJkwrv">
    <h2 class="hD0sTTDgbxakubcHVW2X _8exizyun8Av9ozDV0B8 vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V _fGhMnSfYmaGrv7DvZ00 pjVv_HvtzX_QkbymyvoG">
      Personal information<button data-popover-target="popover-info-description" type="button" class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">
        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd"></path>
        </svg>

        <span class="_DVAfiyo21kM68EUVzEQ">Show information</span>
      </button>
    </h2>
    <div id="popover-info-description" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt p4AJk9ET4ZlyzNjHjPnM mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf yVD6UHmZ_BcStq0KYFeK">
      This information is presented on your public profile, please specify carefully what you want to display.
      <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
    </div>
    <div class="hD0sTTDgbxakubcHVW2X XJih04pKHf8Cekga6Hj3 xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V pjVv_HvtzX_QkbymyvoG _fGhMnSfYmaGrv7DvZ00 tEb_kuxyY7OFFhZr5l7l r5KuxJZQn7b3JA3UD_k_ AqVNvLG_H6VHhym2yKMp _9LWsn_129nVvhxnKbNw _qELbPoH7h3PHo6d1UFn">
      <!-- Column -->
      <div>
        <dl>
          <dt class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Full name</dt>
          <dd class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y N4SFnsqiVKm1oFHmSTyG">{{Auth::user()->name}}</dd>
          <dt class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Biography</dt>
          <dd class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y N4SFnsqiVKm1oFHmSTyG">
            Loan Requester
          </dd>
          <dt class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Social</dt>
          <dd class="hD0sTTDgbxakubcHVW2X _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 R0X5VtiZIoV7IjvrxBJ_ N4SFnsqiVKm1oFHmSTyG">
            <a href="#" data-tooltip-target="tooltip-facebook" class="mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
              <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
              </svg>
              <span class="_DVAfiyo21kM68EUVzEQ">Facebook</span>
            </a>
            <div id="tooltip-facebook" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r">
              Facebook profile
              <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-instagram" class="mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
              <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
              </svg>
              <span class="_DVAfiyo21kM68EUVzEQ">Instagram</span>
            </a>
            <div id="tooltip-instagram" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r">
              Instagram profile
              <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-github" class="mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
              <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
              </svg>
              <span class="_DVAfiyo21kM68EUVzEQ">GitHub</span>
            </a>
            <div id="tooltip-github" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r">
              GitHub profile
              <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-dribbble" class="mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
              <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
              </svg>
              <span class="_DVAfiyo21kM68EUVzEQ">Dribbble</span>
            </a>
            <div id="tooltip-dribbble" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r">
              Dribbble profile
              <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
            </div>
          </dd>
          <dt class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Location</dt>
          <dd class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE N4SFnsqiVKm1oFHmSTyG">
            <svg class="C_aqJ70iNmOTNL788uQu _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M12 2a8 8 0 0 1 6.6 12.6l-.1.1-.6.7-5.1 6.2a1 1 0 0 1-1.6 0L6 15.3l-.3-.4-.2-.2v-.2A8 8 0 0 1 11.8 2Zm3 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" clip-rule="evenodd"></path>
            </svg>
            <span class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">California, United States of America</span>
          </dd>
          <dt class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Job Title</dt>
          <dd class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
            <svg class="C_aqJ70iNmOTNL788uQu _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.4l1.4.7a7.7 7.7 0 0 0 .7.3 21 21 0 0 0 16.4-.3l1.5-.7V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5c0-.6-.4-1-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.4 7.9.6-.3V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.4l.6.3a10 10 0 0 0 .7.3 23 23 0 0 0 18-.3h.1L21 13l.4.9ZM12 10a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd"></path>
            </svg>
            <span class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Occupation</span>
          </dd>
        </dl>
      </div>
      <!-- Column -->
      <dl>
        <dt class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Email Adress</dt>
        <dd class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y N4SFnsqiVKm1oFHmSTyG">{{Auth::user()->email}}</dd>
        <dt class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Home Adress</dt>
        <dd class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y N4SFnsqiVKm1oFHmSTyG">Address</dd>
        <dt class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Phone Number</dt>
        <dd class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y N4SFnsqiVKm1oFHmSTyG">{{Auth::user()->phone}}</dd>  
      </dl>
    </div>
    <button id="updateUserButton" data-modal-target="updateUserModal" data-modal-toggle="updateUserModal" class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM icxWjIgUd9_dzYucx1nx" type="button">
      <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.8 1.3l-2.5 2.5A4 4 0 0 1 5 8Zm4 5H7a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h2.2a3 3 0 0 1-.1-1.6l.6-3.4a3 3 0 0 1 .9-1.5L9 13Zm9-5a3 3 0 0 0-2 .9l-6 6a1 1 0 0 0-.3.5L9 18.8a1 1 0 0 0 1.2 1.2l3.4-.7c.2 0 .3-.1.5-.3l6-6a3 3 0 0 0-2-5Z" clip-rule="evenodd"></path>
      </svg>
      Edit
    </button>
  </div>
  <div class="NM7Z1HBVjN_86WhEcXan mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _YxZw_O8dWkTljptcO7z">
    <h2 class="hD0sTTDgbxakubcHVW2X _8exizyun8Av9ozDV0B8 vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V _fGhMnSfYmaGrv7DvZ00 pjVv_HvtzX_QkbymyvoG">
      Financial Information <button data-popover-target="popover-education-description" type="button" class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">
        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd"></path>
        </svg>
        <span class="_DVAfiyo21kM68EUVzEQ">Show information</span>
      </button>
    </h2>
    <div id="popover-education-description" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt p4AJk9ET4ZlyzNjHjPnM mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf yVD6UHmZ_BcStq0KYFeK">
      This information is presented on your public profile, please specify carefully what you want to display.
      <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
    </div>
    <div class="hD0sTTDgbxakubcHVW2X XJih04pKHf8Cekga6Hj3 xCPtuxM4_gihvpPwv9bX Bcw8VuwRWYxPGjWjS6Ig EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V pjVv_HvtzX_QkbymyvoG _fGhMnSfYmaGrv7DvZ00 tEb_kuxyY7OFFhZr5l7l r5KuxJZQn7b3JA3UD_k_ _qELbPoH7h3PHo6d1UFn _wDL7UcyA_Sot_H5YE7K I2AWli8MQm_iFN_CJEuc">
      <ul>
        <h3 class="hD0sTTDgbxakubcHVW2X yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE tEb_kuxyY7OFFhZr5l7l">My Collaterals</h3>
      @if ($collaterals->count() >0)
        @foreach ($collaterals as $collateral)
            <li class="EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V pjVv_HvtzX_QkbymyvoG _fGhMnSfYmaGrv7DvZ00">
          <div class="Q_jg_EPdNf9eDMn1mLI2 tI6ZVpHcCWxY_MKHSQWC rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL xr7CqaTHxTvDOrwAH2SW">
            <div class="YRrCJSr_j5nopfm4duUc t3O38hGwkMJkf3_U2LhZ _Ny9QDPUchYYWYAZdFEM VQS2tmQ_zFyBOC2tkmto Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs jqg6J89cvxmDiFpnV56r">
              <img src="{{ asset('assets/images/item/' . $collateral->asset_name . '.svg') }}"width="18" height="18" fill="white" class="MnxxlQlR1H0xJuMEE8Yr" alt="">
               
            </div>
            <div class="G4dLHP1O7x3gaD0_p7Kc _74lpPUMEtHf6F0_fjLe">
              <p class="vfNYjqjYMlN1XskEucCt d3C8uAdJKNl1jzfE9ynq yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">{{$collateral->asset_name}}</p>
              <p class="vfNYjqjYMlN1XskEucCt c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">{{$collateral->amount}} ~ ${{number_format($collateral->usd_value, 2)}}</p>
            </div>
            <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
              <span class="_6aYwdjzDCvXK0bVJQOb YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI _9dH7mrOkzM4RTmidHTs St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe kAEXvwFGb849z6BUdJjG jqg6J89cvxmDiFpnV56r EJIoL6514Ry8r7nh011L">
                <svg class="_j7jrBV2UWRXe__bk9uf OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
                </svg>
                {{Carbon::parse($collateral->created_at)->format('Y')}} - Present
              </span>
            </div>
          </div>
        </li>
        @endforeach
          
      @else
          <li>No collaterals yet.</li>
      @endif
      </ul>
      <ul>
        <h3 class="hD0sTTDgbxakubcHVW2X yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE tEb_kuxyY7OFFhZr5l7l">My Loans</h3>
        @if ($loans->count() >0)
            @foreach ($loans as $loan)
            <li class="EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V pjVv_HvtzX_QkbymyvoG _fGhMnSfYmaGrv7DvZ00">
          <div class="Q_jg_EPdNf9eDMn1mLI2 tI6ZVpHcCWxY_MKHSQWC rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL xr7CqaTHxTvDOrwAH2SW">
            <div class="YRrCJSr_j5nopfm4duUc t3O38hGwkMJkf3_U2LhZ _Ny9QDPUchYYWYAZdFEM VQS2tmQ_zFyBOC2tkmto Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs c8dCx6gnV43hTOLV6ks5 IOPhczRgtphv6NdNBDjj sdSaZcRa4_We5kKaX4pf __9sbu0yrzdhGIkLWNXl jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE">
                 <img src="{{ asset('assets/images/item/' . $loan->asset . '.svg') }}"width="18" height="18" fill="white" class="MnxxlQlR1H0xJuMEE8Yr" alt="">

            </div>
            <div class="G4dLHP1O7x3gaD0_p7Kc _74lpPUMEtHf6F0_fjLe">
              <p class="vfNYjqjYMlN1XskEucCt d3C8uAdJKNl1jzfE9ynq yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">{{$loan->loan_id}}</p>
              <p class="vfNYjqjYMlN1XskEucCt c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">${{number_format($loan->amount_usd, 2)}}</p>
            </div>
            <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
              <span class="_6aYwdjzDCvXK0bVJQOb YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI _9dH7mrOkzM4RTmidHTs St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe kAEXvwFGb849z6BUdJjG jqg6J89cvxmDiFpnV56r EJIoL6514Ry8r7nh011L">
                <svg class="_j7jrBV2UWRXe__bk9uf OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
                </svg>
                {{Carbon::parse($collateral->created_at)->format('Y')}} - Present
              </span>
            </div>
          </div>
        </li>
       @endforeach
        @else
            <li>No loans yet.</li>
        @endif
        
      </ul>
    </div>
    <button id="updateUserButton" data-modal-target="updateUserModal" data-modal-toggle="updateUserModal" class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM icxWjIgUd9_dzYucx1nx" type="button">
      <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.8 1.3l-2.5 2.5A4 4 0 0 1 5 8Zm4 5H7a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h2.2a3 3 0 0 1-.1-1.6l.6-3.4a3 3 0 0 1 .9-1.5L9 13Zm9-5a3 3 0 0 0-2 .9l-6 6a1 1 0 0 0-.3.5L9 18.8a1 1 0 0 0 1.2 1.2l3.4-.7c.2 0 .3-.1.5-.3l6-6a3 3 0 0 0-2-5Z" clip-rule="evenodd"></path>
      </svg>
      Edit
    </button>
  </div>
</div>

<!-- Edit personal info modal -->
<div id="updateUserModal" tabindex="-1" aria-hidden="true" class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
  <div class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ TnCneWVBJS9LByVLKjZH _wYiJGbRZyFZeCc8y7Sf">
    <!-- Modal content -->
    <form action="{{route('update.user.info')}}" method="POST" class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi">
      @csrf
        <!-- Modal header -->
      <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j zQeL_bQRwh9WGEnvS5ug RZmKBZs1E1eXw8vkE6jY _9igzqn_6D3Qq5Hcwkfk _Ura23Qklq9Ri0XExDX2">
       
        <h3 class="y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Update user</h3>
        <button type="button" class="zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" data-modal-toggle="updateUserModal">
          <svg aria-hidden="true" class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
          <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
        </button>
      </div>
      <div id="accordion-collapse-update-user" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-1">
          <button type="button" class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j jtAJHOc7mn7b4IKRO59D RZmKBZs1E1eXw8vkE6jY _9igzqn_6D3Qq5Hcwkfk upQp7iWehfaU8VTbfx_w ezMFUVl744lvw6ht0lFe wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 _dylIDxYTN3qgvD4U597 _6wdnQrxT_dGdAdNk5AQ _fGhMnSfYmaGrv7DvZ00 jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal iVFnMKM9o7j5GIWfxm2b _Ura23Qklq9Ri0XExDX2" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
            <span>General Information</span>
            <svg data-accordion-icon="" class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _VPh6kIywCMfXFfQLas4 mhH4ImM_a5UEMNIgl2cJ" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"></path>
            </svg>
          </button>
        </h2>
        <div id="accordion-collapse-body-1" class="" aria-labelledby="accordion-collapse-heading-1">
          <div class="qUWbS_LTZujDB4XCd11V _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _aDtgllJkTzUlILozHgX">
            <!-- Inputs -->
            <div class="xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn AqVNvLG_H6VHhym2yKMp">
              <div class="wwofGIyK_H_z3Xjelq8G">
                <label class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" for="file_input">Upload avatar</label>
                <div class="t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 rvdRhGyExrNYTA6euxsF">
                  <img class="hD0sTTDgbxakubcHVW2X v2F5G_Fm6X1wxdNJdQlJ XO0Hd72IH1CH2AVjcbWM RpVwy4sO7Asb86CncKJ_ tkZo48dB4RhnHSlDXzoe fqL_oteKquEXvTu6w4NP" src="../../images/users/helene-engels.png" alt="Helene avatar">
                  <div class="t6gkcSf0Bt4MLItXvDJ_">
                    <input class="t6gkcSf0Bt4MLItXvDJ_ SA5DoMHfwOFtY4h_qzuM mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl BkIbg_JwkgiyRW804Hhu Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r XIIs8ZOri3wm8Wnj9N_y H7KQDhgKsqZaTUouEUQL" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="_hpGev6RXFut0Jm_iRgf iRFVFKvV59EjIwjCM62m gMXmdpOPfqG_3CKkL0VD _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 EJIoL6514Ry8r7nh011L" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 m41Vrl_e2vSLFsNP2J5c">
                      <button type="button" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                        <svg class="Hf613rHdsiopu7YakI_r C_aqJ70iNmOTNL788uQu _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Upload new picture
                      </button>
                      <button type="button" class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 _6wdnQrxT_dGdAdNk5AQ Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                        Delete
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <label for="first-name" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">First Name</label>
                <input type="text" name="first-name" id="first-name" value="Bonnie" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="John" required="">
              </div>
              <div>
                <label for="last-name" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Last Name</label>
                <input type="text" name="last-name" id="last-name" value="Green" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Doe" required="">
              </div>
              <div>
                <label for="email" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Email</label>
                <input type="email" name="email" id="email" value="bonnie.green@company.com" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="john@company.com" required="">
              </div>
              <div>
                <label for="user-permissions" class="TR_P65x9ie7j6uxFo_Cs _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                  User Permissions
                  <button type="button" data-tooltip-target="tooltip-dark" data-tooltip-style="dark" class="c2LzVf9SsdSEMBrRjNwS _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n qIT6vrYn0Fr1U3wlPXaS dMTOiA3mf3FTjlHu6DqW">
                    <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="_DVAfiyo21kM68EUVzEQ">User permission details</span>
                  </button>
                  <div id="tooltip-dark" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt ZhzOGpbwY0R4TKKYr5pG mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ yVD6UHmZ_BcStq0KYFeK">
                    User permissions, part of the overall user management process, are access granted to users to specific resources such as files, applications, networks, or devices.
                    <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
                  </div>
                </label>
                <select id="user-permissions" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                  <option selected="">Operational</option>
                  <option value="NO">Non Operational</option>
                </select>
              </div>
              <div>
                <label for="job-title" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Job Title</label>
                <input type="text" name="job-title" id="job-title" value="Back-end software engineer" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Ex. React Developer" required="">
              </div>
              <div>
                <label for="languages" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Languages</label>
                <input type="text" name="languages" id="languages" value="English, German" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Ex. English, Spanish" required="">
              </div>
              <div>
                <label for="account" class="TR_P65x9ie7j6uxFo_Cs _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                  Account
                  <button type="button" data-tooltip-target="tooltip-account" data-tooltip-style="dark" class="c2LzVf9SsdSEMBrRjNwS _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n qIT6vrYn0Fr1U3wlPXaS dMTOiA3mf3FTjlHu6DqW">
                    <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="_DVAfiyo21kM68EUVzEQ">Account details</span>
                  </button>
                  <div id="tooltip-account" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt ZhzOGpbwY0R4TKKYr5pG mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ yVD6UHmZ_BcStq0KYFeK">
                    Choose here your account type.
                    <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
                  </div>
                </label>
                <select id="account" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                  <option selected="">PRO Account</option>
                  <option value="DF">Default Account</option>
                </select>
              </div>
              <div>
                <label for="user-role" class="TR_P65x9ie7j6uxFo_Cs _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                  User Role
                  <button type="button" data-tooltip-target="tooltip-user-role" data-tooltip-style="dark" class="c2LzVf9SsdSEMBrRjNwS _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n qIT6vrYn0Fr1U3wlPXaS dMTOiA3mf3FTjlHu6DqW">
                    <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="_DVAfiyo21kM68EUVzEQ">User role details</span>
                  </button>
                  <div id="tooltip-user-role" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt ZhzOGpbwY0R4TKKYr5pG mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ yVD6UHmZ_BcStq0KYFeK">
                    Flowbite provides 7 predefined roles: Owner, Admin, Editor, Contributor and Viewer. Assign the most suitable role to each user, giving them the most appropriate level of control.
                    <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
                  </div>
                </label>
                <select id="user-role" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                  <option selected="">Owner</option>
                  <option value="AD">Admin</option>
                  <option value="ED">Editor</option>
                  <option value="CO">Contributor</option>
                  <option value="VI">Viewer</option>
                </select>
              </div>
              <div class="wwofGIyK_H_z3Xjelq8G">
                <label for="email-status" class="TR_P65x9ie7j6uxFo_Cs _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                  Email Status
                  <button type="button" data-tooltip-target="tooltip-email-status" data-tooltip-style="dark" class="c2LzVf9SsdSEMBrRjNwS _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n qIT6vrYn0Fr1U3wlPXaS dMTOiA3mf3FTjlHu6DqW">
                    <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="_DVAfiyo21kM68EUVzEQ">Email status details</span>
                  </button>
                  <div id="tooltip-email-status" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt ZhzOGpbwY0R4TKKYr5pG mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ yVD6UHmZ_BcStq0KYFeK">
                    As an administrator, you can view the status of a user's email. The status indicates whether a user's email is verified or not.
                    <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
                  </div>
                </label>
                <select id="email-status" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                  <option selected="">Verified</option>
                  <option value="NV">Not verified</option>
                </select>
              </div>
              <div>
                <label for="password" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Password</label>
                <input type="password" name="password" id="password" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="•••••••••" required="">
              </div>
              <div>
                <label for="confirm-password" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Confirm password</label>
                <input type="password" name="confirm-password" id="confirm-password" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="•••••••••" required="">
              </div>
              <div class="wwofGIyK_H_z3Xjelq8G">
                <label class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" for="role">Assign Role</label>
                <div class="YRrCJSr_j5nopfm4duUc d4louhNic5PFgJGRKqn6">
                  <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                    <input id="inline-checkbox" type="checkbox" value="" name="role" class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                    <label for="inline-checkbox" class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">Administrator</label>
                  </div>
                  <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                    <input id="inline-2-checkbox" type="checkbox" value="" name="role" class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                    <label for="inline-2-checkbox" class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">Member</label>
                  </div>
                  <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                    <input checked="" id="inline-checked-checkbox" type="checkbox" value="" name="role" class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                    <label for="inline-checked-checkbox" class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">Viewer</label>
                  </div>
                </div>
              </div>
              <div>
                <div class="TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Status</div>
                <label for="status" class="ahOqFrhzLjivRe8a1kX_ _k0lTW0vvzboctTxDi2R SA5DoMHfwOFtY4h_qzuM Q_jg_EPdNf9eDMn1mLI2">
                  <input type="checkbox" value="" id="status" class="aOpxpduJhFdYT26YEhfy _DVAfiyo21kM68EUVzEQ">
                  <div class="aOpxpduJhFdYT26YEhfy MnxxlQlR1H0xJuMEE8Yr Rr_S4jo1he4sYSgq5LE_ RpVwy4sO7Asb86CncKJ_ WwS1mve_UI16RedcVHEs S_YYrpbZltCzhBNM_SJm E1qOVwKn20GoIa4DLw0e suTnhPGy2O_0tdt_JtLf _ZAH00UefAHB41FBmf9x hUGJ42LbOAuwsGFln4hc B0lYQ0_9vlBf0CZnE9ef UnITYitJpD1sMNddmIZ9 mVEwBMPbZ9_uWPD1J6FL _o9AusRI8qWv3B0gIXh4 _6REaLtGbw9GOx78YcIB mckNmP7av8zMKc516vkZ _LFgmR5pGKzbcmZZxpN3 k0G8B6nnxyBP2SOsOaeZ K9lI4s8CJ1eWRBhVkBu_ BprGbFuFZu_JMvPp_KVR _zhHKgVWUHLt2EvhvLe2 nmPW5_vZUJWfg188gd6P Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r wFpbzujv4k1ue7OGEHIk"></div>
                  <span class="oA7zcT_42jVeFuWTXQnq c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 EJIoL6514Ry8r7nh011L">Inactive</span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <h2 id="accordion-collapse-heading-2">
          <button type="button" class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V jtAJHOc7mn7b4IKRO59D RZmKBZs1E1eXw8vkE6jY _9igzqn_6D3Qq5Hcwkfk upQp7iWehfaU8VTbfx_w ezMFUVl744lvw6ht0lFe wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 _dylIDxYTN3qgvD4U597 _6wdnQrxT_dGdAdNk5AQ _fGhMnSfYmaGrv7DvZ00 jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal iVFnMKM9o7j5GIWfxm2b _Ura23Qklq9Ri0XExDX2" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
            <span>Additional Information</span>
            <svg data-accordion-icon="" class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _VPh6kIywCMfXFfQLas4 mhH4ImM_a5UEMNIgl2cJ" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"></path>
            </svg>
          </button>
        </h2>
        <div id="accordion-collapse-body-2" class="_SmdlCf6eUKB_V9S5IDj" aria-labelledby="accordion-collapse-heading-2">
          <div class="qUWbS_LTZujDB4XCd11V RZmKBZs1E1eXw8vkE6jY p_2EXc_a2sDA_h41l8QU _fGhMnSfYmaGrv7DvZ00 _Ura23Qklq9Ri0XExDX2 xJajTVJLfQ1ey6APkRdC">
            <!-- Inputs -->
            <div class="xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn AqVNvLG_H6VHhym2yKMp">
              <div class="NM7Z1HBVjN_86WhEcXan">
                <label for="skills" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Skills</label>
                <input type="text" name="skills" id="skills" value="Tailwind CSS, Flowbite, React" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Ex. Figma, HTML, Javascript" required="">
              </div>
              <div class="NM7Z1HBVjN_86WhEcXan">
                <label for="phone-number" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Phone Number</label>
                <input type="text" name="phone-number" id="phone-number" value="+1631 442 978" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Ex. +1234 567 890" required="">
              </div>
              <div class="NM7Z1HBVjN_86WhEcXan qw6dPAkUJWgZjzmQV7Xf">
                <label for="linkedin" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Linkedin URL</label>
                <input type="url" name="linkedin" id="linkedin" value="https://www.linkedin.com/in/bonniegreen/" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Ex. https://www.linkedin.com/in/example/" required="">
              </div>
              <div class="NM7Z1HBVjN_86WhEcXan qw6dPAkUJWgZjzmQV7Xf">
                <label for="facebook" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Facebook</label>
                <input type="url" name="facebook" id="facebook" value="https://www.facebook.com/bonniegreen" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Ex. https://www.facebook.com/example" required="">
              </div>
              <div class="NM7Z1HBVjN_86WhEcXan qw6dPAkUJWgZjzmQV7Xf">
                <label for="twitter" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Twitter</label>
                <input type="url" name="twitter" id="twitter" value="https://twitter.com/bonniegreen" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Ex. https://twitter.com/example" required="">
              </div>
              <div class="NM7Z1HBVjN_86WhEcXan qw6dPAkUJWgZjzmQV7Xf">
                <label for="personal-website" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Personal Website</label>
                <input type="url" name="personal-website" id="personal-website" value="https://flowbite.com" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Ex. https://website.com" required="">
              </div>
              <div class="NM7Z1HBVjN_86WhEcXan">
                <label for="country" class="TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Country</label>
                <select id="country" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                  <option selected="">United States</option>
                  <option value="NO">Australia</option>
                  <option value="NO">United Kingdom</option>
                  <option value="NO">Italy</option>
                  <option value="NO">Germany</option>
                  <option value="NO">Spain</option>
                  <option value="NO">France</option>
                  <option value="NO">Canada</option>
                </select>
              </div>
              <div class="NM7Z1HBVjN_86WhEcXan qw6dPAkUJWgZjzmQV7Xf">
                <label for="address" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Address</label>
                <input type="text" name="address" id="address" value="92 Milles Drive, Newark, NJ 07123" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Ex. 92 Milles Drive, Newark, NJ 07123" required="">
              </div>
              <div class="NM7Z1HBVjN_86WhEcXan qw6dPAkUJWgZjzmQV7Xf">
                <label for="timezone" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Timezone</label>
                <input type="text" name="timezone" id="timezone" value="GMT+3" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Ex. GMT+2" required="">
              </div>
              <div class="NM7Z1HBVjN_86WhEcXan">
                <label for="biography" class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Biography</label>
                <textarea id="biography" rows="4" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl _hdgiF1mbjcSX9FS1s0y LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Write your biography...">Hello, I'm Helene Engels, USA Designer, Creating things that stand out, Featured by Adobe, Figma, Webflow and others, Daily design tips &amp; resources, Exploring Web3.</textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6 RZmKBZs1E1eXw8vkE6jY _9igzqn_6D3Qq5Hcwkfk _Ura23Qklq9Ri0XExDX2 V_gfI41xqEa5fazEJgI8">
        <button type="submit" class="mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
          Update user
        </button>
        <button type="button" class="focus:outline-non _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F lZje8JvlESgmRAyE5oBT ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 _hwGprpWFg861uOaLs98 _dylIDxYTN3qgvD4U597 wGCv_lBIef6dPW_LgqPQ _MmSrNmxZCeZqDNT2Gd8 l3ymlaPuvQ5fdfBZIh_D g0psQAXAFirvUBcDyMSb">
          <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"></path>
          </svg>
          Delete
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Edit profile picture modal -->
<div id="profilePictureModal" tabindex="-1" aria-hidden="true" class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
  <div class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Rv1FIuLTiXLx6VXsBFe9 _wYiJGbRZyFZeCc8y7Sf">
    <!-- Modal content -->
    <div class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
      <!-- Modal header -->
      <div class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j zQeL_bQRwh9WGEnvS5ug N4SFnsqiVKm1oFHmSTyG">
        <h3 class="y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Update profile picture</h3>
        <button type="button" class="zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" data-modal-toggle="profilePictureModal">
          <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"></path>
          </svg>

          <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <form action="#">
        <div class="hD0sTTDgbxakubcHVW2X N4SFnsqiVKm1oFHmSTyG">
          <label class="_DVAfiyo21kM68EUVzEQ" for="file_input">Upload avatar</label>
          <div class="t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 rvdRhGyExrNYTA6euxsF">
            <img class="hD0sTTDgbxakubcHVW2X _m642ApgC88SsmX5RGWt nXXJb4baZCQ1uzyny9BT mveJTCIb2WII7J4sY22F tkZo48dB4RhnHSlDXzoe fqL_oteKquEXvTu6w4NP" src="../../images/users/joseph-mcfall.png" alt="Helene avatar">
            <div class="t6gkcSf0Bt4MLItXvDJ_">
              <input class="t6gkcSf0Bt4MLItXvDJ_ SA5DoMHfwOFtY4h_qzuM mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl BkIbg_JwkgiyRW804Hhu Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r XIIs8ZOri3wm8Wnj9N_y H7KQDhgKsqZaTUouEUQL" aria-describedby="file_input_help" id="file_input" type="file">
              <p class="_hpGev6RXFut0Jm_iRgf iRFVFKvV59EjIwjCM62m gMXmdpOPfqG_3CKkL0VD _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 EJIoL6514Ry8r7nh011L" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
              <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 m41Vrl_e2vSLFsNP2J5c">
                <button type="button" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                  <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 3a1 1 0 0 1 .78.375l4 5a1 1 0 1 1-1.56 1.25L13 6.85V14a1 1 0 1 1-2 0V6.85L8.78 9.626a1 1 0 1 1-1.56-1.25l4-5A1 1 0 0 1 12 3ZM9 14v-1H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-4v1a3 3 0 1 1-6 0Zm8 2a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z" clip-rule="evenodd"></path>
                  </svg>

                  Upload new picture
                </button>
                <button type="button" class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                  Delete
                </button>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
          Save
        </button>
      </form>
    </div>
  </div>
</div>

@endsection