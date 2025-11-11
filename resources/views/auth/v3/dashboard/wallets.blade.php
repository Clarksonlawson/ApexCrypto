@extends('auth.v3.layouts.dashboard')
@section('title', 'Wallets | User Dashboard')

@php
   use Carbon\Carbon;
@endphp

@section('content')
    <div class="xCPtuxM4_gihvpPwv9bX wDF2ls8Apmy3KGiCbxI_ iHPddplqYvrN6qWgvntn _Ybd3WwuTVljUT4vEaM3 h8KYXnua2NT4kTVzieom">
        <div class="ahOqFrhzLjivRe8a1kX_ EWLTGduHCjFnjN6tLCXV">
            <div class="RZmKBZs1E1eXw8vkE6jY p_2EXc_a2sDA_h41l8QU">
                <div
                    class="YRrCJSr_j5nopfm4duUc e8VqoQNK0mbkRFDL3LMV UYOSZJ1_pv3B5nt1ujCP EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V pjVv_HvtzX_QkbymyvoG _JnjhZbEHpDJUKJAU8Cw MX_rT_HfQMh3dDrqOQ_i _Z3zYoo8SAGYZcCAB_mb PkbUjvbha500DQzbEAMM SQf297smyJVNzzOO3iQL xr7CqaTHxTvDOrwAH2SW">
                    <div>
                        <nav class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc" aria-label="Breadcrumb">
                            <ol
                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 R0X5VtiZIoV7IjvrxBJ_ hPWJir4VhLurUkdR8iyI UiRKvjjl_rZRhuc5tGul">
                                <li class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                    <a href="{{ route('user.dashboard') }}"
                                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe rYHHksRBEMl_guI3q0UQ YXx9oZ15oLXSCG32YPBT XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
                                        <svg class="E_3B4mrFSil75QXvKTiK _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 24 24">
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
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m9 5 7 7-7 7"></path>
                                        </svg>
                                        <a href="#"
                                            class="UwVmaTmxbsmvnpCB2B1K c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe rYHHksRBEMl_guI3q0UQ YXx9oZ15oLXSCG32YPBT XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW _9RDyySiJ2_PuvLFkRD4">Wallets</a>
                                    </div>
                                </li>
                                <li aria-current="page">
                                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                        <svg class="H9gtVTm5_rPWftCfV_9B _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _JmTNv5EiHqK2A1jcQSf _oMLPqquxUE25nEAshY6"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m9 5 7 7-7 7"></path>
                                        </svg>
                                        <span
                                            class="UwVmaTmxbsmvnpCB2B1K c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _9RDyySiJ2_PuvLFkRD4">View
                                            wallets</span>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                        <div class="YRrCJSr_j5nopfm4duUc _74lpPUMEtHf6F0_fjLe Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj">
                            <h5 class="vyo_A8gnQD1QWDPglr3h yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                My Wallet addresses</h5>
                        </div>
                    </div>
                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">

                        <button
                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln XnjTGHn8t8AXjRaBTrxB g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YCF9WtZQaPLXowM_Li_g YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T jL6XA6KB3jDxAj4xiHrn d8_fVOcgDmbt7UdpfeLK TuxenyFcQCXxRKLGv2AH WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM icxWjIgUd9_dzYucx1nx"
                            type="button" id="generateKeyButton" data-modal-target="generateKeyModal"
                            data-modal-toggle="generateKeyModal">
                            Generate Wallet
                        </button>
                    </div>
                </div>
                <div
                    class="YRrCJSr_j5nopfm4duUc e8VqoQNK0mbkRFDL3LMV RL7uPEoqj_KRubJO6Kau sJNGKHxFYdN5Nzml5J2j tI6ZVpHcCWxY_MKHSQWC _9igzqn_6D3Qq5Hcwkfk MX_rT_HfQMh3dDrqOQ_i _Z3zYoo8SAGYZcCAB_mb xr7CqaTHxTvDOrwAH2SW">
                    <div
                        class="_Vb9igHms0hI1PQcvp_S Q_jg_EPdNf9eDMn1mLI2 TVHgSaRh3muGJct_epr9 rvdRhGyExrNYTA6euxsF xr7CqaTHxTvDOrwAH2SW">
                        <div class="_VPh6kIywCMfXFfQLas4 yM_AorRf2jSON3pDsdrz OyABRrnTV_kvHV7dJ0uE">Filter by:</div>
                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                            <select id="compare"
                                class="y7LTF_4HCOoAzmZm_v8k _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ gxkoS_kmuhTujmGZUJQH mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D St_AVDyTHE88JaawJoRQ b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput lWtNTyN5bfBBfqOtYIWS F34pkf_DAj2DlPtfAEMV">
                                <option selected="">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            <div class="_Zt0QWNoskeJIuWJ94UW _SmdlCf6eUKB_V9S5IDj t6gkcSf0Bt4MLItXvDJ_ e8VqoQNK0mbkRFDL3LMV W5n_NSFnC6y2nqoHw_5x fzhbbDQ686T8arwvi_bJ _f8XqZvYJf7DNydLmFyI tuEYdQFQ7IyWJ8f7A6Ss kkyzeoEWqjLTYuEmWy7u"
                                role="group">
                                <button type="button"
                                    class="BmVGY2eZunfmu8H_7zRv pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN D3q29tR3eXeWb2UtPk7z _q0p_O8QLU1paqtuqmI2 G6075Odr4apuR0MjuD_u Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW _AiPxyWvf0zEs0r_0Gjt KpCMWe32PQyrSFbZVput ie2KVc9tDXRUzhv3a1P2 ndY15FuZ_VeSjaSASyDB">
                                    Active
                                </button>
                                <button type="button"
                                    class="_cNUzK7IcaHl6sHsG1zK qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN D3q29tR3eXeWb2UtPk7z _q0p_O8QLU1paqtuqmI2 G6075Odr4apuR0MjuD_u Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW _AiPxyWvf0zEs0r_0Gjt KpCMWe32PQyrSFbZVput HZBMvb_ZhaPwVq2T3y0j ad6cg6dcBnBZrdgCeJmh iLFrZ2vR2iA3nSGHCLl9">
                                    Inactive
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_IebywwKB6L2zG0BTy63 ahOqFrhzLjivRe8a1kX_">
                <table
                    class="t6gkcSf0Bt4MLItXvDJ_ upQp7iWehfaU8VTbfx_w c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                    <thead
                        class="jtAJHOc7mn7b4IKRO59D gMXmdpOPfqG_3CKkL0VD sdSaZcRa4_We5kKaX4pf PeR2JZ9BZHYIH8Ea3F36 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y">
                        <tr>
                            <th scope="col" class="_wYiJGbRZyFZeCc8y7Sf">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="checkbox-all" type="checkbox"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="checkbox-all" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                </div>
                            </th>
                            <th scope="col"
                                class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz BHrWGjM1Iab_fAz0_91H">
                                Asset</th>
                            <th scope="col"
                                class="qUITVHXgl93XFxlbZW4J RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz BHrWGjM1Iab_fAz0_91H">
                                Wallet</th>
                            <th scope="col"
                                class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz BHrWGjM1Iab_fAz0_91H">
                                Created date</th>
                            <th scope="col"
                                class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                Status</th>
                            <th scope="col"
                                class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz BHrWGjM1Iab_fAz0_91H">
                                Disable/Enable</th>
                            <th scope="col" class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                <span class="_DVAfiyo21kM68EUVzEQ">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                       @if ($wallets->count() >0)
                            @foreach ($wallets as $wallet)
                            <tr class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _JnjhZbEHpDJUKJAU8Cw iIDqXVKz6wdYnAVfRsN2">
                                <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                        <input id="checkbox-table-search-{{$wallet->id}}" type="checkbox"
                                            onclick="event.stopPropagation()"
                                            class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                        <label for="checkbox-table-search-{{$wallet->id}}" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    {{$wallet->network}}</th>
                                <td class="RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j">
                                    <div class="ahOqFrhzLjivRe8a1kX_">
                                        <label for="{{$wallet->network}}-key-copy-button" class="_DVAfiyo21kM68EUVzEQ">Label</label>
                                        <input id="{{$wallet->network}}-key-copy-button" type="text"
                                            class="_P4crYcwEj3d10LO5o8N _Vb9igHms0hI1PQcvp_S f4dkHzS6f8LJK7W623wE mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                            value="{{ substr($wallet->wallet_address, 0, 15) . '.................' . substr($wallet->wallet_address, -10) }}" disabled="" readonly="">
                                        <button data-copy-to-clipboard-target="{{$wallet->network}}-key-copy-button"
                                            data-tooltip-target="tooltip-copy-{{$wallet->network}}-key-button"
                                            class="pq2JRWtiWcwYnw3xueNl _mRT_WxP2Vc4YqQcGYE9 nhfvvbi6JW4lJvpwWSHo _k0lTW0vvzboctTxDi2R HGu6bGe9TcraKm5jt2Hm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y iIDqXVKz6wdYnAVfRsN2">
                                            <span data-tooltip-default-icon="">
                                                <svg class="OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 18 20">
                                                    <path
                                                        d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span data-tooltip-success-icon=""
                                                class="_k0lTW0vvzboctTxDi2R _SmdlCf6eUKB_V9S5IDj Q_jg_EPdNf9eDMn1mLI2">
                                                <svg class="OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi OQflBVxALl1Ntbyc2J2_ fZf6W_ZtzEh6EEqmWMA9"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 16 12">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M1 5.917 5.724 10.5 15 1.5"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        <div id="tooltip-copy-{{$wallet->network}}-key-button" role="tooltip"
                                            class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r">
                                            <span data-tooltip-default-message="">Copy to clipboard</span>
                                            <span data-tooltip-success-message=""
                                                class="_SmdlCf6eUKB_V9S5IDj">Copied!</span>
                                            <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                    {{Carbon::parse($wallet->updated_at)->format('M d, Y')}}</td>
                                <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j">

                                    @switch($wallet->status)
                                        @case("active")
                                            <span
                                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI YccXYy5sNIz6FJlLxw0D St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe mbOxN7eW74XygTKQC_r3 V9HgZms3_2W5sanRatci Uq09bvia_7yL7hYv2uSO">
                                        <svg class="_j7jrBV2UWRXe__bk9uf bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m5 12 4.7 4.5 9.3-9"></path>
                                        </svg>
                                        Active
                                    </span>
                                            @break
                                        @case("destroyed")
                                             <span class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI _9dH7mrOkzM4RTmidHTs St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe kAEXvwFGb849z6BUdJjG jqg6J89cvxmDiFpnV56r EJIoL6514Ry8r7nh011L">
                                                <svg class="_j7jrBV2UWRXe__bk9uf bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 14c-.5-.6-.9-1.3-1-2 0-1 4-6 9-6m7.6 3.8A5 5 0 0 1 21 12c0 1-3 6-9 6h-1m-6 1L19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                                </svg>
                                                Inactive
                                            </span>
                                            @break
                                        @default
                                            
                                    @endswitch
                                    
                                </td>
                                <td
                                    class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    <label
                                        class="ahOqFrhzLjivRe8a1kX_ _k0lTW0vvzboctTxDi2R SA5DoMHfwOFtY4h_qzuM Q_jg_EPdNf9eDMn1mLI2">
                                        <input type="checkbox" value=""
                                            class="aOpxpduJhFdYT26YEhfy _DVAfiyo21kM68EUVzEQ" name="promote">
                                        <div
                                            class="aOpxpduJhFdYT26YEhfy MnxxlQlR1H0xJuMEE8Yr Rr_S4jo1he4sYSgq5LE_ RpVwy4sO7Asb86CncKJ_ WwS1mve_UI16RedcVHEs S_YYrpbZltCzhBNM_SJm E1qOVwKn20GoIa4DLw0e pbUwk6YCM27poVS3pH9J _ZAH00UefAHB41FBmf9x hUGJ42LbOAuwsGFln4hc B0lYQ0_9vlBf0CZnE9ef UnITYitJpD1sMNddmIZ9 mVEwBMPbZ9_uWPD1J6FL _o9AusRI8qWv3B0gIXh4 _6REaLtGbw9GOx78YcIB mckNmP7av8zMKc516vkZ _LFgmR5pGKzbcmZZxpN3 k0G8B6nnxyBP2SOsOaeZ K9lI4s8CJ1eWRBhVkBu_ _zhHKgVWUHLt2EvhvLe2 nmPW5_vZUJWfg188gd6P Mmx5lX7HVdrWCgh3EpTP yVD6UHmZ_BcStq0KYFeK wFpbzujv4k1ue7OGEHIk">
                                        </div>
                                    </label>
                                </td>
                                <td
                                    class="EU43bH15DCmsqkGyVBGj BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj">
                                        <button type="button"
                                            class="_k0lTW0vvzboctTxDi2R mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                                            Regenerate
                                        </button>
                                        <button
                                            class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j"
                                            type="button" id="editKeyButton" data-modal-target="editKeyModal"
                                            data-modal-toggle="editKeyModal">
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
                                        <button type="button" id="deleteButton" data-modal-target="deleteModal"
                                            data-modal-toggle="deleteModal"
                                            class="_k0lTW0vvzboctTxDi2R mveJTCIb2WII7J4sY22F lZje8JvlESgmRAyE5oBT _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 _hwGprpWFg861uOaLs98 BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 wGCv_lBIef6dPW_LgqPQ _MmSrNmxZCeZqDNT2Gd8 l3ymlaPuvQ5fdfBZIh_D g0psQAXAFirvUBcDyMSb">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                       @else
                            <li class="EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V pjVv_HvtzX_QkbymyvoG _fGhMnSfYmaGrv7DvZ00">
                            <div
                                class="Q_jg_EPdNf9eDMn1mLI2 tI6ZVpHcCWxY_MKHSQWC rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL xr7CqaTHxTvDOrwAH2SW">
                                <div
                                    class="vfNYjqjYMlN1XskEucCt yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE text-center w-full">
                                    No wallets found.
                                </div>
                            </div>
                        </li>
                       @endif

                    </tbody>
                </table>
               @if ($wallets->hasPages())
                    <nav class="YRrCJSr_j5nopfm4duUc e8VqoQNK0mbkRFDL3LMV _7_AEkSp_Gi6KH9ZW6st sJNGKHxFYdN5Nzml5J2j tI6ZVpHcCWxY_MKHSQWC _wYiJGbRZyFZeCc8y7Sf tuEYdQFQ7IyWJ8f7A6Ss hhVyfLYO5HBNKAsXwK1v eVEHKvmQTgrcFfcnBoRJ"
                        aria-label="Table navigation">

                        <span class="c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                            Showing
                            <span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                {{ $wallets->firstItem() }}-{{ $wallets->lastItem() }}
                            </span>
                            of
                            <span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                {{ $wallets->total() }}
                            </span>
                        </span>

                        <ul class="_k0lTW0vvzboctTxDi2R RL7uPEoqj_KRubJO6Kau EVsptO6LmMeSj8z3lntE">
                            {{-- Previous Page Link --}}
                            @if ($wallets->onFirstPage())
                                <li><span class="opacity-50 cursor-not-allowed">Previous</span></li>
                            @else
                                <li><a href="{{ $wallets->previousPageUrl() }}" class="CoXBDf_LlsdMbiNfGE67">Previous</a></li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($wallets->getUrlRange(1, $wallets->lastPage()) as $page => $url)
                                @if ($page == $wallets->currentPage())
                                    <li><span class="QhmQ_v3mmDFIP9VaVOfb">{{ $page }}</span></li>
                                @else
                                    <li><a href="{{ $url }}" class="YRrCJSr_j5nopfm4duUc">{{ $page }}</a></li>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($wallets->hasMorePages())
                                <li><a href="{{ $wallets->nextPageUrl() }}" class="CoXBDf_LlsdMbiNfGE67">Next</a></li>
                            @else
                                <li><span class="opacity-50 cursor-not-allowed">Next</span></li>
                            @endif
                        </ul>
                    </nav>
                @endif

            </div>
        </div>
    </div>

    <!-- Generate key modal -->
    <div id="generateKeyModal" tabindex="-1" aria-hidden="true"
        class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
        <div
            class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Rv1FIuLTiXLx6VXsBFe9 _wYiJGbRZyFZeCc8y7Sf _A7UzpfaPjxIxb83hMxZ">
            <!-- Modal content -->
            <div
                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi">
                <div
                    class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j RZmKBZs1E1eXw8vkE6jY _9igzqn_6D3Qq5Hcwkfk _Ura23Qklq9Ri0XExDX2">
                    <h3
                        class="y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        Generate API key</h3>
                    <button type="button"
                        class="pq2JRWtiWcwYnw3xueNl MsWprSx3_qpThIj5XLSY tUrUahyB6juka_LhwvrY zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                        data-modal-toggle="generateKeyModal">
                        <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 18 6m0 12L6 6"></path>
                        </svg>
                        <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
                    </button>
                </div>
                <div class="RZmKBZs1E1eXw8vkE6jY pjVv_HvtzX_QkbymyvoG _Ura23Qklq9Ri0XExDX2 W3Yh3KsdL_8XFfLxp6zh">
                    <p class="c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _fJoMOe9mwdGl9PfDHMr">To
                        connect securely to Flowbite Web Services, your tool or application needs an API key with permission
                        to access resources such as Flowbite S3 bucket.</p>
                    <form action="#">
                        <div class="aJF41JQLhtfw_MCGt5Th">
                            <label for="app-name-input"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Name
                                your application</label>
                            <input type="text" id="app-name-input"
                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                required="" placeholder="Application name">
                            <p id="helper-app-name"
                                class="gC_jEY75u_oxfOOKnLpH c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                Providing the application name will help you identify you API key later.</p>
                        </div>
                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                            <button type="button" data-modal-toggle="generateKeyModal"
                                class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                                Cancel
                            </button>
                            <button type="submit"
                                class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln XnjTGHn8t8AXjRaBTrxB g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T jL6XA6KB3jDxAj4xiHrn d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                                Generate API key
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit key modal -->
    <div id="editKeyModal" tabindex="-1" aria-hidden="true"
        class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
        <div
            class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Rv1FIuLTiXLx6VXsBFe9 _wYiJGbRZyFZeCc8y7Sf _A7UzpfaPjxIxb83hMxZ">
            <!-- Modal content -->
            <div
                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi">
                <div
                    class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j RZmKBZs1E1eXw8vkE6jY _9igzqn_6D3Qq5Hcwkfk _Ura23Qklq9Ri0XExDX2">
                    <h3
                        class="y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        Edit API key</h3>
                    <button type="button"
                        class="pq2JRWtiWcwYnw3xueNl MsWprSx3_qpThIj5XLSY tUrUahyB6juka_LhwvrY zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                        data-modal-toggle="editKeyModal">
                        <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 18 6m0 12L6 6"></path>
                        </svg>
                        <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
                    </button>
                </div>
                <div class="RZmKBZs1E1eXw8vkE6jY pjVv_HvtzX_QkbymyvoG _Ura23Qklq9Ri0XExDX2 W3Yh3KsdL_8XFfLxp6zh">
                    <p class="c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _fJoMOe9mwdGl9PfDHMr">To
                        connect securely to Flowbite Web Services, your tool or application needs an API key with permission
                        to access resources such as Flowbite S3 bucket.</p>
                    <form action="#">
                        <div class="hD0sTTDgbxakubcHVW2X gC_jEY75u_oxfOOKnLpH">
                            <label for="app-key-input"
                                class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Your
                                Amazon AWS API key</label>
                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                <input type="text" id="app-key-input"
                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ zDOF4gg2YxFxljgpiQEm pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                    required="" value="3aec8277-da8a-44cd-9249-031519c5a521"
                                    placeholder="Application name">
                                <button type="submit"
                                    class="gDiKxsXc9vN3o2QvoUu8 uQByIGHtHssL9HoPQXR4 uLPch_bqyJDXwe5tynMV _DyTOYSnv02XxjtEc0IX pXhVRBC8yaUNllmIWxln XnjTGHn8t8AXjRaBTrxB g40_g3BQzYCOX5eZADgY Lwvvap4319fmCogicbX3 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                                    <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M17.7 7.7A7.1 7.1 0 0 0 5 10.8M18 4v4h-4m-7.7 8.3A7.1 7.1 0 0 0 19 13.2M6 20v-4h4">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                            <button type="button" data-modal-toggle="editKeyModal"
                                class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                                Cancel
                            </button>
                            <button type="button"
                                class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln XnjTGHn8t8AXjRaBTrxB g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YCF9WtZQaPLXowM_Li_g YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T jL6XA6KB3jDxAj4xiHrn d8_fVOcgDmbt7UdpfeLK TuxenyFcQCXxRKLGv2AH WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- View SERP -->
    <div id="viewSerpModal" tabindex="-1" aria-hidden="true"
        class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
        <div
            class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ mqRWIL4Xv8B3wyT8nbop _wYiJGbRZyFZeCc8y7Sf">
            <!-- Modal content -->
            <div
                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi z_dcrDTjgJpdtCvJwkvd">
                <div
                    class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V pjVv_HvtzX_QkbymyvoG _fGhMnSfYmaGrv7DvZ00 _v9Pi9Qa6pLnzg8T1SPH _wHFqBLkgpFpwtFUvFoc">
                    <h3
                        class="y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        SERP</h3>
                    <button type="button"
                        class="pq2JRWtiWcwYnw3xueNl MsWprSx3_qpThIj5XLSY tUrUahyB6juka_LhwvrY zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                        data-modal-toggle="viewSerpModal">
                        <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 18 6m0 12L6 6"></path>
                        </svg>
                        <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
                    </button>
                </div>

                <div class="ahOqFrhzLjivRe8a1kX_ _IebywwKB6L2zG0BTy63">
                    <table
                        class="t6gkcSf0Bt4MLItXvDJ_ upQp7iWehfaU8VTbfx_w c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y gxbAzPB3iRmT83JhVstN">
                        <thead
                            class="jtAJHOc7mn7b4IKRO59D gMXmdpOPfqG_3CKkL0VD sdSaZcRa4_We5kKaX4pf rYHHksRBEMl_guI3q0UQ jqg6J89cvxmDiFpnV56r XIIs8ZOri3wm8Wnj9N_y">
                            <tr>
                                <th scope="col" class="UWC0ugd84Yd5qs_95tM7 JGzJOGfW2x0VXm_3WgQB i8v96MUlFwGv9qJUkAx7">
                                    <span class="_DVAfiyo21kM68EUVzEQ">Position</span></th>
                                <th scope="col" class="JGzJOGfW2x0VXm_3WgQB i8v96MUlFwGv9qJUkAx7">Results</th>
                                <th scope="col" class="JGzJOGfW2x0VXm_3WgQB i8v96MUlFwGv9qJUkAx7">DA</th>
                                <th scope="col" class="JGzJOGfW2x0VXm_3WgQB i8v96MUlFwGv9qJUkAx7">PA</th>
                                <th scope="col"
                                    class="BHrWGjM1Iab_fAz0_91H w2HU5Y6e5OkLZNuq0an1 JGzJOGfW2x0VXm_3WgQB i8v96MUlFwGv9qJUkAx7">
                                    ED</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="EpUSgjHdM6oyMXUiK_8_ _Ybd3WwuTVljUT4vEaM3 PeR2JZ9BZHYIH8Ea3F36 _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y">
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">1</td>
                                <th scope="row" class="BHrWGjM1Iab_fAz0_91H JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">
                                    <div class="hKp1Ms_s5FmZSrQu_9zj">
                                        <a href="#"
                                            class="_Vb9igHms0hI1PQcvp_S ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ oJZU4OQzzfXeLbF7UKZ_ fZf6W_ZtzEh6EEqmWMA9">Top
                                            10 Tailwind CSS Libraries for 2025 &amp; Design Assets</a>
                                        <a href="#"
                                            class="_Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ XIIs8ZOri3wm8Wnj9N_y">https://flowbite.com/blocks/marketing/hero/</a>
                                    </div>
                                </th>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">95</td>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">54</td>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">14,535</td>
                            </tr>
                            <tr
                                class="EpUSgjHdM6oyMXUiK_8_ _Ybd3WwuTVljUT4vEaM3 PeR2JZ9BZHYIH8Ea3F36 _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y">
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">2</td>
                                <th scope="row" class="BHrWGjM1Iab_fAz0_91H JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">
                                    <div class="hKp1Ms_s5FmZSrQu_9zj">
                                        <a href="#"
                                            class="_Vb9igHms0hI1PQcvp_S ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ oJZU4OQzzfXeLbF7UKZ_ fZf6W_ZtzEh6EEqmWMA9">Flowbite
                                            CSS - A Responsive Frontend Framework</a>
                                        <a href="#"
                                            class="_Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ XIIs8ZOri3wm8Wnj9N_y">https://flowbite.com/docs/components/bottom-navigation/</a>
                                    </div>
                                </th>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">93</td>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">59</td>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">12,950</td>
                            </tr>
                            <tr
                                class="EpUSgjHdM6oyMXUiK_8_ _Ybd3WwuTVljUT4vEaM3 PeR2JZ9BZHYIH8Ea3F36 _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y">
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">3</td>
                                <th scope="row" class="BHrWGjM1Iab_fAz0_91H JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">
                                    <div class="hKp1Ms_s5FmZSrQu_9zj">
                                        <a href="#"
                                            class="_Vb9igHms0hI1PQcvp_S ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ oJZU4OQzzfXeLbF7UKZ_ fZf6W_ZtzEh6EEqmWMA9">Best
                                            Practices for Integrating CSS Libraries into Your Project</a>
                                        <a href="#"
                                            class="_Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ XIIs8ZOri3wm8Wnj9N_y">https://flowbite.com/docs/getting-started/react/</a>
                                    </div>
                                </th>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">90</td>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">41</td>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">8,946</td>
                            </tr>
                            <tr
                                class="EpUSgjHdM6oyMXUiK_8_ _Ybd3WwuTVljUT4vEaM3 PeR2JZ9BZHYIH8Ea3F36 _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y">
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">4</td>
                                <th scope="row" class="BHrWGjM1Iab_fAz0_91H JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">
                                    <div class="hKp1Ms_s5FmZSrQu_9zj">
                                        <a href="#"
                                            class="_Vb9igHms0hI1PQcvp_S ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ oJZU4OQzzfXeLbF7UKZ_ fZf6W_ZtzEh6EEqmWMA9">Most
                                            Popular UI Libraries for Modern Web Design</a>
                                        <a href="#"
                                            class="_Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ XIIs8ZOri3wm8Wnj9N_y">https://flowbite.com/blog/e-commerce-ui-has-been-launched/</a>
                                    </div>
                                </th>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">89</td>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">52</td>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">5,394</td>
                            </tr>
                            <tr
                                class="EpUSgjHdM6oyMXUiK_8_ _Ybd3WwuTVljUT4vEaM3 PeR2JZ9BZHYIH8Ea3F36 _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y">
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">5</td>
                                <th scope="row" class="BHrWGjM1Iab_fAz0_91H JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">
                                    <div class="hKp1Ms_s5FmZSrQu_9zj">
                                        <a href="#"
                                            class="_Vb9igHms0hI1PQcvp_S ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ oJZU4OQzzfXeLbF7UKZ_ fZf6W_ZtzEh6EEqmWMA9">Best
                                            CSS Frameworks and Libraries for Responsive Design</a>
                                        <a href="#"
                                            class="_Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ XIIs8ZOri3wm8Wnj9N_y">https://flowbite.com/blocks/marketing/hero/</a>
                                    </div>
                                </th>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">87</td>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">48</td>
                                <td class="JGzJOGfW2x0VXm_3WgQB _9igzqn_6D3Qq5Hcwkfk">1,027</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div
                    class="XJih04pKHf8Cekga6Hj3 YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6 y_Yn3AF3GmqL3h2uL2xK">
                    <button type="button" data-modal-toggle="viewSerpModal"
                        class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                        Close
                    </button>
                    <button type="button"
                        class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln XnjTGHn8t8AXjRaBTrxB g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T jL6XA6KB3jDxAj4xiHrn d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                        <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v9.293l-2-2a1 1 0 0 0-1.414 1.414l.293.293h-6.586a1 1 0 1 0 0 2h6.586l-.293.293A1 1 0 0 0 18 16.707l2-2V20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z"
                                clip-rule="evenodd"></path>
                        </svg>

                        Export to Excel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete key modal -->
    <div id="deleteModal" tabindex="-1" aria-hidden="true"
        class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
        <div
            class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Rv1FIuLTiXLx6VXsBFe9 _wYiJGbRZyFZeCc8y7Sf">
            <!-- Modal content -->
            <div
                class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi">
                <div
                    class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j RZmKBZs1E1eXw8vkE6jY _9igzqn_6D3Qq5Hcwkfk _Ura23Qklq9Ri0XExDX2">
                    <h3
                        class="y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        Are you sure?</h3>
                    <button type="button"
                        class="pq2JRWtiWcwYnw3xueNl MsWprSx3_qpThIj5XLSY tUrUahyB6juka_LhwvrY zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                        data-modal-toggle="deleteModal">
                        <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 17.94 6M18 18 6.06 6"></path>
                        </svg>
                        <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
                    </button>
                </div>
                <p
                    class="EpUSgjHdM6oyMXUiK_8_ pVSXSlnJdgskzP7BxPBe sz_WHNuEpq2TnLQG5x55 xOqfZfFgdF_WIVyNquJP RZmKBZs1E1eXw8vkE6jY _9igzqn_6D3Qq5Hcwkfk LIY8CTZOqy5iiXBQA539 luzY_hYuHRW3uyVFbjJL Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r aGoEIW2HFXs18Twm_QxZ _Ura23Qklq9Ri0XExDX2">
                    This action <span class="yM_AorRf2jSON3pDsdrz">CANNOT</span> be undone.</p>
                <div class="RZmKBZs1E1eXw8vkE6jY _9igzqn_6D3Qq5Hcwkfk _Ura23Qklq9Ri0XExDX2 V_gfI41xqEa5fazEJgI8">
                    <p
                        class="hD0sTTDgbxakubcHVW2X LIY8CTZOqy5iiXBQA539 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y N4SFnsqiVKm1oFHmSTyG">
                        This will permanently delete the <span
                            class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">bergside/amazon-aws
                            key</span> and everything associated with this key will be permanently deleteled.
                    </p>
                    <button type="submit"
                        class="t6gkcSf0Bt4MLItXvDJ_ Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F SdPDrbResNmgnA0L4Iki _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 w8mVIEFJVQG7skDEVVw8 BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 wGCv_lBIef6dPW_LgqPQ o8x8vWHZQ0qZRIeZ05II _G1H5DlsGdZNDYF1Me2f g0psQAXAFirvUBcDyMSb">
                        I understand, delete this key
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
