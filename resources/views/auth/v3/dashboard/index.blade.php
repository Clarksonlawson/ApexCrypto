@extends('auth.v3.layouts.dashboard')
@section('title', 'User Dashboard')
@php
    use App\Models\Loan;
    use Carbon\Carbon;
@endphp
@section('content')
    <div class="RZmKBZs1E1eXw8vkE6jY">
        <div
            class="aJF41JQLhtfw_MCGt5Th xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn AqVNvLG_H6VHhym2yKMp _ekOa3Ka0rurm5lYYxYh">
            <div
                class="mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B _JmTNv5EiHqK2A1jcQSf" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M9 15a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm3.845-1.855a2.4 2.4 0 0 1 1.2-1.226 1 1 0 0 1 1.992-.026c.426.15.809.408 1.111.749a1 1 0 1 1-1.496 1.327.682.682 0 0 0-.36-.213.997.997 0 0 1-.113-.032.4.4 0 0 0-.394.074.93.93 0 0 0 .455.254 2.914 2.914 0 0 1 1.504.9c.373.433.669 1.092.464 1.823a.996.996 0 0 1-.046.129c-.226.519-.627.94-1.132 1.192a1 1 0 0 1-1.956.093 2.68 2.68 0 0 1-1.227-.798 1 1 0 1 1 1.506-1.315.682.682 0 0 0 .363.216c.038.009.075.02.111.032a.4.4 0 0 0 .395-.074.93.93 0 0 0-.455-.254 2.91 2.91 0 0 1-1.503-.9c-.375-.433-.666-1.089-.466-1.817a.994.994 0 0 1 .047-.134Zm1.884.573.003.008c-.003-.005-.003-.008-.003-.008Zm.55 2.613s-.002-.002-.003-.007a.032.032 0 0 1 .003.007ZM4 14a1 1 0 0 1 1 1v4a1 1 0 1 1-2 0v-4a1 1 0 0 1 1-1Zm3-2a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1Zm6.5-8a1 1 0 0 1 1-1H18a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-.796l-2.341 2.049a1 1 0 0 1-1.24.06l-2.894-2.066L6.614 9.29a1 1 0 1 1-1.228-1.578l4.5-3.5a1 1 0 0 1 1.195-.025l2.856 2.04L15.34 5h-.84a1 1 0 0 1-1-1Z"
                        clip-rule="evenodd"></path>
                </svg>
                <h3 class="gC_jEY75u_oxfOOKnLpH PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Collaterals</h3>
                <span
                    class="TR_P65x9ie7j6uxFo_Cs q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">${{ number_format($totalUsd, 2) }}</span>
                <p
                    class="iRFVFKvV59EjIwjCM62m YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                    <span
                        class="C_aqJ70iNmOTNL788uQu YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF _fJoMOe9mwdGl9PfDHMr">

                        Assets:
                    </span>
                    {{ $totalassetcount }}
                </p>
            </div>
            <div
                class="mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B _JmTNv5EiHqK2A1jcQSf" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 4.5V19a1 1 0 0 0 1 1h15M7 10l4 4 4-4 5 5m0 0h-3.207M20 15v-3.207"></path>
                </svg>

                <h3 class="gC_jEY75u_oxfOOKnLpH PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Loans</h3>
                <span
                    class="TR_P65x9ie7j6uxFo_Cs q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">${{ number_format($activeLoans, 2) }}</span>
                <p
                    class="iRFVFKvV59EjIwjCM62m YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                    <span
                        class="C_aqJ70iNmOTNL788uQu YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF _fJoMOe9mwdGl9PfDHMr">

                        All Loans
                    </span>
                    {{ $loans->count() }}
                </p>
            </div>
            <div
                class="mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B _JmTNv5EiHqK2A1jcQSf" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 17.345a4.76 4.76 0 0 0 2.558 1.618c2.274.589 4.512-.446 4.999-2.31.487-1.866-1.273-3.9-3.546-4.49-2.273-.59-4.034-2.623-3.547-4.488.486-1.865 2.724-2.899 4.998-2.31.982.236 1.87.793 2.538 1.592m-3.879 12.171V21m0-18v2.2">
                    </path>
                </svg>

                <h3 class="gC_jEY75u_oxfOOKnLpH PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Eligible Loan</h3>
                <span
                    class="TR_P65x9ie7j6uxFo_Cs q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">${{ number_format($eligibleAmount, 2) }}</span>
                <p
                    class="iRFVFKvV59EjIwjCM62m YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                    <span
                        class="C_aqJ70iNmOTNL788uQu YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt Sz97zU8r72z_pjE9zQnR _fJoMOe9mwdGl9PfDHMr">


                    </span>
                    Min: $5,000.00, Max: $2,000,000.00
                </p>
            </div>
            <div
                class="mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B _JmTNv5EiHqK2A1jcQSf" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z">
                    </path>
                </svg>
                <h3 class="gC_jEY75u_oxfOOKnLpH PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Repayment Days Left</h3>
                <span
                    class="TR_P65x9ie7j6uxFo_Cs q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">-</span>
                <p
                    class="iRFVFKvV59EjIwjCM62m YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                    <span
                        class="C_aqJ70iNmOTNL788uQu YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF _fJoMOe9mwdGl9PfDHMr">

                        Days Left
                    </span>
                    to repay your active loans
                </p>
            </div>
        </div>
        <!-- Widget -->
        <div
            class="hD0sTTDgbxakubcHVW2X mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
            <div class="sJNGKHxFYdN5Nzml5J2j ZoVDC4KAtAnbbcNB_Tct rvdRhGyExrNYTA6euxsF">
                <div class="hD0sTTDgbxakubcHVW2X tkZo48dB4RhnHSlDXzoe">
                    <h2
                        class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        $739,992 <span
                            class="KLo3NZfrGYYPkMcjEWNN d3C8uAdJKNl1jzfE9ynq yM_AorRf2jSON3pDsdrz _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF">+$7,452
                            (8,85%)</span></h2>
                    <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Your portfolio balance</p>
                </div>
                <div>
                    <button id="balanceActionsDropdownButton" data-dropdown-toggle="balanceActionsDropdown"
                        data-dropdown-ignore-click-outside-class="datepicker"
                        class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j _f8XqZvYJf7DNydLmFyI"
                        type="button">
                        <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Dec 31 - Jan 31
                        <svg class="cZGr4DL6HOaMXQmjciUj gtlIjUq8I0xb1BZjyfWO _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th _SmdlCf6eUKB_V9S5IDj xdunzYpzbwcYs_0Tjgcz Jp6TEt_2I3_NPd5T8ucc Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                        id="balanceActionsDropdown">
                        <ul class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" role="none"
                            aria-labelledby="referrersActionsDropdown">
                            <li>
                                <button type="button"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    role="menuitem">Yesterday</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    role="menuitem">Today</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    role="menuitem">Last 7 days</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    role="menuitem">Last 30 days</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    role="menuitem">Last 90 days</button>
                            </li>
                        </ul>
                        <div class="TcRv2CxEufCAnWVUJnDf">
                            <span
                                class="__9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S">Custom
                                period:</span>
                            <div id="date-range-picker" date-rangepicker=""
                                class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 ziREpHQPVq5qSN_QPxXy">
                                <div class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_">
                                    <div
                                        class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua QwmoUJgpayek67mTbNEE YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _0VbwdpFdmHwQ2geg0Xp">
                                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input id="datepicker-range-start" name="start" type="text"
                                        class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D FJRldeiG2gFGZfuKgp88 CZURRWrw0Zimq2s_t6jr c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                        placeholder="Start date">
                                </div>
                                <div class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_">
                                    <div
                                        class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua QwmoUJgpayek67mTbNEE YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _0VbwdpFdmHwQ2geg0Xp">
                                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input id="datepicker-range-end" name="end" type="text"
                                        class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D FJRldeiG2gFGZfuKgp88 CZURRWrw0Zimq2s_t6jr c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                        placeholder="End date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chart -->
            <div id="portfolio-chart"></div>

            <div
                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j pVSXSlnJdgskzP7BxPBe tu2pET5XXEFdLYbAVwZL p_2EXc_a2sDA_h41l8QU _fGhMnSfYmaGrv7DvZ00 YJEBMPxJE_MyJtwHjBt6">
                <div>
                    <button
                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW"
                        type="button" data-dropdown-toggle="top-products-dropdown">
                        Last 7 days
                        <svg class="UwVmaTmxbsmvnpCB2B1K _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th _SmdlCf6eUKB_V9S5IDj xdunzYpzbwcYs_0Tjgcz Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH Y3FxyuXtj2gecrGXvLEI _Ybd3WwuTVljUT4vEaM3 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                        id="top-products-dropdown">
                        <ul class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" role="none">
                            <li>
                                <button type="button"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    role="menuitem">Yesterday</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    role="menuitem">Today</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    role="menuitem">Last 7 days</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    role="menuitem">Last 30 days</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    role="menuitem">Last 90 days</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="_VPh6kIywCMfXFfQLas4">
                    <a href="#"
                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j gMXmdpOPfqG_3CKkL0VD yM_AorRf2jSON3pDsdrz sdSaZcRa4_We5kKaX4pf OQflBVxALl1Ntbyc2J2_ _7KA5gD55t2lxf9Jkj20 fZf6W_ZtzEh6EEqmWMA9 OPrb_iG5WDy_7F05BDOX gx_pYWtAG2cJIqhquLbx">
                        Users Report
                        <svg class="UwVmaTmxbsmvnpCB2B1K _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Table Widget -->
        <div
            class="hD0sTTDgbxakubcHVW2X mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _YxZw_O8dWkTljptcO7z">
            <div class="ahOqFrhzLjivRe8a1kX_ hD0sTTDgbxakubcHVW2X _8exizyun8Av9ozDV0B8">
                <div class="YRrCJSr_j5nopfm4duUc pjVv_HvtzX_QkbymyvoG Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j">
                    <div class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2">
                        <h2
                            class="IRKzgyPj4qWOh2vq2xBg vyo_A8gnQD1QWDPglr3h yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                            My Collaterals: <span
                                class="KLo3NZfrGYYPkMcjEWNN IOPhczRgtphv6NdNBDjj">${{ number_format($totalUsd, 2) }}</span>
                        </h2>
                        <button type="button"
                            class="_SmdlCf6eUKB_V9S5IDj rvdRhGyExrNYTA6euxsF _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW"
                            data-tooltip-target="results-tooltip">
                            <svg class="E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="_DVAfiyo21kM68EUVzEQ">More info</span>
                        </button>
                        <div id="results-tooltip" role="tooltip"
                            class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl p4AJk9ET4ZlyzNjHjPnM QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r">
                            Your total collateral balance, updated in real-time, reflects the current market value of all
                            your holdings.
                            <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
                        </div>
                    </div>

                    <button id="currenciesActionDropdownButton" data-dropdown-toggle="currenciesActionDropdown"
                        class="YRrCJSr_j5nopfm4duUc _VPh6kIywCMfXFfQLas4 Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j"
                        type="button">
                        Collateral
                        <svg class="cZGr4DL6HOaMXQmjciUj gtlIjUq8I0xb1BZjyfWO _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th p4AJk9ET4ZlyzNjHjPnM _SmdlCf6eUKB_V9S5IDj xdunzYpzbwcYs_0Tjgcz Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                        id="currenciesActionDropdown">
                        <ul class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" role="none"
                            aria-labelledby="currenciesActionDropdownButton">
                            @if ($collaterals->count() > 0)
                                @foreach ($collaterals as $collateral)
                                    <li>
                                        <a href=""
                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                            role="menuitem">{{ $collateral->asset_name }}</a>
                                    </li>
                                @endforeach
                            @else
                                <li>
                                    <span
                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                        role="menuitem">No collaterals available</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="_IebywwKB6L2zG0BTy63 ahOqFrhzLjivRe8a1kX_">
                <table
                    class="t6gkcSf0Bt4MLItXvDJ_ upQp7iWehfaU8VTbfx_w c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                    <thead
                        class="jtAJHOc7mn7b4IKRO59D gMXmdpOPfqG_3CKkL0VD sdSaZcRa4_We5kKaX4pf PeR2JZ9BZHYIH8Ea3F36 jqg6J89cvxmDiFpnV56r XIIs8ZOri3wm8Wnj9N_y">
                        <tr>
                            <th scope="col"
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                Name</th>
                            <th scope="col"
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                Price
                                <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z">
                                    </path>
                                </svg>
                            </th>
                            <th scope="col"
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                Holdings</th>
                            <th scope="col"
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    Available
                                    <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z">
                                        </path>
                                    </svg>
                                </div>
                            </th>
                            <th scope="col"
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    Locked
                                    <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z">
                                        </path>
                                    </svg>
                                </div>
                            </th>
                            <th scope="col" class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                <span class="_DVAfiyo21kM68EUVzEQ">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($collaterals->count() > 0)
                            @foreach ($collaterals as $collateral)
                                @php
                                    $network = strtolower($collateral->asset_symbol);
                                    $priceUsd = $prices[$network]['usd'] ?? 0;
                                    $activeCollateralLoans = Loan::where('user_email', $user->email)
                                        ->where('status', 'Active Loan')
                                        ->where('collateral_wallet_address', $collateral->wallet_address)
                                        ->get();
                                    $totalColLoans = $activeCollateralLoans->sum('amount_usd') ?? 0.0;
                                @endphp

                                <tr
                                    class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                    <th scope="row"
                                        class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                            <svg class="_6aYwdjzDCvXK0bVJQOb MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B"
                                                aria-hidden="true" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M31.5211 19.8706C29.3839 28.442 20.7014 33.6585 12.128 31.521C3.55811 29.384 -1.65895 20.7021 0.479281 12.1312C2.61551 3.55876 11.2979 -1.65819 19.8688 0.478793C28.4418 2.61577 33.6583 11.2987 31.5211 19.8706Z"
                                                    fill="#F7931A"></path>
                                                <path
                                                    d="M23.0552 13.7206C23.3737 11.5916 21.7525 10.4471 19.5358 9.68361L20.2549 6.79963L18.4992 6.36214L17.7991 9.17011C17.3376 9.05511 16.8635 8.94662 16.3924 8.83912L17.0975 6.01264L15.3428 5.57514L14.6233 8.45811C14.2412 8.37111 13.8662 8.28512 13.5021 8.19462L13.5041 8.18562L11.0829 7.58112L10.6158 9.4561C10.6158 9.4561 11.9185 9.7546 11.891 9.7731C12.602 9.95059 12.7306 10.4211 12.7091 10.7941L11.89 14.0796C11.939 14.0921 12.0025 14.1101 12.0725 14.1381C12.014 14.1236 11.9515 14.1076 11.887 14.0921L10.7388 18.6945C10.6518 18.9105 10.4313 19.2345 9.93427 19.1115C9.95177 19.137 8.65813 18.793 8.65813 18.793L7.78654 20.8025L10.0713 21.372C10.4963 21.4785 10.9129 21.59 11.3229 21.695L10.5963 24.612L12.35 25.0494L13.0696 22.1635C13.5486 22.2935 14.0137 22.4135 14.4687 22.5265L13.7517 25.3989L15.5074 25.8364L16.2339 22.925C19.2278 23.4915 21.479 23.263 22.4266 20.5555C23.1902 18.3755 22.3886 17.118 20.8134 16.298C21.9605 16.0335 22.8246 15.2791 23.0552 13.7206ZM19.0437 19.345C18.5012 21.525 14.8303 20.3465 13.6402 20.051L14.6043 16.1865C15.7944 16.4835 19.6108 17.0715 19.0437 19.345ZM19.5868 13.6891C19.0917 15.672 16.0364 14.6645 15.0453 14.4176L15.9194 10.9126C16.9105 11.1596 20.1023 11.6206 19.5868 13.6891Z"
                                                    fill="white"></path>
                                            </svg>
                                            {{ $collateral->asset_name }} <span
                                                class="UwVmaTmxbsmvnpCB2B1K PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">{{ $collateral->asset_symbol }}</span>
                                        </div>
                                    </th>

                                    <td
                                        class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                        $</td>
                                    <td
                                        class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                        ${{ number_format($collateral->usd_value, 2) }} </td>
                                    <td
                                        class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF">
                                        ${{ number_format($collateral->usd_value - $totalColLoans, 2) }}</td>
                                    <td
                                        class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ fZf6W_ZtzEh6EEqmWMA9 ">
                                        ${{ number_format($totalColLoans, 2) }}</td>
                                    <td class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj">
                                            <button type="button"
                                                class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                                                Details
                                            </button>
                                            <button type="button"
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                                                <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M7 6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2v-4a3 3 0 0 0-3-3H7V6Z"
                                                        clip-rule="evenodd"></path>
                                                    <path fill-rule="evenodd"
                                                        d="M2 11a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7Zm7.5 1a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z"
                                                        clip-rule="evenodd"></path>
                                                    <path d="M10.5 14.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"></path>
                                                </svg>

                                                Liquidate
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6"
                                    class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE text-center">
                                    No collaterals available.
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div
                class="ahOqFrhzLjivRe8a1kX_ wBVMFkIGfrKshbvi2gS1 rPhC6E4mbGlFBOJnsyEg pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V p_2EXc_a2sDA_h41l8QU _fGhMnSfYmaGrv7DvZ00 WoJnkQmBGtEPqYedyh7V">
                <nav class="YRrCJSr_j5nopfm4duUc e8VqoQNK0mbkRFDL3LMV _7_AEkSp_Gi6KH9ZW6st sJNGKHxFYdN5Nzml5J2j tI6ZVpHcCWxY_MKHSQWC MX_rT_HfQMh3dDrqOQ_i _Z3zYoo8SAGYZcCAB_mb xr7CqaTHxTvDOrwAH2SW"
                    aria-label="Table navigation">
                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _g4i6rO9Gl6jbqAE2AE4 c8dCx6gnV43hTOLV6ks5">
                        <div>
                            <div class="Z3N7I2IDDsoXK6xJ1cSW PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Collateral balance
                            </div>
                            <div class="ezMFUVl744lvw6ht0lFe OyABRrnTV_kvHV7dJ0uE">$
                                {{ number_format($totalLockedAmount, 2) }}</div>
                        </div>
                        <div>
                            <div class="Z3N7I2IDDsoXK6xJ1cSW PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Combined loan
                                eligbility</div>
                            <div class="ezMFUVl744lvw6ht0lFe OyABRrnTV_kvHV7dJ0uE">$
                                {{ number_format($totalLockedAmount * 0.7, 2) }}</div>
                        </div>
                    </div>
                    @if ($collaterals->hasPages())
                        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">

                            {{-- Previous Page Link --}}
                            @if ($collaterals->onFirstPage())
                                <li>
                                    <span
                                        class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-400 bg-white border border-gray-300 rounded-s-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500">
                                        Previous
                                    </span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $collaterals->previousPageUrl() }}"
                                        class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Previous
                                    </a>
                                </li>
                            @endif

                            {{-- Page Numbers --}}
                            @foreach ($collaterals->getUrlRange(1, $collaterals->lastPage()) as $page => $url)
                                @if ($page == $collaterals->currentPage())
                                    <li>
                                        <a href="#" aria-current="page"
                                            class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                                            {{ $page }}
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $url }}"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            {{ $page }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($collaterals->hasMorePages())
                                <li>
                                    <a href="{{ $collaterals->nextPageUrl() }}"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Next
                                    </a>
                                </li>
                            @else
                                <li>
                                    <span
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-400 bg-white border border-gray-300 rounded-e-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500">
                                        Next
                                    </span>
                                </li>
                            @endif

                        </ul>
                    @endif
                </nav>
            </div>
        </div>
        <div
            class="aJF41JQLhtfw_MCGt5Th xCPtuxM4_gihvpPwv9bX Nu4HUn5EQpnNJ1itNkrd iHPddplqYvrN6qWgvntn tVvQ7rZHDN8eqgjOONa2">
            <div
                class="mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                <h2
                    class="hD0sTTDgbxakubcHVW2X vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE _8exizyun8Av9ozDV0B8">
                    Recent transactions</h2>
                <ul>
                    @if ($recentTransactions->count() > 0)
                        @foreach ($recentTransactions as $transaction)
                            <li
                                class="EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V pjVv_HvtzX_QkbymyvoG _fGhMnSfYmaGrv7DvZ00">
                                <div
                                    class="Q_jg_EPdNf9eDMn1mLI2 tI6ZVpHcCWxY_MKHSQWC rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL xr7CqaTHxTvDOrwAH2SW">
                                    <div
                                        class="YRrCJSr_j5nopfm4duUc t3O38hGwkMJkf3_U2LhZ _Ny9QDPUchYYWYAZdFEM _VPh6kIywCMfXFfQLas4 Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs jqg6J89cvxmDiFpnV56r">
                                        @if ($transaction->transaction_type == 'Deposit')
                                            <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4">
                                                </path>
                                            </svg>
                                        @elseif($transaction->transaction_type == 'Withdrawal')
                                            <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M5.535 7.677c.313-.98.687-2.023.926-2.677H17.46c.253.63.646 1.64.977 2.61.166.487.312.953.416 1.347.11.42.148.675.148.779 0 .18-.032.355-.09.515-.06.161-.144.3-.243.412-.1.111-.21.192-.324.245a.809.809 0 0 1-.686 0 1.004 1.004 0 0 1-.324-.245c-.1-.112-.183-.25-.242-.412a1.473 1.473 0 0 1-.091-.515 1 1 0 1 0-2 0 1.4 1.4 0 0 1-.333.927.896.896 0 0 1-.667.323.896.896 0 0 1-.667-.323A1.401 1.401 0 0 1 13 9.736a1 1 0 1 0-2 0 1.4 1.4 0 0 1-.333.927.896.896 0 0 1-.667.323.896.896 0 0 1-.667-.323A1.4 1.4 0 0 1 9 9.74v-.008a1 1 0 0 0-2 .003v.008a1.504 1.504 0 0 1-.18.712 1.22 1.22 0 0 1-.146.209l-.007.007a1.01 1.01 0 0 1-.325.248.82.82 0 0 1-.316.08.973.973 0 0 1-.563-.256 1.224 1.224 0 0 1-.102-.103A1.518 1.518 0 0 1 5 9.724v-.006a2.543 2.543 0 0 1 .029-.207c.024-.132.06-.296.11-.49.098-.385.237-.85.395-1.344ZM4 12.112a3.521 3.521 0 0 1-1-2.376c0-.349.098-.8.202-1.208.112-.441.264-.95.428-1.46.327-1.024.715-2.104.958-2.767A1.985 1.985 0 0 1 6.456 3h11.01c.803 0 1.539.481 1.844 1.243.258.641.67 1.697 1.019 2.72a22.3 22.3 0 0 1 .457 1.487c.114.433.214.903.214 1.286 0 .412-.072.821-.214 1.207A3.288 3.288 0 0 1 20 12.16V19a2 2 0 0 1-2 2h-6a1 1 0 0 1-1-1v-4H8v4a1 1 0 0 1-1 1H6a2 2 0 0 1-2-2v-6.888ZM13 15a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2Z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        @else
                                            <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B VC3CWpWtbPnKEGp4NKOW PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M8 20V7m0 13-4-4m4 4 4-4m4-12v13m0-13 4 4m-4-4-4 4"></path>
                                            </svg>
                                        @endif
                                    </div>
                                    <div class="G4dLHP1O7x3gaD0_p7Kc _74lpPUMEtHf6F0_fjLe">
                                        <p
                                            class="vfNYjqjYMlN1XskEucCt yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            {{ $transaction->transaction_type }}</p>
                                        <p
                                            class="vfNYjqjYMlN1XskEucCt c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                            {{ Carbon::parse($transaction->created_at)->format('M d, Y H:i a') }}</p>
                                    </div>
                                    <div
                                        class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j q9tHTtfvjP4K5atJnf4v">
                                        <p class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            +{{ $transaction->crypto_amount }} {{ $transaction->asset_symbol }}</p>
                                        @if ($transaction->status == 'verified')
                                            <div
                                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 URF_PdoDtDpDi8BZQL94 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                <span
                                                    class="_j7jrBV2UWRXe__bk9uf LBw_xNY6RemSb6arrxbk ZCcDCx3VW8mhFqKa8r5J RpVwy4sO7Asb86CncKJ_ Kku4ppa5LuD_LCSaBQZQ"></span>Completed
                                            </div>
                                        @elseif($transaction->status == 'pending')
                                            <div
                                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 URF_PdoDtDpDi8BZQL94 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                <span
                                                    class="_j7jrBV2UWRXe__bk9uf LBw_xNY6RemSb6arrxbk ZCcDCx3VW8mhFqKa8r5J RpVwy4sO7Asb86CncKJ_ zor3C6otq8jG5rQgLVwO"></span>Pending
                                            </div>
                                        @elseif($transaction->status == 'rejected')
                                            <div
                                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 URF_PdoDtDpDi8BZQL94 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                <span
                                                    class="_j7jrBV2UWRXe__bk9uf LBw_xNY6RemSb6arrxbk ZCcDCx3VW8mhFqKa8r5J RpVwy4sO7Asb86CncKJ_ SdPDrbResNmgnA0L4Iki o8x8vWHZQ0qZRIeZ05II"></span>Rejected
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @else
                        <li class="EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V pjVv_HvtzX_QkbymyvoG _fGhMnSfYmaGrv7DvZ00">
                            <div
                                class="Q_jg_EPdNf9eDMn1mLI2 tI6ZVpHcCWxY_MKHSQWC rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL xr7CqaTHxTvDOrwAH2SW">
                                <div
                                    class="vfNYjqjYMlN1XskEucCt yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE text-center w-full">
                                    No recent transactions available.
                                </div>
                            </div>
                        </li>
                    @endif
                </ul>
                <div
                    class="pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V p_2EXc_a2sDA_h41l8QU _fGhMnSfYmaGrv7DvZ00 WoJnkQmBGtEPqYedyh7V">
                    <a href="{{ route('transactions') }}"
                        class="mveJTCIb2WII7J4sY22F t6gkcSf0Bt4MLItXvDJ_ icxWjIgUd9_dzYucx1nx pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                        View all
                    </a>
                </div>
            </div>
            <div
                class="mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                <div
                    class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2 hD0sTTDgbxakubcHVW2X _8exizyun8Av9ozDV0B8">
                    <h2 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Request
                        a Loan</h2>

                </div>
                <div class="YajDCE_nRj_FDIevNpsd hD0sTTDgbxakubcHVW2X _8exizyun8Av9ozDV0B8 M1YFStHQ2scEHZzvz7XX"
                    id="myTabContent">
                    <div id="buy" role="tabpanel" aria-labelledby="buy-tab">
                        <div class="_Vb9igHms0hI1PQcvp_S Q_jg_EPdNf9eDMn1mLI2 UYOSZJ1_pv3B5nt1ujCP">
                            <form action="{{ route('') }}" method="POST">
                                @csrf
                                <div class="YajDCE_nRj_FDIevNpsd t6gkcSf0Bt4MLItXvDJ_ uv4ZnT9l0TZhdd_Ia_EC">
                                    <label for="from-input"
                                        class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">From</label>
                                    <div class="YRrCJSr_j5nopfm4duUc flex">
                                        <span
                                            class="YRrCJSr_j5nopfm4duUc _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 UWC0ugd84Yd5qs_95tM7 pXhVRBC8yaUNllmIWxln _vn8PvoZLLDetPCJlfPP vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D _Cj_M6jt2eLjDgkBBNgI c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 Mmx5lX7HVdrWCgh3EpTP yVD6UHmZ_BcStq0KYFeK XIIs8ZOri3wm8Wnj9N_y">
                                            <select id="collateral-select"
                                                class="YRrCJSr_j5nopfm4duUc _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 UWC0ugd84Yd5qs_95tM7 pXhVRBC8yaUNllmIWxln _vn8PvoZLLDetPCJlfPP vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D _Cj_M6jt2eLjDgkBBNgI c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 Mmx5lX7HVdrWCgh3EpTP yVD6UHmZ_BcStq0KYFeK XIIs8ZOri3wm8Wnj9N_y">
                                                <option selected disabled>Collateral</option>
                                                @foreach ($collaterals as $collateral)
                                                    <option value="{{ $collateral->asset_symbol }}"
                                                        data-balance="{{ $collateral->usd_value }}"
                                                        data-asset_name="{{ $collateral->asset_name }}"
                                                        data-available_funds="{{ $collateral->usd_value }}"
                                                        data-id="{{ $collateral->collateral_id }}"
                                                        data-wallet_address="{{ $collateral->wallet_address }}">
                                                        {{ $collateral->asset_name }}</option>
                                                @endforeach
                                            </select>
                                            <defs>
                                                <clipPath id="clip0_12679_7638">
                                                    <rect width="14" height="14" fill="white"
                                                        transform="translate(0.894531)"></rect>
                                                </clipPath>
                                            </defs>
                                            </svg>
                                        </span>
                                        <input type="number" id="from-input" name="collAmount"
                                            class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ G4dLHP1O7x3gaD0_p7Kc _74lpPUMEtHf6F0_fjLe Rs29k0QlZDWrTdHyss4k _McrmMbFrEkc_sTK9IC8 pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D Lwvvap4319fmCogicbX3 c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl vave228v55bwB0ECqgMZ LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                            placeholder="$0.00">
                                        <input type="hidden" value="" id="colAssetName" name="asset_name">
                                        <input type="hidden" name="loan_amount" value="" id="loan_amount_input">

                                    </div>
                                </div>
                                <div class="YajDCE_nRj_FDIevNpsd t6gkcSf0Bt4MLItXvDJ_ uv4ZnT9l0TZhdd_Ia_EC">
                                    <label for="to-form"
                                        class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">To</label>
                                    <div class="YRrCJSr_j5nopfm4duUc">
                                        <span
                                            class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 UWC0ugd84Yd5qs_95tM7 pXhVRBC8yaUNllmIWxln _vn8PvoZLLDetPCJlfPP vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D _Cj_M6jt2eLjDgkBBNgI c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 Mmx5lX7HVdrWCgh3EpTP yVD6UHmZ_BcStq0KYFeK XIIs8ZOri3wm8Wnj9N_y">
                                            <img class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                src="{{ asset('auth/images/favicon.png') }}" alt="">

                                        </span>
                                        <input type="number" id="to-form" name="loanAmount"
                                            class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ G4dLHP1O7x3gaD0_p7Kc _74lpPUMEtHf6F0_fjLe Rs29k0QlZDWrTdHyss4k _McrmMbFrEkc_sTK9IC8 pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D Lwvvap4319fmCogicbX3 c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl vave228v55bwB0ECqgMZ LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                            placeholder="5,000.00">
                                    </div>
                                    <p class="XJih04pKHf8Cekga6Hj3 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">1 BTC≈
                                        37,104.85 EUR</p>
                                </div>

                        </div>
                    </div>
                    <div
                        class="rvdRhGyExrNYTA6euxsF Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU UYOSZJ1_pv3B5nt1ujCP xr7CqaTHxTvDOrwAH2SW SQf297smyJVNzzOO3iQL pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V p_2EXc_a2sDA_h41l8QU _fGhMnSfYmaGrv7DvZ00 WoJnkQmBGtEPqYedyh7V">
                        <button type="button" id="editKeyButtton" data-modal-target="editKeyModal"
                            data-modal-toggle="editKeyModal"
                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ icxWjIgUd9_dzYucx1nx Nm7xMnguzOx6J5Ao7yCU Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                            Preview
                        </button>
                        {{-- <button type="submit" id="submitbtnLoan" class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM icxWjIgUd9_dzYucx1nx">
                      Process
                  </button> --}}
                        <!-- Preview Loan modal -->
                        <div id="editKeyModal" tabindex="-1" aria-hidden="true"
                            class="fixed inset-0 z-50 hidden overflow-y-auto overflow-x-hidden bg-black/60 backdrop-blur-sm">
                            <div class="flex items-center justify-center min-h-screen p-4">
                                <div
                                    class="relative w-full max-w-md bg-[#101418] rounded-2xl shadow-2xl border border-gray-700 text-gray-100">

                                    <!-- Header -->
                                    <div class="flex justify-between items-center border-b border-gray-700 px-6 py-4">
                                        <h3 class="text-xl font-semibold text-white">Loan Preview</h3>
                                        <button type="button" data-modal-toggle="editKeyModal"
                                            class="text-gray-400 hover:text-white transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- Body -->
                                    <div class="px-6 py-5 space-y-4">
                                        <p class="text-sm text-gray-400" id="paragraphforLoan">
                                            Review the loan details carefully before submitting your request.
                                        </p>

                                        <div class="space-y-3 text-sm">
                                            <div class="flex justify-between">
                                                <span class="text-gray-400">Collateral Type:</span>
                                                <span id="previewCollateral" class="font-medium text-white">--</span>
                                            </div>

                                            <div class="flex justify-between">
                                                <span class="text-gray-400">Available Balance:</span>
                                                <span id="previewAvailable"
                                                    class="font-medium text-green-400">$0.00</span>
                                            </div>

                                            <div class="flex justify-between">
                                                <span class="text-gray-400">Loan Requested:</span>
                                                <span id="previewRequested" class="font-medium text-blue-400">$0.00</span>
                                            </div>

                                            <div class="flex justify-between">
                                                <span class="text-gray-400">Collateral to be Locked:</span>
                                                <span id="previewLocked" class="font-medium text-orange-400">$0.00</span>
                                            </div>

                                            <div class="flex justify-between border-t border-gray-700 pt-3">
                                                <span class="text-gray-400">Loan-to-Value (LTV):</span>
                                                <span id="previewLtv" class="font-semibold text-yellow-400">70%</span>
                                            </div>

                                            <div class="flex justify-between border-t border-gray-700 pt-3">
                                                <span class="text-gray-400">Available Balance After Completion:</span>
                                                <span id="nextbal" class="font-semibold text-green-300">$0.00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Footer -->
                                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                        <button type="button" data-modal-toggle="editKeyModal"
                                            class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                                            Cancel
                                        </button>
                                        <button type="submit"
                                            class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln XnjTGHn8t8AXjRaBTrxB g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YCF9WtZQaPLXowM_Li_g YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T jL6XA6KB3jDxAj4xiHrn d8_fVOcgDmbt7UdpfeLK TuxenyFcQCXxRKLGv2AH WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                                            Request
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div
                class="mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                <div class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc _7_AEkSp_Gi6KH9ZW6st sJNGKHxFYdN5Nzml5J2j">
                    <div>
                        <button id="coinSelectButton" data-dropdown-toggle="coinSelectDropdown"
                            data-dropdown-placement="bottom"
                            class="TR_P65x9ie7j6uxFo_Cs _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 ijrOHNoSVGATsWYKl4Id ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl ZnBoTVi7VOJdCLSSU62n OyABRrnTV_kvHV7dJ0uE dMTOiA3mf3FTjlHu6DqW"
                            type="button">
                            Bitcoin
                            <svg class="UwVmaTmxbsmvnpCB2B1K _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="coinSelectDropdown"
                            class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj nUVQqdd_RQjvvOrcRIpD Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r">
                            <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                aria-labelledby="coinSelectButton">
                                <li>
                                    <button type="button"
                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">Bitcoin
                                        (BTC)</button>
                                </li>
                                <li>
                                    <button type="button"
                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">Ethereum
                                        (ETH)</button>
                                </li>
                                <li>
                                    <button type="button"
                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">Binance
                                        Coin (BNB)</button>
                                </li>
                                <li>
                                    <button type="button"
                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">Solana
                                        (SOL)</button>
                                </li>
                                <li>
                                    <button type="button"
                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">Dodge
                                        Coin (DODGE)</button>
                                </li>
                                <li>
                                    <button type="button"
                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">Avalanche
                                        (AVAX)</button>
                                </li>
                            </ul>
                        </div>
                        <h2 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                            $66,756</h2>
                    </div>
                    <span
                        class="C_aqJ70iNmOTNL788uQu YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 yM_AorRf2jSON3pDsdrz _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF">
                        <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v13m0-13 4 4m-4-4-4 4"></path>
                        </svg>
                        7%
                    </span>
                </div>
                <div id="coin-chart"></div>
                <div
                    class="xCPtuxM4_gihvpPwv9bX Nu4HUn5EQpnNJ1itNkrd Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V _fGhMnSfYmaGrv7DvZ00">
                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j LVS5VhNiuUNp2iESGVfr">
                        <!-- Button -->
                        <button id="totalDeliveriesButton" data-dropdown-toggle="totalDeliveriesDropdown"
                            data-dropdown-placement="bottom"
                            class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW"
                            type="button">
                            Last 7 days
                            <svg class="UwVmaTmxbsmvnpCB2B1K _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="totalDeliveriesDropdown"
                            class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj _07uZcLokMvX7uULfRPY Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r">
                            <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                aria-labelledby="totalTrucksButton">
                                <li>
                                    <button type="button"
                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">Yesterday</button>
                                </li>
                                <li>
                                    <button type="button"
                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">Today</button>
                                </li>
                                <li>
                                    <button type="button"
                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">Last
                                        7 days</button>
                                </li>
                                <li>
                                    <button type="button"
                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">Last
                                        30 days</button>
                                </li>
                                <li>
                                    <button type="button"
                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">Last
                                        90 days</button>
                                </li>
                            </ul>
                        </div>
                        <a href="#"
                            class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz sdSaZcRa4_We5kKaX4pf OQflBVxALl1Ntbyc2J2_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 lWggu7HhYcktZVJ7_V7A OPrb_iG5WDy_7F05BDOX yChACvAr1v8czJ2VO22j">
                            Full report
                            <svg class="cZGr4DL6HOaMXQmjciUj UwVmaTmxbsmvnpCB2B1K _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _oMLPqquxUE25nEAshY6"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m9 5 7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table Widget -->
        <div
            class="hD0sTTDgbxakubcHVW2X mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
            <div class="ahOqFrhzLjivRe8a1kX_ hD0sTTDgbxakubcHVW2X _8exizyun8Av9ozDV0B8">
                <div class="Zy1Pypi71Xu6guex6urN XpuPpk9eXhVCrleKmXDr">
                    <div class="YRrCJSr_j5nopfm4duUc pjVv_HvtzX_QkbymyvoG Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j">
                        <h5
                            class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                            Open orders</h5>
                        <div
                            class="YRrCJSr_j5nopfm4duUc _VPh6kIywCMfXFfQLas4 e8VqoQNK0mbkRFDL3LMV _7_AEkSp_Gi6KH9ZW6st tI6ZVpHcCWxY_MKHSQWC MX_rT_HfQMh3dDrqOQ_i _Z3zYoo8SAGYZcCAB_mb SNt2jJ6mOxoWkDWNP3rs xr7CqaTHxTvDOrwAH2SW IQJ537EIO6dxb_gGB1jN">
                            <button type="button"
                                class="_k0lTW0vvzboctTxDi2R _VPh6kIywCMfXFfQLas4 Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="_6aYwdjzDCvXK0bVJQOb _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.828 2.25c-.916 0-1.699.663-1.85 1.567l-.091.549a.798.798 0 01-.517.608 7.45 7.45 0 00-.478.198.798.798 0 01-.796-.064l-.453-.324a1.875 1.875 0 00-2.416.2l-.243.243a1.875 1.875 0 00-.2 2.416l.324.453a.798.798 0 01.064.796 7.448 7.448 0 00-.198.478.798.798 0 01-.608.517l-.55.092a1.875 1.875 0 00-1.566 1.849v.344c0 .916.663 1.699 1.567 1.85l.549.091c.281.047.508.25.608.517.06.162.127.321.198.478a.798.798 0 01-.064.796l-.324.453a1.875 1.875 0 00.2 2.416l.243.243c.648.648 1.67.733 2.416.2l.453-.324a.798.798 0 01.796-.064c.157.071.316.137.478.198.267.1.47.327.517.608l.092.55c.15.903.932 1.566 1.849 1.566h.344c.916 0 1.699-.663 1.85-1.567l.091-.549a.798.798 0 01.517-.608 7.52 7.52 0 00.478-.198.798.798 0 01.796.064l.453.324a1.875 1.875 0 002.416-.2l.243-.243c.648-.648.733-1.67.2-2.416l-.324-.453a.798.798 0 01-.064-.796c.071-.157.137-.316.198-.478.1-.267.327-.47.608-.517l.55-.091a1.875 1.875 0 001.566-1.85v-.344c0-.916-.663-1.699-1.567-1.85l-.549-.091a.798.798 0 01-.608-.517 7.507 7.507 0 00-.198-.478.798.798 0 01.064-.796l.324-.453a1.875 1.875 0 00-.2-2.416l-.243-.243a1.875 1.875 0 00-2.416-.2l-.453.324a.798.798 0 01-.796.064 7.462 7.462 0 00-.478-.198.798.798 0 01-.517-.608l-.091-.55a1.875 1.875 0 00-1.85-1.566h-.344zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z">
                                    </path>
                                </svg>
                                Table settings
                            </button>
                        </div>
                    </div>
                    <div
                        class="YRrCJSr_j5nopfm4duUc e8VqoQNK0mbkRFDL3LMV RL7uPEoqj_KRubJO6Kau sJNGKHxFYdN5Nzml5J2j UYOSZJ1_pv3B5nt1ujCP p_2EXc_a2sDA_h41l8QU tuEYdQFQ7IyWJ8f7A6Ss hhVyfLYO5HBNKAsXwK1v IfjsJ_KBYZ_X91Cj395g eVEHKvmQTgrcFfcnBoRJ">
                        <div class="t6gkcSf0Bt4MLItXvDJ_">
                            <form class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                <label for="simple-search" class="_DVAfiyo21kM68EUVzEQ">Search</label>
                                <div class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_">
                                    <div
                                        class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua TYmpscr1PwuC1dpYXDpM YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _0VbwdpFdmHwQ2geg0Xp">
                                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"></path>
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search" placeholder="Search for orders"
                                        required=""
                                        class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D FJRldeiG2gFGZfuKgp88 CZURRWrw0Zimq2s_t6jr c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput ZrRO1ZZzN2eG_T6s2VJl">
                                </div>
                            </form>
                        </div>
                        <div
                            class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ _VPh6kIywCMfXFfQLas4 e8VqoQNK0mbkRFDL3LMV RL7uPEoqj_KRubJO6Kau TVHgSaRh3muGJct_epr9 icxWjIgUd9_dzYucx1nx MX_rT_HfQMh3dDrqOQ_i _Z3zYoo8SAGYZcCAB_mb SQf297smyJVNzzOO3iQL xr7CqaTHxTvDOrwAH2SW lCfuP2biCF6FdFarK955">
                            <button type="button"
                                class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ _VPh6kIywCMfXFfQLas4 Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM icxWjIgUd9_dzYucx1nx">
                                <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 12h14m-7 7V5"></path>
                                </svg>
                                Add new order
                            </button>
                            <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                                class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ _VPh6kIywCMfXFfQLas4 Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j icxWjIgUd9_dzYucx1nx _f8XqZvYJf7DNydLmFyI"
                                type="button">
                                <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M5.05 3C3.291 3 2.352 5.024 3.51 6.317l5.422 6.059v4.874c0 .472.227.917.613 1.2l3.069 2.25c1.01.742 2.454.036 2.454-1.2v-7.124l5.422-6.059C21.647 5.024 20.708 3 18.95 3H5.05Z">
                                    </path>
                                </svg>
                                Filter options
                                <svg class="cZGr4DL6HOaMXQmjciUj gtlIjUq8I0xb1BZjyfWO _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 9-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="filterDropdown"
                                class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj fScvmu_bLBCkoXb3Xml3 mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 Lwvvap4319fmCogicbX3 mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r">
                                <h6
                                    class="_hpGev6RXFut0Jm_iRgf c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Status</h6>
                                <ul class="TVHgSaRh3muGJct_epr9 c8dCx6gnV43hTOLV6ks5" aria-labelledby="dropdownDefault">
                                    <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                        <input id="completed" type="checkbox" value=""
                                            class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl _8kDN2mZyAf_kSS0wRR7 yVD6UHmZ_BcStq0KYFeK xNLnhcMNiXCMFeR47DtF BO8JrKgx4qkHG27c4wVR">
                                        <label for="completed"
                                            class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl InCcgjUDuAfyQ1jNDd43">Completed</label>
                                    </li>
                                    <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                        <input id="cancelled" type="checkbox" value="" checked=""
                                            class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl _8kDN2mZyAf_kSS0wRR7 yVD6UHmZ_BcStq0KYFeK xNLnhcMNiXCMFeR47DtF BO8JrKgx4qkHG27c4wVR">
                                        <label for="cancelled"
                                            class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl InCcgjUDuAfyQ1jNDd43">Cancelled</label>
                                    </li>
                                    <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                        <input id="pending" type="checkbox" value=""
                                            class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl _8kDN2mZyAf_kSS0wRR7 yVD6UHmZ_BcStq0KYFeK xNLnhcMNiXCMFeR47DtF BO8JrKgx4qkHG27c4wVR">
                                        <label for="pending"
                                            class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl InCcgjUDuAfyQ1jNDd43">In
                                            progress</label>
                                    </li>
                                </ul>
                            </div>
                            <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown"
                                class="YRrCJSr_j5nopfm4duUc _VPh6kIywCMfXFfQLas4 Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j icxWjIgUd9_dzYucx1nx _f8XqZvYJf7DNydLmFyI"
                                type="button">
                                Actions
                                <svg class="cZGr4DL6HOaMXQmjciUj gtlIjUq8I0xb1BZjyfWO _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 9-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="actionsDropdown"
                                class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj fScvmu_bLBCkoXb3Xml3 Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r">
                                <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                    aria-labelledby="actionsDropdownButton">
                                    <li>
                                        <button type="button" id="changeStatusButton"
                                            data-modal-target="changeStatusModal" data-modal-toggle="changeStatusModal"
                                            class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                            <svg class="_j7jrBV2UWRXe__bk9uf _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Change status
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" id="deleteOrderButton"
                                            data-modal-target="deleteOrderModal" data-modal-toggle="deleteOrderModal"
                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Delete all
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_IebywwKB6L2zG0BTy63 ahOqFrhzLjivRe8a1kX_">
                <table
                    class="t6gkcSf0Bt4MLItXvDJ_ upQp7iWehfaU8VTbfx_w c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                    <thead
                        class="jtAJHOc7mn7b4IKRO59D gMXmdpOPfqG_3CKkL0VD sdSaZcRa4_We5kKaX4pf PeR2JZ9BZHYIH8Ea3F36 jqg6J89cvxmDiFpnV56r XIIs8ZOri3wm8Wnj9N_y">
                        <tr>
                            <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="checkbox-table-search" type="checkbox" onclick="event.stopPropagation()"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="checkbox-table-search" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                </div>
                            </td>
                            <th scope="col"
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                Transaction</th>
                            <th scope="col"
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                Date &amp; Time
                                <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z">
                                    </path>
                                </svg>
                            </th>
                            <th scope="col"
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                Amount

                                <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z">
                                    </path>
                                </svg>
                            </th>
                            <th scope="col"
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    Order Type
                                    <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z">
                                        </path>
                                    </svg>
                                </div>
                            </th>
                            <th scope="col"
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                Status
                            </th>
                            <th scope="col" class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                <span class="_DVAfiyo21kM68EUVzEQ">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                            <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="checkbox-table-search-1" type="checkbox" onclick="event.stopPropagation()"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="checkbox-table-search-1" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                </div>
                            </td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                Order sent to <span class="ezMFUVl744lvw6ht0lFe">Binance</span></td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                Oct 31 ,2025</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                0.2746593BTC</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF">
                                Buy</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe Wz8P4aylnNebbmktt9TH dc1ZvnXYavhnPynbasI1">
                                <span
                                    class="Y3FxyuXtj2gecrGXvLEI k1sFscPcBz_oMeiTaKv8 St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe gxqPdw4EewWD7Ph9huFn a0oEzk8_ILhkMVanM4oU Ve5b1Uj_g0EE28J7Z_Ka">In
                                    progress</span>
                            </td>
                            <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <button id="order-1-dropdown-button" type="button"
                                    data-dropdown-toggle="order-1-dropdown"
                                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                    <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="4"
                                            d="M6 12h0m6 0h0m6 0h0"></path>
                                    </svg>
                                </button>
                                <div id="order-1-dropdown"
                                    class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj fScvmu_bLBCkoXb3Xml3 Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r">
                                    <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                        aria-labelledby="order-1-dropdown-button">
                                        <li>
                                            <a href="../../e-commerce/transaction/index.html"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Details
                                            </a>
                                        </li>
                                        <li>
                                            <button type="button" id="deleteOrderButton"
                                                data-modal-target="deleteOrderModal" data-modal-toggle="deleteOrderModal"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                            <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="checkbox-table-search-2" type="checkbox" onclick="event.stopPropagation()"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="checkbox-table-search-2" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                </div>
                            </td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                Order sent to <span class="ezMFUVl744lvw6ht0lFe">ExchangeBTC</span></td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                Oct 23 ,2025</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                1.33467 BTC</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF">
                                Buy</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe Wz8P4aylnNebbmktt9TH dc1ZvnXYavhnPynbasI1">
                                <span
                                    class="Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">Completed</span>
                            </td>
                            <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <button id="order-2-dropdown-button" type="button"
                                    data-dropdown-toggle="order-2-dropdown"
                                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                    <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="4"
                                            d="M6 12h0m6 0h0m6 0h0"></path>
                                    </svg>
                                </button>
                                <div id="order-2-dropdown"
                                    class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj fScvmu_bLBCkoXb3Xml3 Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r">
                                    <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                        aria-labelledby="order-2-dropdown-button">
                                        <li>
                                            <a href="../../e-commerce/transaction/index.html"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Details
                                            </a>
                                        </li>
                                        <li>
                                            <button type="button" id="deleteOrderButton"
                                                data-modal-target="deleteOrderModal" data-modal-toggle="deleteOrderModal"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                            <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="checkbox-table-search-3" type="checkbox" onclick="event.stopPropagation()"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="checkbox-table-search-3" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                </div>
                            </td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                Order sent to <span class="ezMFUVl744lvw6ht0lFe">Binance</span></td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                Aug 18, 2025</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                3.274635ETH</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt Sz97zU8r72z_pjE9zQnR">
                                Sell</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe Wz8P4aylnNebbmktt9TH dc1ZvnXYavhnPynbasI1">
                                <span
                                    class="Y3FxyuXtj2gecrGXvLEI __CUdK3mSkcMQpxc1Lod St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe ZN_OBnKt2VQjvkKnCO6j _GlwOcA9YuerMlQx_c88 _XapmO5DQjdm9xWcSSv9">Cancelled</span>
                            </td>
                            <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <button id="order-3-dropdown-button" type="button"
                                    data-dropdown-toggle="order-3-dropdown"
                                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                    <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="4"
                                            d="M6 12h0m6 0h0m6 0h0"></path>
                                    </svg>
                                </button>
                                <div id="order-3-dropdown"
                                    class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj fScvmu_bLBCkoXb3Xml3 Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r">
                                    <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                        aria-labelledby="order-3-dropdown-button">
                                        <li>
                                            <a href="../../e-commerce/transaction/index.html"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Details
                                            </a>
                                        </li>
                                        <li>
                                            <button type="button" id="deleteOrderButton"
                                                data-modal-target="deleteOrderModal" data-modal-toggle="deleteOrderModal"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                            <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="checkbox-table-search-4" type="checkbox" onclick="event.stopPropagation()"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="checkbox-table-search-4" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                </div>
                            </td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                Order sent to <span class="ezMFUVl744lvw6ht0lFe">ExchangeBTC</span></td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                Aug 18, 2025</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                12.7344459 ETH</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF">
                                Buy</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe Wz8P4aylnNebbmktt9TH dc1ZvnXYavhnPynbasI1">
                                <span
                                    class="fhCwost7CSNRc2WSHLFW Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">Completed</span>
                            </td>
                            <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <button id="order-4-dropdown-button" type="button"
                                    data-dropdown-toggle="order-4-dropdown"
                                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                    <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="4"
                                            d="M6 12h0m6 0h0m6 0h0"></path>
                                    </svg>
                                </button>
                                <div id="order-4-dropdown"
                                    class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj fScvmu_bLBCkoXb3Xml3 Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r">
                                    <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                        aria-labelledby="order-4-dropdown-button">
                                        <li>
                                            <a href="../../e-commerce/transaction/index.html"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Details
                                            </a>
                                        </li>
                                        <li>
                                            <button type="button" id="deleteOrderButton"
                                                data-modal-target="deleteOrderModal" data-modal-toggle="deleteOrderModal"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                            <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="checkbox-table-search-5" type="checkbox"
                                        onclick="event.stopPropagation()"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="checkbox-table-search-5" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                </div>
                            </td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                Order sent to <span class="ezMFUVl744lvw6ht0lFe">Binance</span></td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                Aug 18, 2025</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                40 DOGE</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt Sz97zU8r72z_pjE9zQnR">
                                Sell</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe Wz8P4aylnNebbmktt9TH dc1ZvnXYavhnPynbasI1">
                                <span
                                    class="Y3FxyuXtj2gecrGXvLEI __CUdK3mSkcMQpxc1Lod St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe ZN_OBnKt2VQjvkKnCO6j _GlwOcA9YuerMlQx_c88 _XapmO5DQjdm9xWcSSv9">Cancelled</span>
                            </td>
                            <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <button id="order-5-dropdown-button" type="button"
                                    data-dropdown-toggle="order-5-dropdown"
                                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                    <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="4"
                                            d="M6 12h0m6 0h0m6 0h0"></path>
                                    </svg>
                                </button>
                                <div id="order-5-dropdown"
                                    class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj fScvmu_bLBCkoXb3Xml3 Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r">
                                    <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                        aria-labelledby="order-5-dropdown-button">
                                        <li>
                                            <a href="../../e-commerce/transaction/index.html"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Details
                                            </a>
                                        </li>
                                        <li>
                                            <button type="button" id="deleteOrderButton"
                                                data-modal-target="deleteOrderModal"
                                                data-modal-toggle="deleteOrderModal"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                            <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="checkbox-table-search-6" type="checkbox"
                                        onclick="event.stopPropagation()"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="checkbox-table-search-6" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                </div>
                            </td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                Order sent to <span class="ezMFUVl744lvw6ht0lFe">ExchangeBTC</span></td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                Aug 15 ,2025</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                0.0375693 BTC</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF">
                                Buy</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe Wz8P4aylnNebbmktt9TH dc1ZvnXYavhnPynbasI1">
                                <span
                                    class="Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">Completed</span>
                            </td>
                            <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <button id="order-6-dropdown-button" type="button"
                                    data-dropdown-toggle="order-6-dropdown"
                                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                    <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="4"
                                            d="M6 12h0m6 0h0m6 0h0"></path>
                                    </svg>
                                </button>
                                <div id="order-6-dropdown"
                                    class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj fScvmu_bLBCkoXb3Xml3 Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r">
                                    <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                        aria-labelledby="order-6-dropdown-button">
                                        <li>
                                            <a href="../../e-commerce/transaction/index.html"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Details
                                            </a>
                                        </li>
                                        <li>
                                            <button type="button" id="deleteOrderButton"
                                                data-modal-target="deleteOrderModal"
                                                data-modal-toggle="deleteOrderModal"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                            <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="checkbox-table-search-7" type="checkbox"
                                        onclick="event.stopPropagation()"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="checkbox-table-search-7" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                </div>
                            </td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                Order sent to <span class="ezMFUVl744lvw6ht0lFe">MetaverseExchange</span></td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                Jun 05 ,2025</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                8.64 BTC</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF">
                                Buy</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe Wz8P4aylnNebbmktt9TH dc1ZvnXYavhnPynbasI1">
                                <span
                                    class="Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">Completed</span>
                            </td>
                            <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <button id="order-7-dropdown-button" type="button"
                                    data-dropdown-toggle="order-7-dropdown"
                                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                    <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="4"
                                            d="M6 12h0m6 0h0m6 0h0"></path>
                                    </svg>
                                </button>
                                <div id="order-7-dropdown"
                                    class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj fScvmu_bLBCkoXb3Xml3 Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r">
                                    <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                        aria-labelledby="order-7-dropdown-button">
                                        <li>
                                            <a href="../../e-commerce/transaction/index.html"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Details
                                            </a>
                                        </li>
                                        <li>
                                            <button type="button" id="deleteOrderButton"
                                                data-modal-target="deleteOrderModal"
                                                data-modal-toggle="deleteOrderModal"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                            <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="checkbox-table-search-8" type="checkbox"
                                        onclick="event.stopPropagation()"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="checkbox-table-search-8" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                </div>
                            </td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                Order sent to <span class="ezMFUVl744lvw6ht0lFe">Binance</span></td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                May 27 ,2025</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                2.0375 DAI</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF">
                                Buy</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe Wz8P4aylnNebbmktt9TH dc1ZvnXYavhnPynbasI1">
                                <span
                                    class="Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">Completed</span>
                            </td>
                            <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <button id="order-8-dropdown-button" type="button"
                                    data-dropdown-toggle="order-8-dropdown"
                                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                    <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="4"
                                            d="M6 12h0m6 0h0m6 0h0"></path>
                                    </svg>
                                </button>
                                <div id="order-8-dropdown"
                                    class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj fScvmu_bLBCkoXb3Xml3 Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r">
                                    <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                        aria-labelledby="order-8-dropdown-button">
                                        <li>
                                            <a href="../../e-commerce/transaction/index.html"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Details
                                            </a>
                                        </li>
                                        <li>
                                            <button type="button" id="deleteOrderButton"
                                                data-modal-target="deleteOrderModal"
                                                data-modal-toggle="deleteOrderModal"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                            <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="checkbox-table-search-9" type="checkbox"
                                        onclick="event.stopPropagation()"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="checkbox-table-search-9" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                </div>
                            </td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                Order sent to <span class="ezMFUVl744lvw6ht0lFe">BinanceExc</span></td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                May 27 ,2025</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                0.0375693 BTC</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt Sz97zU8r72z_pjE9zQnR">
                                Sell</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe Wz8P4aylnNebbmktt9TH dc1ZvnXYavhnPynbasI1">
                                <span
                                    class="Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">Completed</span>
                            </td>
                            <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <button id="order-9-dropdown-button" type="button"
                                    data-dropdown-toggle="order-9-dropdown"
                                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                    <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="4"
                                            d="M6 12h0m6 0h0m6 0h0"></path>
                                    </svg>
                                </button>
                                <div id="order-9-dropdown"
                                    class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj fScvmu_bLBCkoXb3Xml3 Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r">
                                    <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                        aria-labelledby="order-9-dropdown-button">
                                        <li>
                                            <a href="../../e-commerce/transaction/index.html"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Details
                                            </a>
                                        </li>
                                        <li>
                                            <button type="button" id="deleteOrderButton"
                                                data-modal-target="deleteOrderModal"
                                                data-modal-toggle="deleteOrderModal"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="_7KA5gD55t2lxf9Jkj20 iIDqXVKz6wdYnAVfRsN2">
                            <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="checkbox-table-search-10" type="checkbox"
                                        onclick="event.stopPropagation()"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="checkbox-table-search-10" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                </div>
                            </td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                Order sent to <span class="ezMFUVl744lvw6ht0lFe">Binance</span></td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                Apr 11 ,2025</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                0.8375 DAI</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt Sz97zU8r72z_pjE9zQnR">
                                Sell</td>
                            <td
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe Wz8P4aylnNebbmktt9TH dc1ZvnXYavhnPynbasI1">
                                <span
                                    class="Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">Completed</span>
                            </td>
                            <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <button id="order-10-dropdown-button" type="button"
                                    data-dropdown-toggle="order-10-dropdown"
                                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                    <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="4"
                                            d="M6 12h0m6 0h0m6 0h0"></path>
                                    </svg>
                                </button>
                                <div id="order-10-dropdown"
                                    class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj fScvmu_bLBCkoXb3Xml3 Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r">
                                    <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                        aria-labelledby="order-10-dropdown-button">
                                        <li>
                                            <a href="../../e-commerce/transaction/index.html"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Details
                                            </a>
                                        </li>
                                        <li>
                                            <button type="button" id="deleteOrderButton"
                                                data-modal-target="deleteOrderModal"
                                                data-modal-toggle="deleteOrderModal"
                                                class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div
                class="ahOqFrhzLjivRe8a1kX_ wBVMFkIGfrKshbvi2gS1 rPhC6E4mbGlFBOJnsyEg pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V p_2EXc_a2sDA_h41l8QU _fGhMnSfYmaGrv7DvZ00 WoJnkQmBGtEPqYedyh7V">
                <nav class="YRrCJSr_j5nopfm4duUc e8VqoQNK0mbkRFDL3LMV _7_AEkSp_Gi6KH9ZW6st sJNGKHxFYdN5Nzml5J2j UYOSZJ1_pv3B5nt1ujCP MX_rT_HfQMh3dDrqOQ_i _Z3zYoo8SAGYZcCAB_mb xr7CqaTHxTvDOrwAH2SW"
                    aria-label="Table navigation">
                    <span class="c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                        Showing
                        <span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">1-10</span>
                        of
                        <span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">1000</span>
                    </span>
                    <ul class="_k0lTW0vvzboctTxDi2R RL7uPEoqj_KRubJO6Kau EVsptO6LmMeSj8z3lntE">
                        <li>
                            <a href="#"
                                class="CoXBDf_LlsdMbiNfGE67 YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU Zbcg0Bjzm_C_64FAwnE3 pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI Qkdk47eO_FsOcXfaC9zb PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                <span class="_DVAfiyo21kM68EUVzEQ">Previous</span>
                                <svg class="E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m15 19-7-7 7-7"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="QhmQ_v3mmDFIP9VaVOfb YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln XQGFRdlxLbhbEMzeaRuO OHD_pMp_ehzJj42EmDyF _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu _6MyV8SXoSWq_PQ6KWI6 M7HoUYpjoEdw_y87xeWn YXx9oZ15oLXSCG32YPBT _fGhMnSfYmaGrv7DvZ00 jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">...</a>
                        </li>
                        <li>
                            <a href="#"
                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">100</a>
                        </li>
                        <li>
                            <a href="#"
                                class="YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _McrmMbFrEkc_sTK9IC8 pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI Qkdk47eO_FsOcXfaC9zb OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                <span class="_DVAfiyo21kM68EUVzEQ">Next</span>
                                <svg class="E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m9 5 7 7-7 7"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Delete order modal -->
    <div id="deleteOrderModal" tabindex="-1" aria-hidden="true"
        class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
        <div
            class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ uv4ZnT9l0TZhdd_Ia_EC _wYiJGbRZyFZeCc8y7Sf">
            <!-- Modal content -->
            <div
                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
                <button type="button"
                    class="pq2JRWtiWcwYnw3xueNl g11v7hv2nftKJig5bsCt tUrUahyB6juka_LhwvrY LAjAGvS_n5tUL9Q_7i85 _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                    data-modal-toggle="deleteOrderModal">
                    <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18 17.94 6M18 18 6.06 6"></path>
                    </svg>
                    <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
                </button>
                <h3
                    class="Z3N7I2IDDsoXK6xJ1cSW y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                    Are you sure?</h3>
                <p class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">The following order will be
                    permanently deleted and cannot be restored:</p>
                <ul role="list"
                    class="hD0sTTDgbxakubcHVW2X TVHgSaRh3muGJct_epr9 upQp7iWehfaU8VTbfx_w ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE N4SFnsqiVKm1oFHmSTyG">
                    <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj">
                        <svg aria-hidden="true"
                            class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Order to Binance - 0.2746593BTC</span>
                    </li>
                </ul>
                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                    <button data-modal-toggle="deleteTransactionModal" type="button"
                        class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                        Cancel
                    </button>
                    <button type="submit"
                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F SdPDrbResNmgnA0L4Iki _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 w8mVIEFJVQG7skDEVVw8 BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 wGCv_lBIef6dPW_LgqPQ g0psQAXAFirvUBcDyMSb">
                        <svg aria-hidden="true"
                            class="ZEPNZzATe5nPnS0shmrF C_aqJ70iNmOTNL788uQu _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Change status modal -->
    <div id="changeStatusModal" tabindex="-1" aria-hidden="true"
        class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
        <div
            class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ uv4ZnT9l0TZhdd_Ia_EC _wYiJGbRZyFZeCc8y7Sf">
            <!-- Modal content -->
            <div
                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
                <button type="button"
                    class="pq2JRWtiWcwYnw3xueNl g11v7hv2nftKJig5bsCt tUrUahyB6juka_LhwvrY LAjAGvS_n5tUL9Q_7i85 _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                    data-modal-toggle="changeStatusModal">
                    <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18 17.94 6M18 18 6.06 6"></path>
                    </svg>
                    <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
                </button>
                <h3
                    class="Z3N7I2IDDsoXK6xJ1cSW y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                    Change status</h3>
                <p class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Select a new status and apply
                    the update to these orders to keep them up to date.</p>
                <ul role="list"
                    class="aJF41JQLhtfw_MCGt5Th TVHgSaRh3muGJct_epr9 upQp7iWehfaU8VTbfx_w ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                    <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj">
                        <svg aria-hidden="true"
                            class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Order to Binance - 0.2746593BTC</span>
                    </li>
                    <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj">
                        <svg aria-hidden="true"
                            class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Order to ExchangeBTC - 1.33467 BTC</span>
                    </li>
                </ul>
                <form class="ZhzOGpbwY0R4TKKYr5pG YajDCE_nRj_FDIevNpsd hD0sTTDgbxakubcHVW2X">
                    <label for="status"
                        class="_Vb9igHms0hI1PQcvp_S TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Order
                        status</label>
                    <select id="status"
                        class="jtAJHOc7mn7b4IKRO59D pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk __9sbu0yrzdhGIkLWNXl c8dCx6gnV43hTOLV6ks5 mveJTCIb2WII7J4sY22F GdTcGtoKP5_bET3syLDl LceKfSImrGKQrtDGkpBV _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j jqg6J89cvxmDiFpnV56r Mmx5lX7HVdrWCgh3EpTP H7KQDhgKsqZaTUouEUQL OyABRrnTV_kvHV7dJ0uE KpCMWe32PQyrSFbZVput q6szSHqGtBufkToFe_s5">
                        <option selected="">In progress</option>
                        <option value="completed">Completed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </form>

                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                    <button data-modal-toggle="changeStatusModal" type="button"
                        class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                        Cancel
                    </button>
                    <button type="submit"
                        class="_Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j y6GKdvUrd7vp_pxsFb57 _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 g40_g3BQzYCOX5eZADgY YoPCmQ0E_V5W0GGmSIdm _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T ezMFUVl744lvw6ht0lFe mveJTCIb2WII7J4sY22F c8dCx6gnV43hTOLV6ks5 d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R BkIbg_JwkgiyRW804Hhu _ZsTMX_gz275093orLWM">
                        Apply
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const select = document.getElementById('collateral-select');
            const fromInput = document.getElementById('from-input');
            const toInput = document.getElementById('to-form');
            const infoText = document.querySelector('.XJih04pKHf8Cekga6Hj3');
            const submitbtnLoan = document.getElementById('editKeyButtton');
            const image = document.getElementById('collateral-image');
            const coltitle = document.getElementById('previewCollateral');
            const subtitle = document.getElementById('subTitle');
            const paragraphforLoan = document.getElementById('paragraphforLoan');
            const colBalance = document.getElementById('previewAvailable');
            const previewLocked = document.getElementById('previewLocked');
            const nextbal = document.getElementById('nextbal');
            const previewRequested = document.getElementById('previewRequested');
            const colAssetName = document.getElementById('colAssetName');
            const loan_amount_input = document.getElementById('loan_amount_input');
            //const walletColAddress = document.getElementById('walletColAddress');

            submitbtnLoan.style.display = "none";
            // Helper: format number as USD
            function formatCurrency(value) {
                return new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    currency: 'USD',
                    minimumFractionDigits: 2
                }).format(value);
            }

            // Helper: show error in red
            function showError(msg) {
                infoText.style.color = 'red';
                infoText.textContent = msg;
            }

            // Helper: clear error
            function clearError() {
                infoText.style.color = '';
                infoText.textContent = '';
            }

            // When user changes asset
            select.addEventListener('change', () => {
                const selected = select.options[select.selectedIndex];
                const balance = parseFloat(selected.dataset.balance || 0);
                const asset_name = selected.dataset.asset_name;
                const collateral_wallet = selected.dataset.wallet_address;
                const collateral_id = selected.dataset.id;
                const availableFunds = selected.dataset.availableFunds;

                fromInput.value = '';
                // image.src = `/assets/images/item/${asset_name}.svg`;
                // Set placeholder showing available balance
                fromInput.placeholder = `Available: ${formatCurrency(balance)}`;
                coltitle.innerHTML = `${asset_name}`;
                colAssetName.value = `${asset_name}`;


                // subtitle.innerHTML = `${collateral_id}`;
                //walletColAddress.innerHTML = `${collateral_wallet}`;
                fromInput.dataset.balance = balance;

                clearError();
                toInput.value = '';
                toInput.disabled = true;
            });

            // When user types an amount
            fromInput.addEventListener('input', () => {
                const entered = parseFloat(fromInput.value || 0);
                const balance = parseFloat(fromInput.dataset.balance || 0);

                if (!balance) {
                    showError('Please select a collateral asset first.');
                    toInput.value = '';
                    toInput.disabled = true;
                    submitbtnLoan.style.display = "none";
                    return;
                }

                // Validate entered amount
                if (entered < 5000) {
                    showError('Error: Minimum collateral is $5,000.');
                    toInput.value = '';
                    toInput.disabled = true;
                    submitbtnLoan.style.display = "none";
                    return;
                }

                if (entered > balance) {
                    showError(
                        `Error: Entered amount exceeds available balance (${formatCurrency(balance)}).`);
                    toInput.value = '';
                    toInput.disabled = true;
                    submitbtnLoan.style.display = "none";

                    return;
                }

                clearError();

                // Calculate 70% LTV based on entered amount
                const ltv = entered * 0.7;
                toInput.disabled = true;
                submitbtnLoan.style.display = "block";
                toInput.value = ltv.toFixed(2);
                loan_amount_input.value = ltv.toFixed(2);
                infoText.textContent = `LTV (70% of entered amount): ${formatCurrency(ltv)}`;
                paragraphforLoan.innerHTML =
                    `Review your loan request of ${formatCurrency(ltv.toFixed(2))} carefully before submitting your request.`
                previewRequested.innerHTML = formatCurrency(ltv.toFixed(2))
                colBalance.innerHTML = formatCurrency(balance);
                previewLocked.innerHTML = formatCurrency(fromInput.value)
                nextbal.innerHTML = formatCurrency(balance - fromInput.value);
            });
        });
    </script>




@endsection
