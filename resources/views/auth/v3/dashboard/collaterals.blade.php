@extends('auth.v3.layouts.dashboard')
@section('title', 'Collaterals | User Dashboard')

@php
    use Carbon\Carbon;
@endphp
@section('content')
  <div class="xCPtuxM4_gihvpPwv9bX wDF2ls8Apmy3KGiCbxI_ iHPddplqYvrN6qWgvntn EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 pjVv_HvtzX_QkbymyvoG _fGhMnSfYmaGrv7DvZ00 h8KYXnua2NT4kTVzieom">
  <div class="EWLTGduHCjFnjN6tLCXV _Zt0QWNoskeJIuWJ94UW XJih04pKHf8Cekga6Hj3">
    <nav class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc" aria-label="Breadcrumb">
      <ol class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 R0X5VtiZIoV7IjvrxBJ_ hPWJir4VhLurUkdR8iyI UiRKvjjl_rZRhuc5tGul">
        <li class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
          <a href="/" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe rYHHksRBEMl_guI3q0UQ YXx9oZ15oLXSCG32YPBT XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
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
            <a href="{{route('user.dashboard')}}" class="UwVmaTmxbsmvnpCB2B1K c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe rYHHksRBEMl_guI3q0UQ YXx9oZ15oLXSCG32YPBT XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW _9RDyySiJ2_PuvLFkRD4">Dashboard</a>
          </div>
        </li>
        <li aria-current="page">
          <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
            <svg class="H9gtVTm5_rPWftCfV_9B _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _JmTNv5EiHqK2A1jcQSf _oMLPqquxUE25nEAshY6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"></path>
            </svg>
            <span class="UwVmaTmxbsmvnpCB2B1K c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _9RDyySiJ2_PuvLFkRD4">Collaterals</span>
          </div>
        </li>
      </ol>
      
    </nav>
    <h1 class="hD0sTTDgbxakubcHVW2X vyo_A8gnQD1QWDPglr3h yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Flowbite Datatable</h1>
    <div class="xCPtuxM4_gihvpPwv9bX Q4KJqTa5GBaAJ29_u66A iHPddplqYvrN6qWgvntn xpaiYVuW232U2PfLQ5oc">
      <div class="Q_jg_EPdNf9eDMn1mLI2 ylyabsfEt0EdG7nOTpGl mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL LSIxp7RSuOKhsg28v_u3">
        <div class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F YgzIA9Uy7BjAijZC6Z4_ p2X57kTML6zJ_wrbmn_K Oc27dNswOmyH2Polegu2 WgVKNDYrw7BsX35rP3O4 tkZo48dB4RhnHSlDXzoe">
          <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
            <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z"></path>
          </svg>
        </div>
        <div>
          <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Total Collaterals</p>
          <h2 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">${{number_format($balance, 2)}}</h2>
        </div>
      </div>
      <div class="Q_jg_EPdNf9eDMn1mLI2 ylyabsfEt0EdG7nOTpGl mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL LSIxp7RSuOKhsg28v_u3">
        <div class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F k1sFscPcBz_oMeiTaKv8 _kNaIAP9tpQqAUSBIZaR a0oEzk8_ILhkMVanM4oU Ufo3ZjdUeVuoJy3idEJY tkZo48dB4RhnHSlDXzoe">
          <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M4 4a2 2 0 0 0-2 2v9a1 1 0 0 0 1 1h.535a3.5 3.5 0 1 0 6.93 0h3.07a3.5 3.5 0 1 0 6.93 0H21a1 1 0 0 0 1-1v-4a.999.999 0 0 0-.106-.447l-2-4A1 1 0 0 0 19 6h-5a2 2 0 0 0-2-2H4Zm14.192 11.59.016.02a1.5 1.5 0 1 1-.016-.021Zm-10 0 .016.02a1.5 1.5 0 1 1-.016-.021Zm5.806-5.572v-2.02h4.396l1 2.02h-5.396Z" clip-rule="evenodd"></path>
          </svg>
        </div>
        <div>
          <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Locked Collaterals</p>
          <h2 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">$ {{$lockedCollaterals, 2}}</h2>
        </div>
      </div>
      <div class="Q_jg_EPdNf9eDMn1mLI2 ylyabsfEt0EdG7nOTpGl mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL LSIxp7RSuOKhsg28v_u3">
        <div class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _qcCy_0dlurLpzJ4ppIr Ql00IjuSaYSE1IEz61Xr ___gGfijsXOewjo0iitJ Z1PMD8JOhtW2asYFz5Y_ tkZo48dB4RhnHSlDXzoe">
          <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
          </svg>
        </div>
        <div>
          <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Active Loans</p>
          <h2 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">{{count($loans)}}</h2>
        </div>
      </div>
      <div class="Q_jg_EPdNf9eDMn1mLI2 ylyabsfEt0EdG7nOTpGl mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL LSIxp7RSuOKhsg28v_u3">
        <div class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F YccXYy5sNIz6FJlLxw0D OQflBVxALl1Ntbyc2J2_ V9HgZms3_2W5sanRatci s1eV9SScay8owH_251UR tkZo48dB4RhnHSlDXzoe">
          <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M9 15a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm3.845-1.855a2.4 2.4 0 0 1 1.2-1.226 1 1 0 0 1 1.992-.026c.426.15.809.408 1.111.749a1 1 0 1 1-1.496 1.327.682.682 0 0 0-.36-.213.997.997 0 0 1-.113-.032.4.4 0 0 0-.394.074.93.93 0 0 0 .455.254 2.914 2.914 0 0 1 1.504.9c.373.433.669 1.092.464 1.823a.996.996 0 0 1-.046.129c-.226.519-.627.94-1.132 1.192a1 1 0 0 1-1.956.093 2.68 2.68 0 0 1-1.227-.798 1 1 0 1 1 1.506-1.315.682.682 0 0 0 .363.216c.038.009.075.02.111.032a.4.4 0 0 0 .395-.074.93.93 0 0 0-.455-.254 2.91 2.91 0 0 1-1.503-.9c-.375-.433-.666-1.089-.466-1.817a.994.994 0 0 1 .047-.134Zm1.884.573.003.008c-.003-.005-.003-.008-.003-.008Zm.55 2.613s-.002-.002-.003-.007a.032.032 0 0 1 .003.007ZM4 14a1 1 0 0 1 1 1v4a1 1 0 1 1-2 0v-4a1 1 0 0 1 1-1Zm3-2a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1Zm6.5-8a1 1 0 0 1 1-1H18a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-.796l-2.341 2.049a1 1 0 0 1-1.24.06l-2.894-2.066L6.614 9.29a1 1 0 1 1-1.228-1.578l4.5-3.5a1 1 0 0 1 1.195-.025l2.856 2.04L15.34 5h-.84a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
          </svg>
        </div>
        <div>
          <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Available Funds</p>
          <h2 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">${{number_format($availableCollateral, 2)}}</h2>
        </div>
      </div>
    </div>
  </div>
  
