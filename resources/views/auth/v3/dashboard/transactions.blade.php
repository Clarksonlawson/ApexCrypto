@extends('auth.v3.layouts.dashboard')
@section('title', 'Transactions | User Dashboard')
@php
    use Carbon\Carbon;
@endphp

@section('content')
<div class="xCPtuxM4_gihvpPwv9bX wDF2ls8Apmy3KGiCbxI_ iHPddplqYvrN6qWgvntn _Ybd3WwuTVljUT4vEaM3 h8KYXnua2NT4kTVzieom">
  <div class="EWLTGduHCjFnjN6tLCXV _Zt0QWNoskeJIuWJ94UW XJih04pKHf8Cekga6Hj3">
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
            <a href="#" class="UwVmaTmxbsmvnpCB2B1K c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe rYHHksRBEMl_guI3q0UQ YXx9oZ15oLXSCG32YPBT XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW _9RDyySiJ2_PuvLFkRD4">Transactions</a>
          </div>
        </li>
        <li aria-current="page">
          <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
            <svg class="H9gtVTm5_rPWftCfV_9B _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _JmTNv5EiHqK2A1jcQSf _oMLPqquxUE25nEAshY6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"></path>
            </svg>
            <span class="UwVmaTmxbsmvnpCB2B1K c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _9RDyySiJ2_PuvLFkRD4">All Transactions</span>
          </div>
        </li>
      </ol>
    </nav>
    <h1 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Transactions</h1>
  </div>
  <div class="ahOqFrhzLjivRe8a1kX_ EWLTGduHCjFnjN6tLCXV">
    <div class="_Zt0QWNoskeJIuWJ94UW EpUSgjHdM6oyMXUiK_8_ _fGhMnSfYmaGrv7DvZ00">
      <div class="YRrCJSr_j5nopfm4duUc Sg_3d5zRNStcQDmbq_hb Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j pjVv_HvtzX_QkbymyvoG tuEYdQFQ7IyWJ8f7A6Ss IfjsJ_KBYZ_X91Cj395g">
        <div class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ e8VqoQNK0mbkRFDL3LMV tI6ZVpHcCWxY_MKHSQWC MX_rT_HfQMh3dDrqOQ_i _Z3zYoo8SAGYZcCAB_mb xr7CqaTHxTvDOrwAH2SW DyG7A4viMuur4z1rJih8">
          <form class="fqL_oteKquEXvTu6w4NP">
            <label for="default-search" class="_DVAfiyo21kM68EUVzEQ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Search</label>
            <div class="ahOqFrhzLjivRe8a1kX_">
              <div class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua TYmpscr1PwuC1dpYXDpM YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 aa_y6SeayB9fNgBD5ROa">
                <svg aria-hidden="true" class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
              </div>
              <input type="search" id="default-search" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D FJRldeiG2gFGZfuKgp88 nbfkCvNleKWN7Pz3_DQF c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput _Ea6KuWmEkjv2NePLTIU" placeholder="Search by Order ID or Customer" required="">
            </div>
          </form>
          {{-- <div class="xCPtuxM4_gihvpPwv9bX Q4KJqTa5GBaAJ29_u66A iHPddplqYvrN6qWgvntn rvdRhGyExrNYTA6euxsF _Z3zYoo8SAGYZcCAB_mb SQf297smyJVNzzOO3iQL Z_rMpbzkK6h601HZFNDW">
            <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" data-dropdown-ignore-click-outside-class="datepicker" class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ _VPh6kIywCMfXFfQLas4 Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j icxWjIgUd9_dzYucx1nx" type="button">
              Last 7 days
              <svg class="cZGr4DL6HOaMXQmjciUj gtlIjUq8I0xb1BZjyfWO _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
              </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="filterDropdown" class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj s_qGBumeqeGOSuWJFt2p mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 FJRldeiG2gFGZfuKgp88 mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r">
              <ul class="wezTbYJgxYJp5ZDqX67N c8dCx6gnV43hTOLV6ks5" aria-labelledby="filterDropdownButton">
                <li class="YRrCJSr_j5nopfm4duUc W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                  <button type="button" class="OQflBVxALl1Ntbyc2J2_ fZf6W_ZtzEh6EEqmWMA9">Today<span class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf">Aug 21, 2025 - Aug 21, 2025</span></button>
                </li>
                <li class="YRrCJSr_j5nopfm4duUc W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                  <button type="button" class="OQflBVxALl1Ntbyc2J2_ fZf6W_ZtzEh6EEqmWMA9">Yesterday<span class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf">Aug 20, 2025 - Aug 21, 2025</span></button>
                </li>
                <li class="YRrCJSr_j5nopfm4duUc W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                  <button type="button" class="OQflBVxALl1Ntbyc2J2_ fZf6W_ZtzEh6EEqmWMA9">Last 7 days<span class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf">Aug 14, 2025 - Aug 21, 2025</span></button>
                </li>
                <li class="YRrCJSr_j5nopfm4duUc W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                  <button type="button" class="OQflBVxALl1Ntbyc2J2_ fZf6W_ZtzEh6EEqmWMA9">Month to Date<span class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf">Sep 21, 2025 - Aug 21, 2025</span></button>
                </li>
                <li class="YRrCJSr_j5nopfm4duUc W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                  <button type="button" class="OQflBVxALl1Ntbyc2J2_ fZf6W_ZtzEh6EEqmWMA9">Year to Date<span class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf">Jan 1, 2025 - Aug 21, 2025</span></button>
                </li>
                <li class="YRrCJSr_j5nopfm4duUc W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                  <button type="button" class="OQflBVxALl1Ntbyc2J2_ fZf6W_ZtzEh6EEqmWMA9">All time<span class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf">Jan 1, 2020 - Aug 21, 2025</span></button>
                </li>
              </ul>
            </div>
            <button type="button" class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ _VPh6kIywCMfXFfQLas4 Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j icxWjIgUd9_dzYucx1nx">
              <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7c0 1.1.9 2 2 2 0 1.1.9 2 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm1 8.8A2.3 2.3 0 0 0 9.6 13a2.3 2.3 0 0 0 2.1 2.5h.7a.3.3 0 0 1 .2.4l-.4.1h-1a1 1 0 1 0 0 2h1c.5 0 1 0 1.4-.3a2 2 0 0 0 1-1.1 2.3 2.3 0 0 0-2.2-3l-.5-.1a.3.3 0 0 1-.3-.4.3.3 0 0 1 .4-.3h1a1 1 0 1 0 0-2h-1Zm8 1.5a1 1 0 1 0-2-.6l-.5 1.7-.5-1.7a1 1 0 0 0-2 .6l1.5 4.8a1 1 0 0 0 1.9 0l1.6-4.8Zm-13.8.9.4-.2h1a1 1 0 1 0 0-2h-1A2.6 2.6 0 0 0 4 13.6v1.8A2.6 2.6 0 0 0 6.6 18h1a1 1 0 1 0 0-2h-1a.6.6 0 0 1-.6-.6v-1.8c0-.1 0-.3.2-.4Z" clip-rule="evenodd"></path>
              </svg>
              Export CSV
            </button>
          </div> --}}
        </div>
        <div class="_hpGev6RXFut0Jm_iRgf YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ VQS2tmQ_zFyBOC2tkmto e8VqoQNK0mbkRFDL3LMV RL7uPEoqj_KRubJO6Kau URF_PdoDtDpDi8BZQL94 _ZI9D_boHHl7De08RAA7 _f8XqZvYJf7DNydLmFyI tuEYdQFQ7IyWJ8f7A6Ss hhVyfLYO5HBNKAsXwK1v kx7ZbxfUTd59O6XuY2J0">
          <button id="createReportButton" data-modal-target="createReportDefaultModal" data-modal-toggle="createReportDefaultModal" type="button" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
            <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4v11c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16c0-.6.4-1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z" clip-rule="evenodd"></path>
            </svg>
            Generate report
          </button>
        </div>
      </div>
    </div>
    <div class="_Zt0QWNoskeJIuWJ94UW YRrCJSr_j5nopfm4duUc hP1M5IgfjJiY8_B1VUN1 _9igzqn_6D3Qq5Hcwkfk">
      <div class="y7LTF_4HCOoAzmZm_v8k _SmdlCf6eUKB_V9S5IDj Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE _TsbEtxNT5XPbTk6VlSv">Show only:</div>
      <div class="YRrCJSr_j5nopfm4duUc hP1M5IgfjJiY8_B1VUN1 iHPddplqYvrN6qWgvntn">
        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
          <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
          <label for="inline-radio" class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">All</label>
        </div>
        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
          <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
          <label for="inline-2-radio" class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">Completed</label>
        </div>
        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
          <input id="inline-3-radio" type="radio" value="" name="inline-radio-group" class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
          <label for="inline-3-radio" class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">In progress</label>
        </div>
        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
          <input id="inline-4-radio" type="radio" value="" name="inline-radio-group" class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
          <label for="inline-4-radio" class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">Rejected</label>
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
                                    Type
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
                        @foreach ($transactions as $transaction)
                            <tr
                                class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                        <input id="checkbox-table-search-1" type="checkbox"
                                            onclick="event.stopPropagation()"
                                            class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                        <label for="checkbox-table-search-1" class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                    </div>
                                </td>
                                <td
                                    class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    {{ $transaction->description }}</td>
                                <td
                                    class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                    {{ Carbon::parse($transaction->updated_at)->format('M d, Y H:i a') }}</td>
                                <td
                                    class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    {{ $transaction->crypto_amount }} {{ $transaction->asset_symbol }} </td>
                                @switch($transaction->transaction_type)
                                    @case('Deposit')
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF">
                                            {{ $transaction->transaction_type }}</td>
                                    @break

                                    @case('Transfer')
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt Sz97zU8r72z_pjE9zQnR">
                                            {{ $transaction->transaction_type }}</td>
                                    @break

                                    @default
                                @endswitch

                                <td
                                    class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe Wz8P4aylnNebbmktt9TH dc1ZvnXYavhnPynbasI1">
                                    @switch($transaction->status)
                                        @case('verified')
                                            <span
                                                class="Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">Completed</span>
                                        </td>
                                    @break

                                    @case('pending')
                                        <span
                                            class="Y3FxyuXtj2gecrGXvLEI k1sFscPcBz_oMeiTaKv8 St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe gxqPdw4EewWD7Ph9huFn a0oEzk8_ILhkMVanM4oU Ve5b1Uj_g0EE28J7Z_Ka">In
                                            progress</span>
                                    @break

                                    @case('rejected')
                                        <span
                                            class="Y3FxyuXtj2gecrGXvLEI __CUdK3mSkcMQpxc1Lod St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe ZN_OBnKt2VQjvkKnCO6j _GlwOcA9YuerMlQx_c88 _XapmO5DQjdm9xWcSSv9">Cancelled</span>

                                        @default
                                    @endswitch
                                    </td>
                                    <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                        <button id="order-{{ $transaction->id }}-dropdown-button" type="button"
                                            data-dropdown-toggle="order-{{ $transaction->id }}-dropdown"
                                            class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-width="4"
                                                    d="M6 12h0m6 0h0m6 0h0"></path>
                                            </svg>
                                        </button>
                                        <div id="order-{{ $transaction->id }}-dropdown"
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
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18 17.94 6M18 18 6.06 6"></path>
                                                </svg>
                                                <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
                                            </button>
                                            <h3
                                                class="Z3N7I2IDDsoXK6xJ1cSW y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                                Are you sure?</h3>
                                            <p class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">The
                                                following transaction will be
                                                permanently deleted and cannot be restored:</p>
                                            <ul role="list"
                                                class="hD0sTTDgbxakubcHVW2X TVHgSaRh3muGJct_epr9 upQp7iWehfaU8VTbfx_w ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE N4SFnsqiVKm1oFHmSTyG">
                                                <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj">
                                                    <svg aria-hidden="true"
                                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span>{{ $transaction->description }} - {{ $transaction->crypto_amount }}
                                                        {{ $transaction->asset_symbol }}</span>
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
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
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
                            @endforeach
                        </tbody>
                    </table>
    </div>
    <div class="t6gkcSf0Bt4MLItXvDJ_">
      <!-- Table Footer -->
      <div class="ahOqFrhzLjivRe8a1kX_ wBVMFkIGfrKshbvi2gS1">
        <nav class="YRrCJSr_j5nopfm4duUc e8VqoQNK0mbkRFDL3LMV _7_AEkSp_Gi6KH9ZW6st sJNGKHxFYdN5Nzml5J2j tI6ZVpHcCWxY_MKHSQWC _wYiJGbRZyFZeCc8y7Sf tuEYdQFQ7IyWJ8f7A6Ss hhVyfLYO5HBNKAsXwK1v eVEHKvmQTgrcFfcnBoRJ" aria-label="Table navigation">
          <span class="c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Showing <span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">1-15</span> of <span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">1000</span></span>
          <ul class="_k0lTW0vvzboctTxDi2R RL7uPEoqj_KRubJO6Kau EVsptO6LmMeSj8z3lntE">
            <li>
              <a href="#" class="CoXBDf_LlsdMbiNfGE67 YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU Zbcg0Bjzm_C_64FAwnE3 pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI Qkdk47eO_FsOcXfaC9zb PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                <span class="_DVAfiyo21kM68EUVzEQ">Previous</span>
                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"></path>
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                1
              </a>
            </li>
            <li>
              <a href="#" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                2
              </a>
            </li>
            <li>
              <a href="#" aria-current="page" class="QhmQ_v3mmDFIP9VaVOfb YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln XQGFRdlxLbhbEMzeaRuO OHD_pMp_ehzJj42EmDyF _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu _6MyV8SXoSWq_PQ6KWI6 M7HoUYpjoEdw_y87xeWn YXx9oZ15oLXSCG32YPBT _fGhMnSfYmaGrv7DvZ00 jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE">
                3
              </a>
            </li>
            <li>
              <a href="#" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                ...
              </a>
            </li>
            <li>
              <a href="#" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                100
              </a>
            </li>
            <li>
              <a href="#" class="YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _McrmMbFrEkc_sTK9IC8 pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI Qkdk47eO_FsOcXfaC9zb OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                <span class="_DVAfiyo21kM68EUVzEQ">Next</span>
                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"></path>
                </svg>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<!-- Delete transaction modal -->
