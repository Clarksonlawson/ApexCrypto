@extends('auth.v3.layouts.dashboard')

@section('title', 'Referrals')

@section('content')
    <div
        class="mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI LSIxp7RSuOKhsg28v_u3 _1jTZ8KXRZul60S6czNi">
        <h2 class="TR_P65x9ie7j6uxFo_Cs vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
            My projects activity</h2>
        <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Use projects to manage all your work in one place and stay
            aligned with stakeholders.</p>
        <div class="_SmdlCf6eUKB_V9S5IDj rvdRhGyExrNYTA6euxsF">
            <img class="YajDCE_nRj_FDIevNpsd eTRkDItmVio78C2R7lG8 aJF41JQLhtfw_MCGt5Th YjC_WtUInFM03OBUyuS2 MpOyJ1SVShgPV9r3_gpl"
                src="../../images/projects.svg" alt="illustration">
            <img class="YajDCE_nRj_FDIevNpsd _SmdlCf6eUKB_V9S5IDj _ZcyPK_iUWAbkH9Xvqlu eTRkDItmVio78C2R7lG8 aJF41JQLhtfw_MCGt5Th YjC_WtUInFM03OBUyuS2"
                src="../../images/projects-dark.svg" alt="illustration">
        </div>
        <div
            class="rvdRhGyExrNYTA6euxsF Q_jg_EPdNf9eDMn1mLI2 UYOSZJ1_pv3B5nt1ujCP xr7CqaTHxTvDOrwAH2SW SQf297smyJVNzzOO3iQL Nm7xMnguzOx6J5Ao7yCU XJih04pKHf8Cekga6Hj3 GgdULYVy8kzBUcQdiu8d">
            <button type="button" id="newProjectButton" data-modal-target="newProjectModal"
                data-modal-toggle="newProjectModal"
                class="t6gkcSf0Bt4MLItXvDJ_ Nm7xMnguzOx6J5Ao7yCU icxWjIgUd9_dzYucx1nx _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 y6GKdvUrd7vp_pxsFb57 g40_g3BQzYCOX5eZADgY YoPCmQ0E_V5W0GGmSIdm _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T ezMFUVl744lvw6ht0lFe mveJTCIb2WII7J4sY22F c8dCx6gnV43hTOLV6ks5 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R BkIbg_JwkgiyRW804Hhu _ZsTMX_gz275093orLWM">
                <svg class="E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus _Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M9 7V2.2a2 2 0 0 0-.5.4l-4 3.9a2 2 0 0 0-.3.5H9Zm2 0V2h7a2 2 0 0 1 2 2v6.4A7.5 7.5 0 1 0 10.5 22H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z"
                        clip-rule="evenodd"></path>
                    <path fill-rule="evenodd"
                        d="M9 16a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm6-3c.6 0 1 .4 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1v-1c0-.6.4-1 1-1Z"
                        clip-rule="evenodd"></path>
                </svg>
                Create new project
            </button>
            <button type="button"
                class="t6gkcSf0Bt4MLItXvDJ_ icxWjIgUd9_dzYucx1nx b9aD6g2qw84oyZNsMO8j _Cj_M6jt2eLjDgkBBNgI c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl BkIbg_JwkgiyRW804Hhu _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y yChACvAr1v8czJ2VO22j _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y Mmx5lX7HVdrWCgh3EpTP dMTOiA3mf3FTjlHu6DqW OPrb_iG5WDy_7F05BDOX">View
                all projects</button>
        </div>
    </div>
@endsection