</div>
<div class="xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn _wYiJGbRZyFZeCc8y7Sf AqVNvLG_H6VHhym2yKMp r2J0fZNC8R3xWtaYryk2 _ekOa3Ka0rurm5lYYxYh">
  <!-- Card -->
   <button class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln XnjTGHn8t8AXjRaBTrxB g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YCF9WtZQaPLXowM_Li_g YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T jL6XA6KB3jDxAj4xiHrn d8_fVOcgDmbt7UdpfeLK TuxenyFcQCXxRKLGv2AH WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM icxWjIgUd9_dzYucx1nx" type="button" id="newIntegrationButton" data-modal-target="newIntegrationModal" data-modal-toggle="newIntegrationModal">
    <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"></path>
    </svg>

    Add new collateral
  </button>
  @foreach ($collaterals as $collateral)
      <div class="UYOSZJ1_pv3B5nt1ujCP mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi">
    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j">
      <!-- Logo -->
      <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
        <img class="_6aYwdjzDCvXK0bVJQOb bLH_DeiQ7Cp4iBqeW3kq __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" src="{{ asset('assets/images/item/' . $collateral->asset_name . '.svg') }}" width="24" height="24">
        <span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">{{$collateral->asset_name}}</span>
      </div>
      <!-- Dropdown button -->
      <button id="integration-{{$collateral->id}}-dropdown-button" type="button" data-dropdown-toggle="integration-{{$collateral->id}}-dropdown" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
        <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M9.6 2.6A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2l.5.3a2 2 0 0 1 2.9 0l1.4 1.3a2 2 0 0 1 0 2.9l.1.5h.1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2l-.3.5a2 2 0 0 1 0 2.9l-1.3 1.4a2 2 0 0 1-2.9 0l-.5.1v.1a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2l-.5-.3a2 2 0 0 1-2.9 0l-1.4-1.3a2 2 0 0 1 0-2.9l-.1-.5H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2l.3-.5a2 2 0 0 1 0-2.9l1.3-1.4a2 2 0 0 1 2.9 0l.5-.1V4c0-.5.2-1 .6-1.4ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z" clip-rule="evenodd"></path>
        </svg>
      </button>
      <div id="integration-{{$collateral->id}}-dropdown" class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj fScvmu_bLBCkoXb3Xml3 mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r">
        <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" aria-labelledby="integration-{{$collateral->id}}-dropdown-button">
          <li>
            <button type="button" class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
              <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4v11c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16c0-.6.4-1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z" clip-rule="evenodd"></path>
              </svg>
              View details
            </button>
          </li>
          <li>
            <button type="button" id="deleteToolButton" data-modal-target="deleteToolModal" data-modal-toggle="deleteToolModal" class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"></path>
            </svg>
            Delete
          </button>
          </li>
        </ul>
      </div>
    </div>
    <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Available Balance: ${{number_format($collateral->usd_value, 2)}}</p>
    
    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
      <button type="button" id="deleteToolButton" data-modal-target="deleteToolModal" data-modal-toggle="deleteToolModal" class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
        Fund
      </button>
      <button type="button" id="successIntegrationButton" data-modal-target="successIntegrationModal" data-modal-toggle="successIntegrationModal" class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
        Liquidate
      </button>
    </div>
  </div>
  @endforeach
</div>
@endsection
