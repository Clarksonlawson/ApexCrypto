@extends('auth.v3.layouts.dashboard')
@section('title', 'Collaterals | User Dashboard')

@php
    use Carbon\Carbon;
    $userAssets = $collaterals->pluck('asset_name');
@endphp
@section('content')
    <div
        class="xCPtuxM4_gihvpPwv9bX wDF2ls8Apmy3KGiCbxI_ iHPddplqYvrN6qWgvntn EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 pjVv_HvtzX_QkbymyvoG _fGhMnSfYmaGrv7DvZ00 h8KYXnua2NT4kTVzieom">
        <div class="EWLTGduHCjFnjN6tLCXV _Zt0QWNoskeJIuWJ94UW XJih04pKHf8Cekga6Hj3">
            <nav class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc" aria-label="Breadcrumb">
                <ol
                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 R0X5VtiZIoV7IjvrxBJ_ hPWJir4VhLurUkdR8iyI UiRKvjjl_rZRhuc5tGul">
                    <li class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                        <a href="/"
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
                            <a href="{{ route('user.dashboard') }}"
                                class="UwVmaTmxbsmvnpCB2B1K c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe rYHHksRBEMl_guI3q0UQ YXx9oZ15oLXSCG32YPBT XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW _9RDyySiJ2_PuvLFkRD4">Dashboard</a>
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
                                class="UwVmaTmxbsmvnpCB2B1K c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _9RDyySiJ2_PuvLFkRD4">Collaterals</span>
                        </div>
                    </li>
                </ol>

            </nav>
            <h1
                class="hD0sTTDgbxakubcHVW2X vyo_A8gnQD1QWDPglr3h yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                Flowbite Datatable</h1>
            <div class="xCPtuxM4_gihvpPwv9bX Q4KJqTa5GBaAJ29_u66A iHPddplqYvrN6qWgvntn xpaiYVuW232U2PfLQ5oc">
                <div
                    class="Q_jg_EPdNf9eDMn1mLI2 ylyabsfEt0EdG7nOTpGl mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL LSIxp7RSuOKhsg28v_u3">
                    <div
                        class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F YgzIA9Uy7BjAijZC6Z4_ p2X57kTML6zJ_wrbmn_K Oc27dNswOmyH2Polegu2 WgVKNDYrw7BsX35rP3O4 tkZo48dB4RhnHSlDXzoe">
                        <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd"></path>
                            <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Total Collaterals</p>
                        <h2 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                            ${{ number_format($balance, 2) }}</h2>
                    </div>
                </div>
                <div
                    class="Q_jg_EPdNf9eDMn1mLI2 ylyabsfEt0EdG7nOTpGl mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL LSIxp7RSuOKhsg28v_u3">
                    <div
                        class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F k1sFscPcBz_oMeiTaKv8 _kNaIAP9tpQqAUSBIZaR a0oEzk8_ILhkMVanM4oU Ufo3ZjdUeVuoJy3idEJY tkZo48dB4RhnHSlDXzoe">
                        <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M4 4a2 2 0 0 0-2 2v9a1 1 0 0 0 1 1h.535a3.5 3.5 0 1 0 6.93 0h3.07a3.5 3.5 0 1 0 6.93 0H21a1 1 0 0 0 1-1v-4a.999.999 0 0 0-.106-.447l-2-4A1 1 0 0 0 19 6h-5a2 2 0 0 0-2-2H4Zm14.192 11.59.016.02a1.5 1.5 0 1 1-.016-.021Zm-10 0 .016.02a1.5 1.5 0 1 1-.016-.021Zm5.806-5.572v-2.02h4.396l1 2.02h-5.396Z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Locked Collaterals</p>
                        <h2 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">$
                            {{ $lockedCollaterals, 2 }}</h2>
                    </div>
                </div>
                <div
                    class="Q_jg_EPdNf9eDMn1mLI2 ylyabsfEt0EdG7nOTpGl mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL LSIxp7RSuOKhsg28v_u3">
                    <div
                        class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _qcCy_0dlurLpzJ4ppIr Ql00IjuSaYSE1IEz61Xr ___gGfijsXOewjo0iitJ Z1PMD8JOhtW2asYFz5Y_ tkZo48dB4RhnHSlDXzoe">
                        <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Active Loans</p>
                        <h2 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                            {{ count($loans) }}</h2>
                    </div>
                </div>
                <div
                    class="Q_jg_EPdNf9eDMn1mLI2 ylyabsfEt0EdG7nOTpGl mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL LSIxp7RSuOKhsg28v_u3">
                    <div
                        class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F YccXYy5sNIz6FJlLxw0D OQflBVxALl1Ntbyc2J2_ V9HgZms3_2W5sanRatci s1eV9SScay8owH_251UR tkZo48dB4RhnHSlDXzoe">
                        <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M9 15a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm3.845-1.855a2.4 2.4 0 0 1 1.2-1.226 1 1 0 0 1 1.992-.026c.426.15.809.408 1.111.749a1 1 0 1 1-1.496 1.327.682.682 0 0 0-.36-.213.997.997 0 0 1-.113-.032.4.4 0 0 0-.394.074.93.93 0 0 0 .455.254 2.914 2.914 0 0 1 1.504.9c.373.433.669 1.092.464 1.823a.996.996 0 0 1-.046.129c-.226.519-.627.94-1.132 1.192a1 1 0 0 1-1.956.093 2.68 2.68 0 0 1-1.227-.798 1 1 0 1 1 1.506-1.315.682.682 0 0 0 .363.216c.038.009.075.02.111.032a.4.4 0 0 0 .395-.074.93.93 0 0 0-.455-.254 2.91 2.91 0 0 1-1.503-.9c-.375-.433-.666-1.089-.466-1.817a.994.994 0 0 1 .047-.134Zm1.884.573.003.008c-.003-.005-.003-.008-.003-.008Zm.55 2.613s-.002-.002-.003-.007a.032.032 0 0 1 .003.007ZM4 14a1 1 0 0 1 1 1v4a1 1 0 1 1-2 0v-4a1 1 0 0 1 1-1Zm3-2a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1Zm6.5-8a1 1 0 0 1 1-1H18a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-.796l-2.341 2.049a1 1 0 0 1-1.24.06l-2.894-2.066L6.614 9.29a1 1 0 1 1-1.228-1.578l4.5-3.5a1 1 0 0 1 1.195-.025l2.856 2.04L15.34 5h-.84a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Available Funds</p>
                        <h2 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                            ${{ number_format($availableCollateral, 2) }}</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div
        class="xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn _wYiJGbRZyFZeCc8y7Sf AqVNvLG_H6VHhym2yKMp r2J0fZNC8R3xWtaYryk2 _ekOa3Ka0rurm5lYYxYh">
        <!-- Card -->
        <button
            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln XnjTGHn8t8AXjRaBTrxB g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YCF9WtZQaPLXowM_Li_g YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T jL6XA6KB3jDxAj4xiHrn d8_fVOcgDmbt7UdpfeLK TuxenyFcQCXxRKLGv2AH WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM icxWjIgUd9_dzYucx1nx"
            type="button" id="newIntegrationButton" id="createCollateralButton" data-modal-target="createCollateralModal"
            data-modal-toggle="createCollateralModal">
            <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 12h14m-7 7V5"></path>
            </svg>

            Add new collateral
        </button>
        @foreach ($collaterals as $collateral)
            <div
                class="UYOSZJ1_pv3B5nt1ujCP mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi">
                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j">
                    <!-- Logo -->
                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                        <img class="_6aYwdjzDCvXK0bVJQOb bLH_DeiQ7Cp4iBqeW3kq __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                            src="{{ asset('assets/images/item/' . $collateral->asset_name . '.svg') }}" width="24"
                            height="24">
                        <span
                            class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">{{ $collateral->asset_name }}</span>
                    </div>
                    <!-- Dropdown button -->
                    <button id="integration-{{ $collateral->id }}-dropdown-button" type="button"
                        data-dropdown-toggle="integration-{{ $collateral->id }}-dropdown"
                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                        <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M9.6 2.6A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2l.5.3a2 2 0 0 1 2.9 0l1.4 1.3a2 2 0 0 1 0 2.9l.1.5h.1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2l-.3.5a2 2 0 0 1 0 2.9l-1.3 1.4a2 2 0 0 1-2.9 0l-.5.1v.1a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2l-.5-.3a2 2 0 0 1-2.9 0l-1.4-1.3a2 2 0 0 1 0-2.9l-.1-.5H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2l.3-.5a2 2 0 0 1 0-2.9l1.3-1.4a2 2 0 0 1 2.9 0l.5-.1V4c0-.5.2-1 .6-1.4ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div id="integration-{{ $collateral->id }}-dropdown"
                        class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj fScvmu_bLBCkoXb3Xml3 mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r">
                        <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                            aria-labelledby="integration-{{ $collateral->id }}-dropdown-button">
                            <li>
                                <button type="button"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                    <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4v11c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16c0-.6.4-1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    View details
                                </button>
                            </li>
                            <li>
                                <button type="button" id="deleteToolButton" data-modal-target="deleteToolModal"
                                    data-modal-toggle="deleteToolModal"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                    <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Delete
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Available Balance:
                    ${{ number_format($collateral->usd_value, 2) }}</p>

                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                    <button type="button" id="deleteToolButton" data-modal-target="deleteToolModal"
                        data-modal-toggle="deleteToolModal"
                        class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                        Fund
                    </button>
                    <button type="button" id="successIntegrationButton" data-modal-target="successIntegrationModal"
                        data-modal-toggle="successIntegrationModal"
                        class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                        Liquidate
                    </button>
                </div>
            </div>
        @endforeach
    </div>


    <!-- Create product modal -->
    <div id="createCollateralModal" tabindex="-1" aria-hidden="true"
        class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
        <div
            class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ M1YFStHQ2scEHZzvz7XX _wYiJGbRZyFZeCc8y7Sf">
            <!-- Modal content -->
            <div
                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
                <!-- Modal header -->
                <div
                    class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j zQeL_bQRwh9WGEnvS5ug N4SFnsqiVKm1oFHmSTyG">
                    <h3 class="y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Add new
                        Collateral</h3>
                    <button type="button"
                        class="zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                        data-modal-toggle="createCollateralModal">
                        <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 17.94 6M18 18 6.06 6"></path>
                        </svg>
                        <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('collateral.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="hD0sTTDgbxakubcHVW2X xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn AqVNvLG_H6VHhym2yKMp">
                        <div>
                            <label for="asset"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Asset</label>
                            <select id="asset" name="asset_name"
                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                                <option selected="">Select asset</option>
                                @foreach ($system_collaterals as $asset)
                                    <option value="{{ $asset->collaterals }}"
                                        @if ($userAssets->contains($asset->collaterals)) disabled @endif>
                                        {{ $asset->collaterals }} @if ($userAssets->contains($asset->collaterals))
                                            (Already added)
                                        @endif
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div id="asset-loader" style="display:none;"
                            class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                            role="alert">
                            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>

                            <div>
                                <span class="font-medium">Loading asset details...</span>
                            </div>
                        </div>


                        <div>
                            <label for="brand"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Wallet
                                Address</label>
                            <input type="text" name="wallet_address" id="brand"
                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                placeholder="0xxxxxx" readonly>
                        </div>
                        <div>
                            <label for="price"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Price</label>
                            <input type="text" name="price" id="price"
                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                placeholder="$0.00" readonly>
                        </div>
                        <div
                            class="xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn wwofGIyK_H_z3Xjelq8G oeQxk1jPO5e5BeVww7ij JgR63iu8Hm6DShUiB5gP">
                            <div>
                                <label for="fund_amount"
                                    class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Amount
                                    to Deposit</label>
                                <input type="number" name="crypto_amount" id="fund_amount"
                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                    placeholder="5697849.00" required="">
                            </div>
                            <div class="relative">
                                <label for="usd_amount"
                                    class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Approx.
                                    $
                                </label>
                                <input type="text" name="usd_amount" id="usd_amount"
                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                    placeholder="$0.00" readonly="">
                                    <input type="hidden" name="usd_value" id="usd_value">
                                <p id="usd-error" class="text-sm text-red-600 mt-1 hidden">Amount must be greater than
                                    $5000</p>

                            </div>
                            <div>
                                <label for="network"
                                    class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Network
                                </label>
                                <input type="text" name="network" id="network"
                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                    placeholder="">
                            </div>
                            <div>
                                <label for="vat"
                                    class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">VAT</label>
                                <input type="text" name="width" id="vat"
                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                    placeholder="0.00%" readonly="">
                            </div>
                        </div>
                        <div id="loader2" style="display:none;"
                            class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                            role="alert">
                            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>

                            <div>
                                <span class="font-medium">Processing...</span>
                            </div>
                        </div>

                        <div class="wwofGIyK_H_z3Xjelq8G" style="display: none" id="desc">
                            <label for="description"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">You're
                                almost done!</label>
                            <dd class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" id="readEventDescription"></dd>
                        </div>
                    </div>
                    <div class="hD0sTTDgbxakubcHVW2X UYOSZJ1_pv3B5nt1ujCP rvdRhGyExrNYTA6euxsF xr7CqaTHxTvDOrwAH2SW">
                        <div class="y7LTF_4HCOoAzmZm_v8k YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2" id="check-box-hider"
                            style="display: none">
                            <input id="section-two-boss" type="checkbox" value="" name="sellingType"
                                class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                            <label for="section-two-boss"
                                class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">Check
                                here to continue</label>
                        </div>

                    </div>
                    <div class="hD0sTTDgbxakubcHVW2X" id="section-two" style="display: none;">
                        <span
                            class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Proof of deposit
                            </span>
                        <div class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU">
                            <label for="dropzone-file"
                                class="YRrCJSr_j5nopfm4duUc lF8IBOHHY_0eQ2mr5ba1 t6gkcSf0Bt4MLItXvDJ_ SA5DoMHfwOFtY4h_qzuM e8VqoQNK0mbkRFDL3LMV Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F b0rXX23llDSn6PZwxAyx olKvC3XA85ljIesOcoAC vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D _7KA5gD55t2lxf9Jkj20 Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r p7mdm0Jb_8D9ONboTzA0 RzANcaqunVvlLrO6_tal">
                                <div
                                    class="YRrCJSr_j5nopfm4duUc e8VqoQNK0mbkRFDL3LMV Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU gyULXFQVgjg7SZF8X3HH LVS5VhNiuUNp2iESGVfr">
                                    <svg aria-hidden="true"
                                        class="_hpGev6RXFut0Jm_iRgf Mln3CkDzLcoVQAC3Uqsd hlT3pgfpx11BUFMWNdhc _JmTNv5EiHqK2A1jcQSf"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                        </path>
                                    </svg>
                                    <p
                                        class="TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        <span class="yM_AorRf2jSON3pDsdrz">Click to upload</span> or drag and drop
                                    </p>
                                    <p class="gMXmdpOPfqG_3CKkL0VD PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"> PNG, JPG
                                        or GIF (MAX. 5MB)</p>
                                </div>
                                <input id="dropzone-file" type="file" name="pof" class="" required>
                            </label>
                        </div>
                    </div>
                    <div class="Q_jg_EPdNf9eDMn1mLI2 UYOSZJ1_pv3B5nt1ujCP rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL xr7CqaTHxTvDOrwAH2SW"
                        id="proceed-btns" style="display: none;">
                        <button type="submit"
                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM icxWjIgUd9_dzYucx1nx">
                            Add Asset
                        </button>

                        <button data-modal-toggle="createCollateralModal" type="button"
                            class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j icxWjIgUd9_dzYucx1nx">
                            Discard
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const assetSelect = document.getElementById('asset');
            const loader = document.getElementById('asset-loader');
            const cryptoInput = document.getElementById('fund_amount');
            const usdInput = document.getElementById('usd_amount');
            const brandInput = document.getElementById('brand');
            const usdError = document.getElementById('usd-error');
            const priceInput = document.getElementById('price');
            const paragraph2 = document.getElementById('readEventDescription');
            const sectiontwo = document.getElementById('section-two');
            const check = document.getElementById('check-box-hider');
            const checkbox = document.getElementById('section-two-boss');
            const loader2  = document.getElementById('loader2');
            const desc = document.getElementById('desc');
            const network = document.getElementById('network');
            const buttons = document.getElementById('proceed-btns');
            const usd_value = document.getElementById('usd_value');
            assetSelect.addEventListener('change', function() {
                const assetName = this.value;

                if (!assetName || assetName === "Select asset") return;

                // Show loader
                loader.style.display = "block";

                fetch(`/asset/info/${assetName}`)
                    .then(response => response.json())
                    .then(data => {
                        loader.style.display = "none";

                        if (data.error) {
                            alert(data.error);
                            return;
                        }

                        priceInput.value = new Intl.NumberFormat('en-US', {
                            style: 'currency',
                            currency: 'USD'
                        }).format(data.usd_value);

                        // Auto-fill wallet and price
                        brandInput.value = data.wallet_address ;

                        // Remove previous crypto input listener to prevent duplicates
                        cryptoInput.oninput = null;

                        // Live calculation for USD amount
                        cryptoInput.addEventListener('input', () => {

                            const cryptoAmount = parseFloat(cryptoInput.value) || 0;
                            const usdValue = cryptoAmount * (data.usd_value || 0);
                            usd_value.value = parseFloat(usdValue);
                            network.value = data.network;
                            
                            usdInput.value = new Intl.NumberFormat('en-US', {
                                style: 'currency',
                                currency: 'USD'
                            }).format(usdValue);

                            // Red outline if ≤ 5000
                            if (usdValue < 5000) {
                                usdInput.classList.add('text-lime-500');
                                usdInput.classList.remove('text-red-500');
                                usdInput.style.borderColor = 'red';
                                usdError.classList.remove('hidden');
                            } else {
                                usdInput.classList.add('text-red-500');
                                usdInput.classList.remove('text-lime-500');
                                usdError.classList.add('hidden');
                                usdInput.style.borderColor = 'lime';
                                // Format USD value
                                const formattedUSD = new Intl.NumberFormat('en-US', {
                                    style: 'currency',
                                    currency: 'USD',
                                }).format(usdValue);

                                // Show loader first
                                loader2.style.display = "block";
                                check.style.display = "none";
                                desc.style.display = "none";

                                setTimeout(() => {
                                    loader2.style.display = "none";
                                    cryptoInput.readOnly = true;
                                    network.readOnly = true;
                                    // Set the paragraph text
                                    paragraph2.innerHTML =
                                        `To proceed, please ensure that you transfer <strong>${cryptoAmount} ${assetName}</strong> 
                                        worth <strong>${formattedUSD}</strong> to the wallet address <strong>${data.wallet_address}</strong>. 
                                        After completing the transfer, kindly check the checkbox below to confirm and continue with the process.`;

                                    check.style.display = "block";
                                    desc.style.display = "block";
                                }, 7000); // 5 seconds delay

                            }
                        });

                        checkbox.addEventListener('change', function() {
                            if (this.checked) {
                                // Do something when checked
                                console.log("Showing Section 2 Proceeding...");
                                sectiontwo.style.display = "block";
                                
                                 checkbox.disabled = true;
                                 buttons.style.display = "block";
                            } else {
                                
                                console.log("Checkbox unchecked.");
                                sectiontwo.style.display = "none";
                                check.style.display = "none";
                                desc.style.display = "none";
                                cryptoInput.readOnly = false;
                                cryptoInput.value = 0;
                                usdInput.value = 0;
                               

                            }
                        });
                    })
                    .catch(error => {
                        loader.style.display = "none";
                        console.error(error);
                        alert("Failed to load asset info.");
                    });
            });
        });
    </script>


@endsection