<div id="deleteTransactionModal" tabindex="-1" aria-hidden="true" class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
  <div class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ uv4ZnT9l0TZhdd_Ia_EC _wYiJGbRZyFZeCc8y7Sf">
    <!-- Modal content -->
    <div class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
      <button type="button" class="pq2JRWtiWcwYnw3xueNl g11v7hv2nftKJig5bsCt tUrUahyB6juka_LhwvrY LAjAGvS_n5tUL9Q_7i85 _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" data-modal-toggle="deleteTransactionModal">
        <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"></path>
        </svg>
        <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
      </button>
      <h3 class="Z3N7I2IDDsoXK6xJ1cSW y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Are you sure?</h3>
      <p class="hD0sTTDgbxakubcHVW2X LIY8CTZOqy5iiXBQA539 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">You are about to delete this transaction, this cannot be undone:</p>
      <ul role="list" class="hD0sTTDgbxakubcHVW2X TVHgSaRh3muGJct_epr9 upQp7iWehfaU8VTbfx_w ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE N4SFnsqiVKm1oFHmSTyG">
        <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj">
          <svg aria-hidden="true" class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
          </svg>
          <span>Order #1846325</span>
        </li>
      </ul>
      <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
        <button data-modal-toggle="deleteTransactionModal" type="button" class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
          Cancel
        </button>
        <button type="submit" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F SdPDrbResNmgnA0L4Iki _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 w8mVIEFJVQG7skDEVVw8 BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 wGCv_lBIef6dPW_LgqPQ g0psQAXAFirvUBcDyMSb">
          <svg aria-hidden="true" class="ZEPNZzATe5nPnS0shmrF C_aqJ70iNmOTNL788uQu _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
          </svg>
          Delete
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Generate report modal -->
<div id="createReportDefaultModal" tabindex="-1" aria-hidden="true" class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX">
  <div class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ uv4ZnT9l0TZhdd_Ia_EC _wYiJGbRZyFZeCc8y7Sf">
    <!-- Modal content -->
    <div class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
      <!-- Modal header -->
      <div class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j zQeL_bQRwh9WGEnvS5ug N4SFnsqiVKm1oFHmSTyG">
        <h3 class="y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Reports</h3>
        <button type="button" class="zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" data-modal-toggle="createReportDefaultModal">
          <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"></path>
          </svg>
          <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <form action="#">
        <div class="hD0sTTDgbxakubcHVW2X xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn AqVNvLG_H6VHhym2yKMp">
          <div>
            <label for="report" class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
              Select report
              <button data-popover-target="popover-report-description" type="button" class="KLo3NZfrGYYPkMcjEWNN _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">
                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                </svg>
                <span class="_DVAfiyo21kM68EUVzEQ">Show information</span>
              </button>
            </label>
            <select id="report" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
              <option selected="">Balance</option>
              <option value="income">Income statement</option>
              <option value="cashflow">Cash Flow statement</option>
              <option value="incomebalance">Trial balance</option>
            </select>
            <div id="popover-report-description" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt p4AJk9ET4ZlyzNjHjPnM mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r">
              Transaction reports are documents that provide a detailed record of individual financial transaction.
              <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
            </div>
          </div>
          <div>
            <label for="ledger-type" class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
              Ledger event
              <button data-popover-target="popover-ledger-description" type="button" class="KLo3NZfrGYYPkMcjEWNN _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">
                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                </svg>
                <span class="_DVAfiyo21kM68EUVzEQ">Show information</span>
              </button>
            </label>
            <select id="ledger-type" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
              <option selected="">All</option>
              <option value="sales">Sales</option>
              <option value="purchases">Purchases</option>
            </select>
            <div id="popover-ledger-description" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt p4AJk9ET4ZlyzNjHjPnM mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r">
              Ledger event codes relate performance ledger data so that you can report on the data.
              <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
            </div>
          </div>
          <div date-rangepicker="" class="Q_jg_EPdNf9eDMn1mLI2 wwofGIyK_H_z3Xjelq8G rvdRhGyExrNYTA6euxsF SQf297smyJVNzzOO3iQL">
            <div class="hD0sTTDgbxakubcHVW2X t6gkcSf0Bt4MLItXvDJ_ tkZo48dB4RhnHSlDXzoe">
              <label for="startDate" class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">From</label>
              <div class="ahOqFrhzLjivRe8a1kX_">
                <div class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua QwmoUJgpayek67mTbNEE YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _0VbwdpFdmHwQ2geg0Xp">
                  <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <input id="startDate" name="start" type="text" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx CZURRWrw0Zimq2s_t6jr c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Select date">
              </div>
            </div>
            <div class="t6gkcSf0Bt4MLItXvDJ_">
              <label for="dueDate" class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">To</label>
              <div class="ahOqFrhzLjivRe8a1kX_">
                <div class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua QwmoUJgpayek67mTbNEE YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _0VbwdpFdmHwQ2geg0Xp">
                  <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <input id="dueDate" name="end" type="text" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx CZURRWrw0Zimq2s_t6jr c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput" placeholder="Select date">
              </div>
            </div>
          </div>
        </div>
        <div class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 N4SFnsqiVKm1oFHmSTyG">
          <input id="report-checkbox" type="checkbox" value="" class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
          <label for="report-checkbox" class="KLo3NZfrGYYPkMcjEWNN c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Include ledger narratives?</label>
        </div>
        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
          <button type="button" class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
            View report
          </button>
          <button type="submit" class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
            <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M9 7V2.2a2 2 0 0 0-.5.4l-4 3.9a2 2 0 0 0-.3.5H9Zm2 0V2h7a2 2 0 0 1 2 2v9.3l-2-2a1 1 0 0 0-1.4 1.4l.3.3h-6.6a1 1 0 1 0 0 2h6.6l-.3.3a1 1 0 0 0 1.4 1.4l2-2V20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd"></path>
            </svg>
            Export
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection