@extends('auth.v3.layouts.dashboard')
@section('title', 'Loans | User Dashboard')
@php
    use Carbon\Carbon;

@endphp
@section('content')
    <div class="xCPtuxM4_gihvpPwv9bX wDF2ls8Apmy3KGiCbxI_ _Ybd3WwuTVljUT4vEaM3 h8KYXnua2NT4kTVzieom">
        <div class="EWLTGduHCjFnjN6tLCXV _Zt0QWNoskeJIuWJ94UW XJih04pKHf8Cekga6Hj3">
            <nav class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc" aria-label="Breadcrumb">
                <ol
                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 R0X5VtiZIoV7IjvrxBJ_ hPWJir4VhLurUkdR8iyI UiRKvjjl_rZRhuc5tGul">
                    <li class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                        <a href="#"
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
                                class="UwVmaTmxbsmvnpCB2B1K c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _9RDyySiJ2_PuvLFkRD4">All
                                Loans</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h1
                class="hD0sTTDgbxakubcHVW2X vyo_A8gnQD1QWDPglr3h yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                All loans</h1>
            <div
                class="xCPtuxM4_gihvpPwv9bX Q4KJqTa5GBaAJ29_u66A bNuwEJVjy8l4O1aX1zho O9PsHegcdo6t4iE_A1pO v5aPl8cGLNtG2x6pfFbY kmeQeCxwsLiPZRjexUEa">
                <div
                    class="tI6ZVpHcCWxY_MKHSQWC mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi">
                    <span
                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">
                        <svg class="TjZ7WRU8N07qtufg9BOd _j7jrBV2UWRXe__bk9uf OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v13m0-13 4 4m-4-4-4 4"></path>
                        </svg>
                        8%
                    </span>
                    <h2
                        class="q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        {{ count($loans) }}</h2>
                    <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Total loans</p>
                </div>
                <div
                    class="tI6ZVpHcCWxY_MKHSQWC mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi">
                    <span
                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">
                        <svg class="TjZ7WRU8N07qtufg9BOd _j7jrBV2UWRXe__bk9uf OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v13m0-13 4 4m-4-4-4 4"></path>
                        </svg>
                        12,4
                    </span>
                    <h2
                        class="q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        {{ count($activeLoan) }}</h2>
                    <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Active</p>
                </div>
                <div
                    class="tI6ZVpHcCWxY_MKHSQWC mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi">
                    <span
                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI __CUdK3mSkcMQpxc1Lod St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe ZN_OBnKt2VQjvkKnCO6j _GlwOcA9YuerMlQx_c88 _XapmO5DQjdm9xWcSSv9">
                        <svg class="TjZ7WRU8N07qtufg9BOd _j7jrBV2UWRXe__bk9uf OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19V5m0 14-4-4m4 4 4-4"></path>
                        </svg>
                        3,7
                    </span>
                    <h2
                        class="q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        {{ count($repaidLoans) }}</h2>
                    <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Repaid</p>
                </div>
                <div
                    class="tI6ZVpHcCWxY_MKHSQWC mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi">
                    <span
                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI __CUdK3mSkcMQpxc1Lod St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe ZN_OBnKt2VQjvkKnCO6j _GlwOcA9YuerMlQx_c88 _XapmO5DQjdm9xWcSSv9">
                        <svg class="TjZ7WRU8N07qtufg9BOd _j7jrBV2UWRXe__bk9uf OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19V5m0 14-4-4m4 4 4-4"></path>
                        </svg>
                        12,4
                    </span>
                    <h2
                        class="q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        {{ count($pendingLoans) }}</h2>
                    <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Pending</p>
                </div>
            </div>
        </div>
        <!-- Table -->
        <div
            class="ahOqFrhzLjivRe8a1kX_ _rqdzTLZuOhGujxvI_Bb wBVMFkIGfrKshbvi2gS1 _Ybd3WwuTVljUT4vEaM3 h8KYXnua2NT4kTVzieom">
            <div
                class="Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j tI6ZVpHcCWxY_MKHSQWC EpUSgjHdM6oyMXUiK_8_ _wYiJGbRZyFZeCc8y7Sf _JnjhZbEHpDJUKJAU8Cw rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL xr7CqaTHxTvDOrwAH2SW tuEYdQFQ7IyWJ8f7A6Ss">
                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 CCzVJrpB3dJXRdY_Es48">
                    <h5 class="yM_AorRf2jSON3pDsdrz OyABRrnTV_kvHV7dJ0uE">Loans</h5>
                    <button type="button" data-tooltip-target="results-tooltip"
                        class="_JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">
                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm9.4-5.5a1 1 0 1 0 0 2 1 1 0 1 0 0-2ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4c0-.6-.4-1-1-1h-2Z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="_DVAfiyo21kM68EUVzEQ">More info</span>
                    </button>
                    <div id="results-tooltip" role="tooltip"
                        class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r">
                        This gives you information about all loans currently attributed to you.
                        <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
                    </div>
                </div>
                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 hLiU_EU6hK5DGt8Nzo2B n8sxvjGHwzwKnEL9Mnm_">
                    <button id="createProductButton" data-modal-target="createProductModal"
                        data-modal-toggle="createProductModal" type="button"
                        class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM icxWjIgUd9_dzYucx1nx">
                        <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7 7V5"></path>
                        </svg>
                        Request loan
                    </button>

                </div>
            </div>
            <div
                class="YRrCJSr_j5nopfm4duUc Sg_3d5zRNStcQDmbq_hb _7_AEkSp_Gi6KH9ZW6st sJNGKHxFYdN5Nzml5J2j _wYiJGbRZyFZeCc8y7Sf tuEYdQFQ7IyWJ8f7A6Ss hhVyfLYO5HBNKAsXwK1v IfjsJ_KBYZ_X91Cj395g">
                <div
                    class="xCPtuxM4_gihvpPwv9bX t6gkcSf0Bt4MLItXvDJ_ Q4KJqTa5GBaAJ29_u66A iHPddplqYvrN6qWgvntn am5sCgUbazcbTQqt2TYo DyG7A4viMuur4z1rJih8 hD0sTTDgbxakubcHVW2X mb:mb-0">
                    <div class="ahOqFrhzLjivRe8a1kX_ NuAmO8g0YTaWK5StMDfU t6gkcSf0Bt4MLItXvDJ_">
                        <input type="text" id="floating_standard"
                            class="aOpxpduJhFdYT26YEhfy _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ XqSL5V7_SrzmH4rMpDJN x10gJN85ZCc5bRhhp5SO WLibwhDKgps6unDTx3Tu qUWbS_LTZujDB4XCd11V mW4LfSTbez3WHPeTDguY u9_fvzcYrA0KCturmOwS cexDVMRjens2nRrMcG96 c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm BkIbg_JwkgiyRW804Hhu BCXo0zdQlc4S7h_o_JxW _fGhMnSfYmaGrv7DvZ00 OyABRrnTV_kvHV7dJ0uE q6szSHqGtBufkToFe_s5"
                            placeholder=" ">
                        <label for="floating_standard"
                            class="pq2JRWtiWcwYnw3xueNl TrNR_Aa5P1kNSZ4ZUR94 i6s_mKbIoCvGCGRVGIuq lh4XkrA8NRAQ9Wx1soxk vSxSC4SqA3seWD0lGL5P X0uNpfY3I0bVG0K_Zg7w c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 rqOAGYeDo9iWuroePkaf QvpoQpQ6gLZUgiAqC65i CQvEqEXfrCCsq0_5vlgO kfhhYIO8V8ysmYmwWvpE jMJOhYrnCipHMMlXl8CO _CfootXW_o9MBEYGa3MD wS_FZuKCMrTqjie3fiyh XIIs8ZOri3wm8Wnj9N_y bWvAB5j9s68xaw_EQvVO _4usdL5knJDkxC9jjH7Y b53oLiH5Z97kk5Oml2UX">
                            Search
                        </label>
                    </div>
                    <div class="t6gkcSf0Bt4MLItXvDJ_">
                        <label for="brand" class="_DVAfiyo21kM68EUVzEQ">Collateral</label>
                        <select id="brand"
                            class="aOpxpduJhFdYT26YEhfy _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ XqSL5V7_SrzmH4rMpDJN x10gJN85ZCc5bRhhp5SO WLibwhDKgps6unDTx3Tu qUWbS_LTZujDB4XCd11V mW4LfSTbez3WHPeTDguY u9_fvzcYrA0KCturmOwS cexDVMRjens2nRrMcG96 c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 EY5MouUn1IPExWxUcfb8 BkIbg_JwkgiyRW804Hhu BCXo0zdQlc4S7h_o_JxW _fGhMnSfYmaGrv7DvZ00 XIIs8ZOri3wm8Wnj9N_y">
                            <option selected="">Asset</option>
                            @foreach ($collaterals as $collateral)
                                <option value="{{ $collateral->asset_name }}">{{ $collateral->asset_name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="t6gkcSf0Bt4MLItXvDJ_">
                        <label for="price" class="_DVAfiyo21kM68EUVzEQ">Price</label>
                        <select id="price"
                            class="aOpxpduJhFdYT26YEhfy _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ XqSL5V7_SrzmH4rMpDJN x10gJN85ZCc5bRhhp5SO WLibwhDKgps6unDTx3Tu qUWbS_LTZujDB4XCd11V mW4LfSTbez3WHPeTDguY u9_fvzcYrA0KCturmOwS cexDVMRjens2nRrMcG96 c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 EY5MouUn1IPExWxUcfb8 BkIbg_JwkgiyRW804Hhu BCXo0zdQlc4S7h_o_JxW _fGhMnSfYmaGrv7DvZ00 XIIs8ZOri3wm8Wnj9N_y">
                            <option selected="">Price</option>
                            <option value="below-100">$ 5,000-10,000</option>
                            <option value="below-500">$ 101-500</option>
                            <option value="below-1000">$ 501-1000</option>
                            <option value="over-1000">$ 1001+</option>
                        </select>
                    </div>
                    <div class="t6gkcSf0Bt4MLItXvDJ_">
                        <label for="category" class="_DVAfiyo21kM68EUVzEQ">Status</label>
                        <select id="category"
                            class="aOpxpduJhFdYT26YEhfy _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ XqSL5V7_SrzmH4rMpDJN x10gJN85ZCc5bRhhp5SO WLibwhDKgps6unDTx3Tu qUWbS_LTZujDB4XCd11V mW4LfSTbez3WHPeTDguY u9_fvzcYrA0KCturmOwS cexDVMRjens2nRrMcG96 c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 EY5MouUn1IPExWxUcfb8 BkIbg_JwkgiyRW804Hhu BCXo0zdQlc4S7h_o_JxW _fGhMnSfYmaGrv7DvZ00 XIIs8ZOri3wm8Wnj9N_y">
                            <option selected="">Status</option>
                            <option value="pending">Pending</option>
                            <option value="repaid">Repaid</option>
                            <option value="active">Active</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="_IebywwKB6L2zG0BTy63">
                <table
                    class="t6gkcSf0Bt4MLItXvDJ_ upQp7iWehfaU8VTbfx_w c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                    <thead class="jtAJHOc7mn7b4IKRO59D gMXmdpOPfqG_3CKkL0VD sdSaZcRa4_We5kKaX4pf _1jTZ8KXRZul60S6czNi">
                        <tr>
                            <th scope="col" class="_wYiJGbRZyFZeCc8y7Sf">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="checkbox-all" type="checkbox"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="checkbox-all" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <span class="_DVAfiyo21kM68EUVzEQ">Expand/Collapse Row</span>
                            </th>
                            <th scope="col" class="Gfdanp5CT9GnXJoD8ykd RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                Asset</th>
                            <th scope="col" class="gxkoS_kmuhTujmGZUJQH RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                    Loan ID
                                    <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"></path>
                                    </svg>
                                </div>
                            </th>
                            <th scope="col" class="j3UE1CaTC_N8RV_0HyQy RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                    Collateral
                                    <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"></path>
                                    </svg>
                                </div>
                            </th>
                            <th scope="col" class="j3UE1CaTC_N8RV_0HyQy RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                    Amount
                                    <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"></path>
                                    </svg>
                                </div>
                            </th>
                            <th scope="col" class="j3UE1CaTC_N8RV_0HyQy RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                    Requested Date
                                    <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"></path>
                                    </svg>
                                </div>
                            </th>
                            <th scope="col" class="_IF8zl0DvfVT2PbmE5Q6 RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                    Due Date
                                    <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"></path>
                                    </svg>
                                </div>
                            </th>
                            <th scope="col" class="S_Xt0y_0vlp_PHSw_EQT RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                Status</th>
                        </tr>
                    </thead>
                    <tbody data-accordion="table-column">
                        @foreach ($loans as $loan)
                            <tr class="SA5DoMHfwOFtY4h_qzuM EpUSgjHdM6oyMXUiK_8_ bcsWqjK52oeyT6oeC2Az _7KA5gD55t2lxf9Jkj20 _JnjhZbEHpDJUKJAU8Cw iIDqXVKz6wdYnAVfRsN2"
                                id="table-column-header-{{ $loan->id }}"
                                data-accordion-target="#table-column-body-{{ $loan->id }}" aria-expanded="false"
                                aria-controls="table-column-body-{{ $loan->id }}">
                                <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                        <input id="checkbox-table-search-{{ $loan->id }}" type="checkbox"
                                            onclick="event.stopPropagation()"
                                            class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                        <label for="checkbox-table-search-{{ $loan->id }}"
                                            class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                    </div>
                                </td>
                                <td class="E9GV5sZJIbfO_GEQ_moc Lwvvap4319fmCogicbX3">
                                    <svg data-accordion-icon=""
                                        class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _VPh6kIywCMfXFfQLas4"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 9-7 7-7-7"></path>
                                    </svg>
                                </td>
                                <th scope="row"
                                    class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    <div
                                        class="X0NLFXe8iqRzqv1kWpUA TRRjvH1X7h8WsQXCuf4U mWvJQyBFgwNGEt0h7bSP yNvZ2JlUalNo5uPPv1sf _VPh6kIywCMfXFfQLas4">
                                        <img class="uLPch_bqyJDXwe5tynMV t6gkcSf0Bt4MLItXvDJ_ MpOyJ1SVShgPV9r3_gpl"
                                            src="{{ asset('assets/images/item/' . $loan->asset . '.svg') }}"
                                            alt="{{ $loan->ticker }} image">
                                        <img class="_SmdlCf6eUKB_V9S5IDj uLPch_bqyJDXwe5tynMV t6gkcSf0Bt4MLItXvDJ_ _ZcyPK_iUWAbkH9Xvqlu"
                                            src="{{ asset('assets/images/item/' . $loan->asset . '.svg') }}"
                                            alt="{{ $loan->ticker }} image">

                                    </div>
                                    {{ $loan->ticker }}
                                </th>
                                <td class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">{{ $loan->loan_id }}</td>
                                <td
                                    class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    {{ $loan->collateral_btc }}</td>
                                <td
                                    class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    ${{ number_format($loan->amount_usd) }}</td>
                                <td
                                    class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    {{ Carbon::parse($loan->start_date)->format('D M y') }}</td>
                                <td
                                    class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    {{ Carbon::parse($loan->end_date)->format('D M y') }}</td>
                                <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                    @switch($loan->status)
                                        @case("Completed")
                                           <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                                <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                                                Completed
                                            </span>
                                            @break
                                        @case("pending")
                                             <span class="inline-flex items-center bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-orange-900 dark:text-orange-300">
                                                <span class="w-2 h-2 me-1 bg-orange-500 rounded-full"></span>
                                                Pending
                                            </span>
                                            @break
                                        @case("Active Loan")
                                             <span class="inline-flex items-center bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">
                                                <span class="w-2 h-2 me-1 bg-blue-500 rounded-full"></span>
                                                Active
                                            </span>
                                            @break
                                        @default
                                            
                                    @endswitch
                                </td>
                            </tr>
                            <tr class="_SmdlCf6eUKB_V9S5IDj t6gkcSf0Bt4MLItXvDJ_ _74lpPUMEtHf6F0_fjLe _IebywwKB6L2zG0BTy63"
                                id="table-column-body-{{ $loan->id }}" aria-labelledby="table-column-header-0">
                                <td class="EpUSgjHdM6oyMXUiK_8_ _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00" colspan="9">
                                    <div
                                        class="hD0sTTDgbxakubcHVW2X xCPtuxM4_gihvpPwv9bX wsYi4cvaXxUsSa57vf_Z iHPddplqYvrN6qWgvntn">
                                        <div
                                            class="ahOqFrhzLjivRe8a1kX_ YRrCJSr_j5nopfm4duUc UjxN_6aH_Opce1DX_DRr Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs FJRldeiG2gFGZfuKgp88 _1jTZ8KXRZul60S6czNi Z9rb1sPR8ROEAmrDjgyK eLC5pzQO7Hj_w_JqY1Gg">
                                            <img src="{{ asset('assets/images/item/' . $loan->asset . '.svg') }}"
                                                alt="iMac Image"
                                                class="YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O MpOyJ1SVShgPV9r3_gpl">
                                            <img src="{{ asset('assets/images/item/' . $loan->asset . '.svg') }}"
                                                alt="iMac Image"
                                                class="_SmdlCf6eUKB_V9S5IDj uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O mMskBxHw5agMvHB_tDLE">
                                        </div>



                                    </div>
                                    <div>
                                        <h6
                                            class="TR_P65x9ie7j6uxFo_Cs d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Details</h6>
                                        <div
                                            class="ipqOECE6Cy9t7SqtLDw4 d3C8uAdJKNl1jzfE9ynq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">

                                            Your loan of <strong>${{ number_format($loan->amount_usd, 2) }}</strong>,
                                            secured with
                                            <strong>{{ $loan->collateral_btc }} {{ $loan->ticker }}</strong> as
                                            collateral, is currently
                                            <strong>{{ $loan->status }}</strong>. The loan carries an interest rate of
                                            <strong>{{ $loan->interest_rate }}%</strong> and a loan-to-value (LTV) ratio of
                                            <strong>{{ $loan->ltv }}%</strong>. It began on
                                            <strong>{{ Carbon::parse($loan->start_date)->format('D M Y') }}</strong>
                                            and is scheduled to end on
                                            <strong>{{ Carbon::parse($loan->end_date)->format('D M Y') }}</strong>. Your
                                            collateral is held in
                                            wallet address <strong>{{ $loan->collateral_wallet_address }}</strong> under
                                            loan reference
                                            <strong>{{ $loan->loan_id }}</strong>.


                                        </div>
                                    </div>
                                    <div
                                        class="XJih04pKHf8Cekga6Hj3 xCPtuxM4_gihvpPwv9bX wsYi4cvaXxUsSa57vf_Z iHPddplqYvrN6qWgvntn">

                                        <!-- Loan Amount -->
                                        <div
                                            class="ahOqFrhzLjivRe8a1kX_ YRrCJSr_j5nopfm4duUc e8VqoQNK0mbkRFDL3LMV sJNGKHxFYdN5Nzml5J2j mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs Lwvvap4319fmCogicbX3 _1jTZ8KXRZul60S6czNi">
                                            <h6
                                                class="TR_P65x9ie7j6uxFo_Cs d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe wgkxUJNDca22__ptDPRh">
                                                Loan Amount</h6>
                                            <div
                                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                ${{ number_format($loan->amount_usd, 2) }}
                                            </div>
                                        </div>

                                        <!-- Collateral -->
                                        <div
                                            class="ahOqFrhzLjivRe8a1kX_ YRrCJSr_j5nopfm4duUc e8VqoQNK0mbkRFDL3LMV sJNGKHxFYdN5Nzml5J2j mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs Lwvvap4319fmCogicbX3 _1jTZ8KXRZul60S6czNi">
                                            <h6
                                                class="TR_P65x9ie7j6uxFo_Cs d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe wgkxUJNDca22__ptDPRh">
                                                Collateral</h6>
                                            <div
                                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                {{ $loan->collateral_btc }} {{ $loan->ticker }}
                                            </div>
                                        </div>

                                        <!-- Status -->
                                      <div class="ahOqFrhzLjivRe8a1kX_ YRrCJSr_j5nopfm4duUc e8VqoQNK0mbkRFDL3LMV sJNGKHxFYdN5Nzml5J2j mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs Lwvvap4319fmCogicbX3 _1jTZ8KXRZul60S6czNi">
                                            <h6 class="TR_P65x9ie7j6uxFo_Cs d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe wgkxUJNDca22__ptDPRh">
                                                Status
                                            </h6>
                                            <div 
                                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y 
                                                    @if($loan->status === 'Active Loan') text-green-600 bg-green-100 px-3 py-1 rounded-full font-medium
                                                    @elseif($loan->status === 'Completed') text-blue-600 bg-blue-100 px-3 py-1 rounded-full font-medium
                                                    @elseif($loan->status === 'pending') text-orange-600 bg-orange-100 px-3 py-1 rounded-full font-medium
                                                    @else text-gray-600 bg-gray-100 px-3 py-1 rounded-full font-medium
                                                    @endif">
                                                {{ $loan->status }}
                                            </div>
                                        </div>


                                        <!-- Interest Rate -->
                                        <div
                                            class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs Lwvvap4319fmCogicbX3 _1jTZ8KXRZul60S6czNi">
                                            <h6
                                                class="TR_P65x9ie7j6uxFo_Cs d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe wgkxUJNDca22__ptDPRh">
                                                Interest Rate</h6>
                                            <div
                                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                {{ $loan->interest_rate }}%
                                            </div>
                                        </div>

                                        <!-- LTV -->
                                        <div
                                            class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs Lwvvap4319fmCogicbX3 _1jTZ8KXRZul60S6czNi">
                                            <h6
                                                class="TR_P65x9ie7j6uxFo_Cs d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe wgkxUJNDca22__ptDPRh">
                                                LTV</h6>
                                            <div
                                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                {{ $loan->ltv }}%
                                            </div>
                                        </div>

                                        <!-- Start & End Dates -->
                                        <div
                                            class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs Lwvvap4319fmCogicbX3 _1jTZ8KXRZul60S6czNi">
                                            <h6
                                                class="TR_P65x9ie7j6uxFo_Cs d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe wgkxUJNDca22__ptDPRh">
                                                Duration</h6>
                                            <div
                                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                {{ Carbon::parse($loan->start_date)->format('D, M j, Y') }} –
                                                {{ Carbon::parse($loan->end_date)->format('D, M j, Y') }}
                                            </div>
                                        </div>

                                        <!-- Wallet Address -->
                                        <div
                                            class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs Lwvvap4319fmCogicbX3 _1jTZ8KXRZul60S6czNi">
                                            <h6
                                                class="TR_P65x9ie7j6uxFo_Cs d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe wgkxUJNDca22__ptDPRh">
                                                Collateral Wallet</h6>
                                           <div
                                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y 
                                                    text-xs break-all text-gray-700 dark:text-gray-300">
                                                {{ $loan->collateral_wallet_address }}
                                            </div>

                                        </div>

                                        <!-- Loan ID -->
                                        <div
                                            class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs Lwvvap4319fmCogicbX3 _1jTZ8KXRZul60S6czNi">
                                            <h6
                                                class="TR_P65x9ie7j6uxFo_Cs d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe wgkxUJNDca22__ptDPRh">
                                                Loan Reference</h6>
                                            <div
                                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                {{ $loan->loan_id }}
                                            </div>
                                        </div>

                                    </div>

                                    <div
                                        class="XJih04pKHf8Cekga6Hj3 YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 hLiU_EU6hK5DGt8Nzo2B">
                                        <button id="editProductButton" data-modal-target="editProductModal"
                                            data-modal-toggle="editProductModal" type="button"
                                            class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                                            <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z"
                                                    clip-rule="evenodd"></path>
                                                <path fill-rule="evenodd"
                                                    d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Edit
                                        </button>
                                        <button id="readProductButton" data-modal-target="readProductModal"
                                            data-modal-toggle="readProductModal"     data-loan-id="{{ $loan->id }}"
                                            data-amount-usd="{{ $loan->amount_usd }}"
                                            data-collateral-btc="{{ $loan->collateral_btc }}"
                                            data-status="{{ $loan->status }}"
                                            data-asset = "{{ $loan->asset }}"
                                            data-interest-rate="{{ $loan->interest_rate }}"
                                            data-ltv="{{ $loan->ltv }}"
                                            data-collateral-wallet="{{ $loan->collateral_wallet_address }}"
                                            data-start-date="{{ $loan->start_date }}"
                                            data-end-date="{{ $loan->end_date }}"
                                            data-created-at="{{ $loan->created_at }}"
                                            data-updated-at="{{ $loan->updated_at }}"
                                            type="button"
                                            class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                                            Preview
                                        </button>
                                        <button id="deleteProductButton" data-modal-target="deleteProductModal"
                                            data-modal-toggle="deleteProductModal" type="button"
                                            class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F lZje8JvlESgmRAyE5oBT _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 _hwGprpWFg861uOaLs98 _dylIDxYTN3qgvD4U597 wGCv_lBIef6dPW_LgqPQ _MmSrNmxZCeZqDNT2Gd8 l3ymlaPuvQ5fdfBZIh_D g0psQAXAFirvUBcDyMSb">
                                            <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="_7_AEkSp_Gi6KH9ZW6st sJNGKHxFYdN5Nzml5J2j UYOSZJ1_pv3B5nt1ujCP RZmKBZs1E1eXw8vkE6jY pjVv_HvtzX_QkbymyvoG wlOthpHGZ8jLLRoA3tl2 _1jTZ8KXRZul60S6czNi rvdRhGyExrNYTA6euxsF xr7CqaTHxTvDOrwAH2SW tuEYdQFQ7IyWJ8f7A6Ss hhVyfLYO5HBNKAsXwK1v"
                aria-label="Table navigation">
                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _g4i6rO9Gl6jbqAE2AE4 gMXmdpOPfqG_3CKkL0VD">
                    <div>
                        <div class="Z3N7I2IDDsoXK6xJ1cSW PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Active Loans</div>
                        <div class="ezMFUVl744lvw6ht0lFe OyABRrnTV_kvHV7dJ0uE">$ 3,567,890</div>
                    </div>
                    <div>
                        <div class="Z3N7I2IDDsoXK6xJ1cSW PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Locked Collaterals
                        </div>
                        <div class="ezMFUVl744lvw6ht0lFe OyABRrnTV_kvHV7dJ0uE">$ 8,489,400</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create product modal -->
    <div id="createProductModal" tabindex="-1" aria-hidden="true"
        class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
        <div
            class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ M1YFStHQ2scEHZzvz7XX _wYiJGbRZyFZeCc8y7Sf">
            <!-- Modal content -->
            <div
                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
                <!-- Modal header -->
                <div
                    class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j zQeL_bQRwh9WGEnvS5ug N4SFnsqiVKm1oFHmSTyG">
                    <h3 class="y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Add
                        Product</h3>
                    <button type="button"
                        class="zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                        data-modal-toggle="createProductModal">
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
                <form action="#">
                    <div class="hD0sTTDgbxakubcHVW2X xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn AqVNvLG_H6VHhym2yKMp">
                        <div>
                            <label for="name"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Product
                                Name</label>
                            <input type="text" name="name" id="name"
                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                placeholder="Type product name" required="">
                        </div>
                        <div>
                            <label for="category"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Category</label>
                            <select id="category"
                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                                <option selected="">Select category</option>
                                <option value="TV">TV/Monitors</option>
                                <option value="PC">PC</option>
                                <option value="GA">Gaming/Console</option>
                                <option value="PH">Phones</option>
                            </select>
                        </div>
                        <div>
                            <label for="brand"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Brand</label>
                            <input type="text" name="brand" id="brand"
                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                placeholder="Product brand" required="">
                        </div>
                        <div>
                            <label for="price"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Price</label>
                            <input type="number" name="price" id="price"
                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                placeholder="$2999" required="">
                        </div>
                        <div
                            class="xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn wwofGIyK_H_z3Xjelq8G oeQxk1jPO5e5BeVww7ij JgR63iu8Hm6DShUiB5gP">
                            <div>
                                <label for="weight"
                                    class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Item
                                    weight (kg)</label>
                                <input type="number" name="weight" id="weight"
                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                    placeholder="12" required="">
                            </div>
                            <div>
                                <label for="length"
                                    class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Lenght
                                    (cm)</label>
                                <input type="number" name="length" id="length"
                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                    placeholder="105" required="">
                            </div>
                            <div>
                                <label for="breadth"
                                    class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Breadth
                                    (cm)</label>
                                <input type="number" name="breadth" id="breadth"
                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                    placeholder="15" required="">
                            </div>
                            <div>
                                <label for="width"
                                    class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Width
                                    (cm)</label>
                                <input type="number" name="width" id="width"
                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                    placeholder="23" required="">
                            </div>
                        </div>
                        <div class="wwofGIyK_H_z3Xjelq8G">
                            <label for="description"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Description</label>
                            <textarea id="description" rows="4"
                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                placeholder="Write product description here"></textarea>
                        </div>
                    </div>
                    <div class="hD0sTTDgbxakubcHVW2X UYOSZJ1_pv3B5nt1ujCP rvdRhGyExrNYTA6euxsF xr7CqaTHxTvDOrwAH2SW">
                        <div class="y7LTF_4HCOoAzmZm_v8k YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                            <input id="inline-checkbox" type="checkbox" value="" name="sellingType"
                                class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                            <label for="inline-checkbox"
                                class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">In-store
                                only</label>
                        </div>
                        <div class="y7LTF_4HCOoAzmZm_v8k YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                            <input id="inline-2-checkbox" type="checkbox" value="" name="sellingType"
                                class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                            <label for="inline-2-checkbox"
                                class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">Online
                                selling only</label>
                        </div>
                        <div class="y7LTF_4HCOoAzmZm_v8k YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                            <input checked="" id="inline-checked-checkbox" type="checkbox" value=""
                                name="sellingType"
                                class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                            <label for="inline-checked-checkbox"
                                class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">Both
                                in-store and online</label>
                        </div>
                    </div>
                    <div class="hD0sTTDgbxakubcHVW2X">
                        <span
                            class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Product
                            Images</span>
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
                                    <p class="gMXmdpOPfqG_3CKkL0VD PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">SVG, PNG,
                                        JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="_SmdlCf6eUKB_V9S5IDj">
                            </label>
                        </div>
                    </div>
                    <div
                        class="Q_jg_EPdNf9eDMn1mLI2 UYOSZJ1_pv3B5nt1ujCP rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL xr7CqaTHxTvDOrwAH2SW">
                        <button type="submit"
                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM icxWjIgUd9_dzYucx1nx">
                            Add product
                        </button>
                        <button
                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM icxWjIgUd9_dzYucx1nx">
                            <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12.512 8.72a2.46 2.46 0 0 1 3.479 0 2.461 2.461 0 0 1 0 3.479l-.004.005-1.094 1.08a.998.998 0 0 0-.194-.272l-3-3a1 1 0 0 0-.272-.193l1.085-1.1Zm-2.415 2.445L7.28 14.017a1 1 0 0 0-.289.702v2a1 1 0 0 0 1 1h2a1 1 0 0 0 .703-.288l2.851-2.816a.995.995 0 0 1-.26-.189l-3-3a.998.998 0 0 1-.19-.26Z"
                                    clip-rule="evenodd"></path>
                                <path fill-rule="evenodd"
                                    d="M7 3a1 1 0 0 1 1 1v1h3V4a1 1 0 1 1 2 0v1h3V4a1 1 0 1 1 2 0v1h1a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h1V4a1 1 0 0 1 1-1Zm10.67 8H19v8H5v-8h3.855l.53-.537a1 1 0 0 1 .87-.285c.097.015.233.13.277.087.045-.043-.073-.18-.09-.276a1 1 0 0 1 .274-.873l1.09-1.104a3.46 3.46 0 0 1 4.892 0l.001.002A3.461 3.461 0 0 1 17.67 11Z"
                                    clip-rule="evenodd"></path>
                            </svg>

                            Schedule
                        </button>
                        <button data-modal-toggle="createProductModal" type="button"
                            class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j icxWjIgUd9_dzYucx1nx">
                            Discard
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit product modal -->
    <div id="editProductModal" tabindex="-1" aria-hidden="true"
        class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
        <div
            class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ M1YFStHQ2scEHZzvz7XX _wYiJGbRZyFZeCc8y7Sf">
            <!-- Modal content -->
            <div
                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
                <!-- Modal header -->
                <div
                    class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j zQeL_bQRwh9WGEnvS5ug N4SFnsqiVKm1oFHmSTyG">
                    <h3 class="y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Update
                        Product</h3>
                    <button type="button"
                        class="zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                        data-modal-toggle="editProductModal">
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
                <form action="#">
                    <div class="hD0sTTDgbxakubcHVW2X xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn AqVNvLG_H6VHhym2yKMp">
                        <div>
                            <label for="name"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Product
                                Name</label>
                            <input type="text" name="name" id="name" value="Apple iPad 5th Gen Wi-Fi"
                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                placeholder="Ex. Apple iMac 27“" required="">
                        </div>
                        <div>
                            <label for="category"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Category</label>
                            <select id="category"
                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                                <option selected="">Electronics</option>
                                <option value="TV">TV/Monitors</option>
                                <option value="PC">PC</option>
                                <option value="GA">Gaming/Console</option>
                                <option value="PH">Phones</option>
                            </select>
                        </div>
                        <div>
                            <label for="brand"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Brand</label>
                            <input type="text" name="brand" id="brand" value="Tesla"
                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                placeholder="Ex. Apple" required="">
                        </div>
                        <div>
                            <label for="price"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Price</label>
                            <input type="number" name="price" id="price" value="259"
                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                placeholder="$2999" required="">
                        </div>
                        <div
                            class="xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn wwofGIyK_H_z3Xjelq8G oeQxk1jPO5e5BeVww7ij JgR63iu8Hm6DShUiB5gP">
                            <div>
                                <label for="weight"
                                    class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Item
                                    weight (kg)</label>
                                <input type="number" name="weight" id="weight" value="32"
                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                    placeholder="Ex. 12" required="">
                            </div>
                            <div>
                                <label for="length"
                                    class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Lenght
                                    (cm)</label>
                                <input type="number" name="length" id="length" value="126"
                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                    placeholder="Ex. 105" required="">
                            </div>
                            <div>
                                <label for="breadth"
                                    class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Breadth
                                    (cm)</label>
                                <input type="number" name="breadth" id="breadth" value="121"
                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                    placeholder="Ex. 15" required="">
                            </div>
                            <div>
                                <label for="width"
                                    class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Width
                                    (cm)</label>
                                <input type="number" name="width" id="width" value="953"
                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl g_BHforHBdFj0wG489Gm IBMq7Y_ATQyy_WCDKR_v Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                    placeholder="Ex. 23" required="">
                            </div>
                        </div>
                        <div class="wwofGIyK_H_z3Xjelq8G">
                            <label for="description"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Description</label>
                            <textarea id="description" rows="4"
                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                placeholder="Write your description...">Standard glass, 3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT with 8GB of GDDR6 memory, 256GB SSD storage, Gigabit Ethernet, Magic Mouse 2, Magic Keyboard - US
            </textarea>
                        </div>
                    </div>
                    <div class="hD0sTTDgbxakubcHVW2X UYOSZJ1_pv3B5nt1ujCP rvdRhGyExrNYTA6euxsF xr7CqaTHxTvDOrwAH2SW">
                        <div class="y7LTF_4HCOoAzmZm_v8k YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                            <input id="inline-checkbox" type="checkbox" value="" name="sellingType"
                                class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                            <label for="inline-checkbox"
                                class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">In-store
                                only</label>
                        </div>
                        <div class="y7LTF_4HCOoAzmZm_v8k YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                            <input id="inline-2-checkbox" type="checkbox" value="" name="sellingType"
                                class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                            <label for="inline-2-checkbox"
                                class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">Online
                                selling only</label>
                        </div>
                        <div class="y7LTF_4HCOoAzmZm_v8k YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                            <input checked="" id="inline-checked-checkbox" type="checkbox" value=""
                                name="sellingType"
                                class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                            <label for="inline-checked-checkbox"
                                class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">Both
                                in-store and online</label>
                        </div>
                    </div>
                    <div class="hD0sTTDgbxakubcHVW2X">
                        <span
                            class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Product
                            Images</span>
                        <div
                            class="hD0sTTDgbxakubcHVW2X xCPtuxM4_gihvpPwv9bX VWCEsSASYzme_Objbtiq iHPddplqYvrN6qWgvntn oeQxk1jPO5e5BeVww7ij">
                            <div
                                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs FJRldeiG2gFGZfuKgp88 jqg6J89cvxmDiFpnV56r Z9rb1sPR8ROEAmrDjgyK Spz6AFDEpqhQQN1s7nxP">
                                <img src="../../images/e-commerce/imac-components.svg" alt="iMac Image"
                                    class="YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O MpOyJ1SVShgPV9r3_gpl">
                                <img src="../../images/e-commerce/imac-components-dark.svg" alt="iMac Image"
                                    class="_SmdlCf6eUKB_V9S5IDj uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O mMskBxHw5agMvHB_tDLE">
                                <button type="button"
                                    class="pq2JRWtiWcwYnw3xueNl gKnEKm_BcFThLzSmVDS4 xZQLFRxOLUA41qbQg2D5 m_WzesDEb91pTPmX64rt SKjud_Ra_XogDwf66zl7 Sz97zU8r72z_pjE9zQnR lmohwTuKWCr80E4yZRkB">
                                    <svg aria-hidden="true" class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="_DVAfiyo21kM68EUVzEQ">Delete image</span>
                                </button>
                            </div>
                            <div
                                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs FJRldeiG2gFGZfuKgp88 jqg6J89cvxmDiFpnV56r Z9rb1sPR8ROEAmrDjgyK Spz6AFDEpqhQQN1s7nxP">
                                <img src="../../images/e-commerce/imac-front.svg" alt="iMac Image"
                                    class="YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O MpOyJ1SVShgPV9r3_gpl">
                                <img src="../../images/e-commerce/imac-front-dark.svg" alt="iMac Image"
                                    class="_SmdlCf6eUKB_V9S5IDj uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O mMskBxHw5agMvHB_tDLE">
                                <button type="button"
                                    class="pq2JRWtiWcwYnw3xueNl gKnEKm_BcFThLzSmVDS4 xZQLFRxOLUA41qbQg2D5 m_WzesDEb91pTPmX64rt SKjud_Ra_XogDwf66zl7 Sz97zU8r72z_pjE9zQnR lmohwTuKWCr80E4yZRkB">
                                    <svg aria-hidden="true" class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="_DVAfiyo21kM68EUVzEQ">Delete image</span>
                                </button>
                            </div>
                            <div
                                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs FJRldeiG2gFGZfuKgp88 jqg6J89cvxmDiFpnV56r Z9rb1sPR8ROEAmrDjgyK Spz6AFDEpqhQQN1s7nxP">
                                <img src="../../images/e-commerce/imac-side.svg" alt="iMac Image"
                                    class="YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O MpOyJ1SVShgPV9r3_gpl">
                                <img src="../../images/e-commerce/imac-side-dark.svg" alt="iMac Image"
                                    class="_SmdlCf6eUKB_V9S5IDj uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O mMskBxHw5agMvHB_tDLE">
                                <button type="button"
                                    class="pq2JRWtiWcwYnw3xueNl gKnEKm_BcFThLzSmVDS4 xZQLFRxOLUA41qbQg2D5 m_WzesDEb91pTPmX64rt SKjud_Ra_XogDwf66zl7 Sz97zU8r72z_pjE9zQnR lmohwTuKWCr80E4yZRkB">
                                    <svg aria-hidden="true" class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="_DVAfiyo21kM68EUVzEQ">Delete image</span>
                                </button>
                            </div>
                            <div
                                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs FJRldeiG2gFGZfuKgp88 jqg6J89cvxmDiFpnV56r Z9rb1sPR8ROEAmrDjgyK Spz6AFDEpqhQQN1s7nxP">
                                <img src="../../images/e-commerce/imac-back.svg" alt="iMac Image"
                                    class="YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O MpOyJ1SVShgPV9r3_gpl">
                                <img src="../../images/e-commerce/imac-back-dark.svg" alt="iMac Image"
                                    class="_SmdlCf6eUKB_V9S5IDj uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O mMskBxHw5agMvHB_tDLE">
                                <button type="button"
                                    class="pq2JRWtiWcwYnw3xueNl gKnEKm_BcFThLzSmVDS4 xZQLFRxOLUA41qbQg2D5 m_WzesDEb91pTPmX64rt SKjud_Ra_XogDwf66zl7 Sz97zU8r72z_pjE9zQnR lmohwTuKWCr80E4yZRkB">
                                    <svg aria-hidden="true" class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="_DVAfiyo21kM68EUVzEQ">Delete image</span>
                                </button>
                            </div>
                        </div>
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
                                    <p class="gMXmdpOPfqG_3CKkL0VD PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">SVG, PNG,
                                        JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="_SmdlCf6eUKB_V9S5IDj">
                            </label>
                        </div>
                    </div>
                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                        <button type="submit"
                            class="mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                            Update product
                        </button>
                        <button type="button"
                            class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F lZje8JvlESgmRAyE5oBT ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 _hwGprpWFg861uOaLs98 BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 wGCv_lBIef6dPW_LgqPQ _MmSrNmxZCeZqDNT2Gd8 l3ymlaPuvQ5fdfBZIh_D g0psQAXAFirvUBcDyMSb">
                            <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Delete
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Preview product modal -->
    <div id="readProductModal" tabindex="-1" aria-hidden="true"
        class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
        <div
            class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ M1YFStHQ2scEHZzvz7XX _wYiJGbRZyFZeCc8y7Sf">
            <!-- Modal content -->
            <div
                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
                <!-- Modal header -->
                <div
                    class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j zQeL_bQRwh9WGEnvS5ug N4SFnsqiVKm1oFHmSTyG">
                    <div class="y0nOgdpiqOUaFDbjAxwD __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE K6Ch4mkQ__sj8_TTGirS">
                        <h3 class="yM_AorRf2jSON3pDsdrz" id="modalCollateralName"></h3>
                        <p class="IOPhczRgtphv6NdNBDjj">$2999</p>
                    </div>
                    <div>
                        <button type="button"
                            class="_k0lTW0vvzboctTxDi2R mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                            data-modal-toggle="readProductModal">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"></path>
                            </svg>
                            <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
                        </button>
                    </div>
                </div>
                <div
                    class="hD0sTTDgbxakubcHVW2X xCPtuxM4_gihvpPwv9bX VWCEsSASYzme_Objbtiq iHPddplqYvrN6qWgvntn N4SFnsqiVKm1oFHmSTyG oeQxk1jPO5e5BeVww7ij">
                    <div
                        class="ahOqFrhzLjivRe8a1kX_ YRrCJSr_j5nopfm4duUc UjxN_6aH_Opce1DX_DRr Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs FJRldeiG2gFGZfuKgp88 _1jTZ8KXRZul60S6czNi Z9rb1sPR8ROEAmrDjgyK eLC5pzQO7Hj_w_JqY1Gg">
                        <img src="../../images/e-commerce/imac-front.svg" alt="iMac Image"
                            class="YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O MpOyJ1SVShgPV9r3_gpl">
                        <img src="../../images/e-commerce/imac-front-dark.svg" alt="iMac Image"
                            class="_SmdlCf6eUKB_V9S5IDj uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O mMskBxHw5agMvHB_tDLE">
                    </div>
                    <div
                        class="ahOqFrhzLjivRe8a1kX_ YRrCJSr_j5nopfm4duUc UjxN_6aH_Opce1DX_DRr Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs FJRldeiG2gFGZfuKgp88 _1jTZ8KXRZul60S6czNi Z9rb1sPR8ROEAmrDjgyK eLC5pzQO7Hj_w_JqY1Gg">
                        <img src="../../images/e-commerce/imac-components.svg" alt="iMac Image"
                            class="YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O MpOyJ1SVShgPV9r3_gpl">
                        <img src="../../images/e-commerce/imac-components-dark.svg" alt="iMac Image"
                            class="_SmdlCf6eUKB_V9S5IDj uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O mMskBxHw5agMvHB_tDLE">
                    </div>
                    <div
                        class="ahOqFrhzLjivRe8a1kX_ YRrCJSr_j5nopfm4duUc UjxN_6aH_Opce1DX_DRr Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs FJRldeiG2gFGZfuKgp88 _1jTZ8KXRZul60S6czNi Z9rb1sPR8ROEAmrDjgyK eLC5pzQO7Hj_w_JqY1Gg">
                        <img src="../../images/e-commerce/imac-side.svg" alt="iMac Image"
                            class="YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O MpOyJ1SVShgPV9r3_gpl">
                        <img src="../../images/e-commerce/imac-side-dark.svg" alt="iMac Image"
                            class="_SmdlCf6eUKB_V9S5IDj uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O mMskBxHw5agMvHB_tDLE">
                    </div>
                    <div
                        class="ahOqFrhzLjivRe8a1kX_ YRrCJSr_j5nopfm4duUc UjxN_6aH_Opce1DX_DRr Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs FJRldeiG2gFGZfuKgp88 _1jTZ8KXRZul60S6czNi Z9rb1sPR8ROEAmrDjgyK eLC5pzQO7Hj_w_JqY1Gg">
                        <img src="../../images/e-commerce/imac-back.svg" alt="iMac Image"
                            class="YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O MpOyJ1SVShgPV9r3_gpl">
                        <img src="../../images/e-commerce/imac-back-dark.svg" alt="iMac Image"
                            class="_SmdlCf6eUKB_V9S5IDj uLPch_bqyJDXwe5tynMV _QV5Y5YHkBJZSFfAsN1O mMskBxHw5agMvHB_tDLE">
                    </div>
                </div>
                <dl class="N4SFnsqiVKm1oFHmSTyG">
                    <dt
                        class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        Details</dt>
                    <dd class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y N4SFnsqiVKm1oFHmSTyG">
                        Standard glass ,3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up to 5.0GHz,
                        16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT with 8GB of GDDR6 memory, 256GB SSD storage, Gigabit
                        Ethernet, Magic Mouse 2, Magic
                        Keyboard - US.
                    </dd>
                    <dt
                        class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        Colors</dt>
                    <dd
                        class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                        <div class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B RpVwy4sO7Asb86CncKJ_ MV9zT9ryvnSIq7N5Bg43">
                        </div>
                        <div class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B RpVwy4sO7Asb86CncKJ_ _ai_GV4uaMiJAsfw6jLx">
                        </div>
                        <div class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B RpVwy4sO7Asb86CncKJ_ HstV_RZX_OUMWsk6ZYSX">
                        </div>
                        <div class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B RpVwy4sO7Asb86CncKJ_ Qs9y6t4FYPI5qfUOhbzV">
                        </div>
                        <div class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B RpVwy4sO7Asb86CncKJ_ XGwY4z0N0g4uV1zztW0n">
                        </div>
                        <div class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B RpVwy4sO7Asb86CncKJ_ wDIA7qVBxHRDJpsbpoPP">
                        </div>
                    </dd>
                </dl>
                <dl
                    class="hD0sTTDgbxakubcHVW2X xCPtuxM4_gihvpPwv9bX Q4KJqTa5GBaAJ29_u66A iHPddplqYvrN6qWgvntn N4SFnsqiVKm1oFHmSTyG pxuUM38dahO9GXk2BLNk">
                    <div class="mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs Lwvvap4319fmCogicbX3 jqg6J89cvxmDiFpnV56r">
                        <dt
                            class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                            Sold by</dt>
                        <dd class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Flowbite</dd>
                    </div>
                    <div class="mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs Lwvvap4319fmCogicbX3 jqg6J89cvxmDiFpnV56r">
                        <dt
                            class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                            Ships from</dt>
                        <dd class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Flowbite</dd>
                    </div>
                    <div class="mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs Lwvvap4319fmCogicbX3 jqg6J89cvxmDiFpnV56r">
                        <dt
                            class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                            Product State</dt>
                        <dd class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                            <span
                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI YccXYy5sNIz6FJlLxw0D St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe mbOxN7eW74XygTKQC_r3 jm5g5pmdFIDbcABTuYVY XljoJijQclZKM_xEDxnV">
                                <svg aria-hidden="true"
                                    class="_x10ClrjYfqGxZTMmpBl bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                New
                            </span>
                        </dd>
                    </div>
                    <div class="mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs Lwvvap4319fmCogicbX3 jqg6J89cvxmDiFpnV56r">
                        <dt
                            class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                            Shipping</dt>
                        <dd class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                            <svg class="_x10ClrjYfqGxZTMmpBl OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 2a8 8 0 0 1 6.6 12.6l-.1.1-.6.7-5.1 6.2a1 1 0 0 1-1.6 0L6 15.3l-.3-.4-.2-.2v-.2A8 8 0 0 1 11.8 2Zm3 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Worldwide
                        </dd>
                    </div>
                    <div class="mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs Lwvvap4319fmCogicbX3 jqg6J89cvxmDiFpnV56r">
                        <dt
                            class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                            Dimensions (cm)</dt>
                        <dd class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">105 x 15 x 23</dd>
                    </div>
                    <div class="mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs Lwvvap4319fmCogicbX3 jqg6J89cvxmDiFpnV56r">
                        <dt
                            class="TR_P65x9ie7j6uxFo_Cs yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                            Item weight</dt>
                        <dd class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">12kg</dd>
                    </div>
                </dl>
                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 hLiU_EU6hK5DGt8Nzo2B SQf297smyJVNzzOO3iQL">
                    <button type="button"
                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                        <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                clip-rule="evenodd"></path>
                            <path fill-rule="evenodd"
                                d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Edit
                    </button>
                    <button type="button"
                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F lZje8JvlESgmRAyE5oBT _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 _hwGprpWFg861uOaLs98 BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 wGCv_lBIef6dPW_LgqPQ _MmSrNmxZCeZqDNT2Gd8 l3ymlaPuvQ5fdfBZIh_D g0psQAXAFirvUBcDyMSb">
                        <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                clip-rule="evenodd"></path>
                        </svg>

                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete product modal -->
    <div id="deleteProductModal" tabindex="-1" aria-hidden="true"
        class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
        <div
            class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ uv4ZnT9l0TZhdd_Ia_EC _wYiJGbRZyFZeCc8y7Sf">
            <!-- Modal content -->
            <div
                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
                <button type="button"
                    class="pq2JRWtiWcwYnw3xueNl MsWprSx3_qpThIj5XLSY tUrUahyB6juka_LhwvrY zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                    data-modal-toggle="deleteProductModal">
                    <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
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
                <p class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">You are about to delete the
                    following product, this cannot be undone:</p>
                <ul role="list"
                    class="hD0sTTDgbxakubcHVW2X TVHgSaRh3muGJct_epr9 upQp7iWehfaU8VTbfx_w PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y N4SFnsqiVKm1oFHmSTyG">
                    <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj">
                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _VPh6kIywCMfXFfQLas4 _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm9.4-5.5a1 1 0 1 0 0 2 1 1 0 1 0 0-2ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4c0-.6-.4-1-1-1h-2Z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Apple iMac 27”</span>
                    </li>
                </ul>
                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                    <button data-modal-toggle="deleteProductModal" type="button"
                        class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                        No, cancel
                    </button>
                    <button type="submit"
                        class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F lZje8JvlESgmRAyE5oBT _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 _hwGprpWFg861uOaLs98 _dylIDxYTN3qgvD4U597 wGCv_lBIef6dPW_LgqPQ _MmSrNmxZCeZqDNT2Gd8 l3ymlaPuvQ5fdfBZIh_D g0psQAXAFirvUBcDyMSb">
                        <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Yes, delete
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete all products modal -->
    <div id="deleteProductsModal" tabindex="-1" aria-hidden="true"
        class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
        <div
            class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ uv4ZnT9l0TZhdd_Ia_EC _wYiJGbRZyFZeCc8y7Sf">
            <!-- Modal content -->
            <div
                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
                <button type="button"
                    class="pq2JRWtiWcwYnw3xueNl MsWprSx3_qpThIj5XLSY tUrUahyB6juka_LhwvrY zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                    data-modal-toggle="deleteProductsModal">
                    <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
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
                <p class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">You are about to delete the
                    following 3 products, this cannot be undone:</p>
                <ul role="list"
                    class="hD0sTTDgbxakubcHVW2X TVHgSaRh3muGJct_epr9 upQp7iWehfaU8VTbfx_w PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y N4SFnsqiVKm1oFHmSTyG">
                    <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj">
                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _VPh6kIywCMfXFfQLas4 _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Apple iMac 27”</span>
                    </li>
                    <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj">
                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _VPh6kIywCMfXFfQLas4 _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Magic Keyboard</span>
                    </li>
                    <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj">
                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _VPh6kIywCMfXFfQLas4 _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Xbox Series X</span>
                    </li>
                </ul>
                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                    <button data-modal-toggle="deleteProductsModal" type="button"
                        class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                        No, cancel
                    </button>
                    <button type="submit"
                        class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F lZje8JvlESgmRAyE5oBT _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 _hwGprpWFg861uOaLs98 _dylIDxYTN3qgvD4U597 wGCv_lBIef6dPW_LgqPQ _MmSrNmxZCeZqDNT2Gd8 l3ymlaPuvQ5fdfBZIh_D g0psQAXAFirvUBcDyMSb">
                        <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Yes, delete
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Archive product modal -->
    <div id="archiveModal" tabindex="-1" aria-hidden="true"
        class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
        <div
            class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ uv4ZnT9l0TZhdd_Ia_EC _wYiJGbRZyFZeCc8y7Sf">
            <!-- Modal content -->
            <div
                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
                <button type="button"
                    class="pq2JRWtiWcwYnw3xueNl MsWprSx3_qpThIj5XLSY tUrUahyB6juka_LhwvrY zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                    data-modal-toggle="archiveModal">
                    <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18 17.94 6M18 18 6.06 6"></path>
                    </svg>
                    <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
                </button>
                <svg class="YajDCE_nRj_FDIevNpsd _Jv5sTeKkzwrFxBMYRT9 TZANVyZaogC2vtqxZ7oo Rr_S4jo1he4sYSgq5LE_ _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z"
                        clip-rule="evenodd"></path>
                    <path d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z"></path>
                </svg>
                <p class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 EJIoL6514Ry8r7nh011L">Are you sure you want to archive
                    these items?</p>
                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU d4louhNic5PFgJGRKqn6">
                    <button data-modal-toggle="archiveModal" type="button"
                        class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                        No, cancel
                    </button>
                    <button type="submit"
                        class="mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                        Yes, I do
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    // Select all preview buttons
    const previewButtons = document.querySelectorAll('.previewLoanBtn');

    previewButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Read loan data
            const amountUsd = this.dataset.amountUsd;
            const status = this.dataset.status;
            const collateralBtc = this.dataset.collateralBtc;
            const interestRate = this.dataset.interestRate;
            const ltv = this.dataset.ltv;
            const wallet = this.dataset.collateralWallet;
            const startDate = this.dataset.startDate;
            const endDate = this.dataset.endDate;
            const collateralName = this.dataset.asset

            // Populate modal fields
            document.getElementById('modalLoanAmount').innerText = `Loan Amount: $${amountUsd}`;
            document.getElementById('modalLoanStatusText').innerText = status;
            document.getElementById('modalCollateralBtc').innerText = `${collateralBtc} BTC`;
            document.getElementById('modalCollateralName').innerHTML = `${collateralName}`;
            document.getElementById('modalInterestRate').innerText = `${interestRate}%`;
            document.getElementById('modalLtv').innerText = `${ltv}%`;
            document.getElementById('modalCollateralWallet').innerText = wallet;
            document.getElementById('modalStartDate').innerText = startDate;
            document.getElementById('modalEndDate').innerText = endDate;

            // Optional: change color of the status dynamically
            const statusElement = document.getElementById('modalLoanStatusText');
            statusElement.className = ''; // reset classes
            if (status === 'Active Loan') statusElement.classList.add('text-green-600');
            else if (status === 'Completed') statusElement.classList.add('text-blue-600');
            else if (status === 'pending') statusElement.classList.add('text-orange-500');
        });
    });
});
</script>

@endsection
