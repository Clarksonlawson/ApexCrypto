@extends('errors.layout')

@section('title', '500 Internal Error')

@section('content')
<section class="YajDCE_nRj_FDIevNpsd YRrCJSr_j5nopfm4duUc rhJ7qSuv_H6qJxmzGcAa e8VqoQNK0mbkRFDL3LMV Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _Ybd3WwuTVljUT4vEaM3 h8KYXnua2NT4kTVzieom">
  <div class="qaHaJE3PFAhOCHN67vqr Q4KJqTa5GBaAJ29_u66A A4nrCyN6pdA4Oc1Dr3YS bhR_PkwU_R7UbU0M5yyi RZmKBZs1E1eXw8vkE6jY q_zwKy9s41K7_EFa8avk CIvRFY6WqO6DWPVDyX2u NUNBhN4wTv4SFUTkLVGg Xuyx_pcXRIz_c79NSLIh">
    <div class="_rCfAafI7lqYALljdSxM">
      <h1 class="hD0sTTDgbxakubcHVW2X q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj OQflBVxALl1Ntbyc2J2_ fZf6W_ZtzEh6EEqmWMA9">500 Internal Error</h1>
      <p class="hD0sTTDgbxakubcHVW2X q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj AX9fWk_1GRI2Pnhm8wfX __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE qHqmYNsBgt0HRBTfqwFr jf_cbOmwTWYNge_xgG4B">Whoops! {{__($exception->getMessage()? : "Something went wrong." )}}</p>
      <p class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Here are some helpful links:</p>
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
    <div class="_SmdlCf6eUKB_V9S5IDj _TsbEtxNT5XPbTk6VlSv">
      <img class="YajDCE_nRj_FDIevNpsd hD0sTTDgbxakubcHVW2X MpOyJ1SVShgPV9r3_gpl" src="{{asset('assets/images/500.svg')}}" alt="illustration">
      <img class="YajDCE_nRj_FDIevNpsd hD0sTTDgbxakubcHVW2X _SmdlCf6eUKB_V9S5IDj mMskBxHw5agMvHB_tDLE" src="assets/images/500-dark.svg')}}" alt="illustration">
    </div>
  </div>
</section>
@endsection