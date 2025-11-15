@extends('errors.layout')

@section('title', '404 Not Found')

@section('content')
<section class="YajDCE_nRj_FDIevNpsd YRrCJSr_j5nopfm4duUc rhJ7qSuv_H6qJxmzGcAa e8VqoQNK0mbkRFDL3LMV Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU JGzJOGfW2x0VXm_3WgQB h8KYXnua2NT4kTVzieom dMAuL1oBmema6sjWH3ZQ">
  <div class="_Vb9igHms0hI1PQcvp_S _IrWoHocjEUQnxx2tEu4">
    <img class="YajDCE_nRj_FDIevNpsd hD0sTTDgbxakubcHVW2X _SmdlCf6eUKB_V9S5IDj _YtPVN_LlqV6t4rglMAI" src="{{asset('assets/images/404.svg')}}" alt="illustration">
  </div>
  <div class="ijrOHNoSVGATsWYKl4Id Q1hPH2qWcqvGJYzNco8_">
    <h1 class="hD0sTTDgbxakubcHVW2X q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj OXyBmUnmaFHYN14c7Giu OQflBVxALl1Ntbyc2J2_ fZf6W_ZtzEh6EEqmWMA9">404 Not Found</h1>
    <p class="Td37IMFwOi4Zt3Vhv3cT q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE qHqmYNsBgt0HRBTfqwFr">Whoops! {{__($exception->getMessage()? : "That page doesn't exist.")}}</p>
    <a href="/" class="R9nujHypnXyuHrBww9QK _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
      <svg class="ZEPNZzATe5nPnS0shmrF fhCwost7CSNRc2WSHLFW rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
      </svg>
      Go back home
    </a>
    <p class="aJF41JQLhtfw_MCGt5Th PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y TJyr2NViWyUvJxuWY8YG">Here are some helpful links instead:</p>
    <ul class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU d4louhNic5PFgJGRKqn6 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
      <li>
        <a href="/" class="W_sCP6_PDfz0Lqf875WU ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">Home</a>
      </li>
      <li>
        <a href="{{route('sign-in')}}" class="W_sCP6_PDfz0Lqf875WU ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">Sign In</a>
      </li>
     
      <li>
        <a href="{{route('contact')}}" class="W_sCP6_PDfz0Lqf875WU ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">Contact</a>
      </li>
    </ul>
  </div>
</section>
@endsection