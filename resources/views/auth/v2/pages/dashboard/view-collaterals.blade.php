@extends('auth.v2.pages.dashboard.layout.dashboard-layout')
@section('title', 'Dashboard | ApexCrypto Finance LTD')
@section('pageHeader', 'View Collaterals')
@php

use App\Models\Loan;
use App\Models\Collateral;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

$user = Auth::user();
$collaterals = Collateral::where('user_id', $user->id)->get();
$linkedActiveLoans= Loan::where('user_email', $user->email)->where('status', 'Active Loan');
@endphp
@section('content')
 <div class="topbar-search">
    <form class="form-search flex-grow">
        <fieldset class="name">
            <input type="text" placeholder="Search" class="show-search style-1" name="name" tabindex="2" value="" aria-required="true" required="">
        </fieldset>
        <div class="button-submit">
            <button class="" type="submit"><i class="icon-search-normal1"></i></button>
        </div>
    </form>
    <div class="right">
        <a href="#" class="tf-button style-2 f12-bold d-md-flex d-none">
            <i class="icon icon-receive-square"></i>
            Get Report
        </a>
        <div class="dropdown default style-fill">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon icon-setting-5"></i>
                Filter
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>  
                    <a href="javascript:void(0);">A - Z</a>
                </li>
                <li>  
                    <a href="javascript:void(0);">Z - A</a>
                </li>
            </ul>
        </div>
        <select class="image-select center d-md-flex d-none">
            <option selected>Newest</option>
            <option>Lasted</option>
        </select>
        <div>
            <div class="dropdown default">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.2918 15.8333C12.2918 17.1 11.2668 18.125 10.0002 18.125C8.7335 18.125 7.7085 17.1 7.7085 15.8333C7.7085 14.5667 8.7335 13.5417 10.0002 13.5417C11.2668 13.5417 12.2918 14.5667 12.2918 15.8333ZM8.9585 15.8333C8.9585 16.4083 9.42516 16.875 10.0002 16.875C10.5752 16.875 11.0418 16.4083 11.0418 15.8333C11.0418 15.2583 10.5752 14.7917 10.0002 14.7917C9.42516 14.7917 8.9585 15.2583 8.9585 15.8333Z" fill="#161326"/>
                            <path d="M12.2918 4.16683C12.2918 5.4335 11.2668 6.4585 10.0002 6.4585C8.7335 6.4585 7.7085 5.4335 7.7085 4.16683C7.7085 2.90016 8.7335 1.87516 10.0002 1.87516C11.2668 1.87516 12.2918 2.90016 12.2918 4.16683ZM8.9585 4.16683C8.9585 4.74183 9.42516 5.2085 10.0002 5.2085C10.5752 5.2085 11.0418 4.74183 11.0418 4.16683C11.0418 3.59183 10.5752 3.12516 10.0002 3.12516C9.42516 3.12516 8.9585 3.59183 8.9585 4.16683Z" fill="#161326"/>
                            <path d="M12.2918 9.99984C12.2918 11.2665 11.2668 12.2915 10.0002 12.2915C8.7335 12.2915 7.7085 11.2665 7.7085 9.99984C7.7085 8.73317 8.7335 7.70817 10.0002 7.70817C11.2668 7.70817 12.2918 8.73317 12.2918 9.99984ZM8.9585 9.99984C8.9585 10.5748 9.42516 11.0415 10.0002 11.0415C10.5752 11.0415 11.0418 10.5748 11.0418 9.99984C11.0418 9.42484 10.5752 8.95817 10.0002 8.95817C9.42516 8.95817 8.9585 9.42484 8.9585 9.99984Z" fill="#161326"/>
                        </svg>
                    </span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>  
                        <a href="javascript:void(0);">This Week</a>
                    </li>
                    <li>  
                        <a href="javascript:void(0);">This Day</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="table-list-transaction">
    <div class="list-transaction-head title-sort">
        <div class="btn-key-sort" data-index="0" data-type="string">
            <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="28.6282" height="19" rx="3.5" stroke="white"/>
                <rect x="4.5" y="4.5" width="11" height="11" rx="3.5" stroke="white"/>
                <path d="M23.2115 11.3205L25.0138 8.96357C25.2654 8.63456 25.0308 8.15984 24.6166 8.15984L21.012 8.15984C20.5978 8.15984 20.3632 8.63456 20.6148 8.96357L22.4171 11.3205C22.6173 11.5822 23.0114 11.5822 23.2115 11.3205Z" fill="white"/>
            </svg>
            <div class="f12-bold text-White">Collateral ID</div>
            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.1618 3.9199C7.1618 4.03073 7.12095 4.14158 7.03345 4.22908C6.86428 4.39825 6.58429 4.39825 6.41512 4.22908L4.55428 2.36825L2.69345 4.22908C2.52428 4.39825 2.24428 4.39825 2.07512 4.22908C1.90595 4.05992 1.90595 3.77992 2.07512 3.61075L4.24514 1.44073C4.3268 1.35906 4.43762 1.31242 4.55428 1.31242C4.67095 1.31242 4.7818 1.35906 4.86347 1.44073L7.03345 3.61075C7.11512 3.69825 7.1618 3.80906 7.1618 3.9199Z" fill="white"/>
                <path d="M4.9917 1.75L4.9917 12.25C4.9917 12.4892 4.79337 12.6875 4.5542 12.6875C4.31503 12.6875 4.1167 12.4892 4.1167 12.25L4.1167 1.75C4.1167 1.51083 4.31503 1.3125 4.5542 1.3125C4.79337 1.3125 4.9917 1.51083 4.9917 1.75Z" fill="white"/>
                <path d="M13.3161 10.08C13.3161 10.1909 13.2752 10.3017 13.1877 10.3892L11.0177 12.5592C10.9361 12.6409 10.8252 12.6875 10.7086 12.6875C10.5919 12.6875 10.4811 12.6409 10.3994 12.5592L8.22941 10.3892C8.06025 10.22 8.06025 9.94 8.22941 9.77083C8.39858 9.60167 8.67858 9.60167 8.84775 9.77083L10.7086 11.6317L12.5694 9.77083C12.7385 9.60167 13.0186 9.60167 13.1877 9.77083C13.2752 9.8525 13.3161 9.96335 13.3161 10.08Z" fill="white"/>
                <path d="M11.1401 1.75L11.1401 12.25C11.1401 12.4892 10.9418 12.6875 10.7026 12.6875C10.4635 12.6875 10.2651 12.4892 10.2651 12.25L10.2651 1.75C10.2651 1.51083 10.4635 1.3125 10.7026 1.3125C10.9418 1.3125 11.1401 1.51083 11.1401 1.75Z" fill="white"/>
            </svg>
        </div>
        <div class="btn-key-sort" data-index="1" data-type="string">
            <div class="f12-bold text-White">Date</div>
            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.24038 5.32045L8.57191 0.963819C8.82351 0.634814 8.58891 0.160095 8.17473 0.160095L1.51167 0.160095C1.09749 0.160095 0.862898 0.634814 1.11449 0.96382L4.44602 5.32045C4.64614 5.58215 5.04026 5.58215 5.24038 5.32045Z" fill="white"/>
            </svg>
        </div>
        <div class="btn-key-sort" data-index="2" data-type="string">
            <div class="f12-bold text-White">Symbol</div>
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.53338 3.9199C6.53338 4.03073 6.49253 4.14158 6.40503 4.22908C6.23587 4.39825 5.95587 4.39825 5.7867 4.22908L3.92587 2.36825L2.06503 4.22908C1.89586 4.39825 1.61587 4.39825 1.4467 4.22908C1.27753 4.05992 1.27753 3.77992 1.4467 3.61075L3.61672 1.44073C3.69838 1.35906 3.8092 1.31242 3.92587 1.31242C4.04253 1.31242 4.15338 1.35906 4.23505 1.44073L6.40503 3.61075C6.4867 3.69825 6.53338 3.80906 6.53338 3.9199Z" fill="white"/>
                <path d="M4.36328 1.75L4.36328 12.25C4.36328 12.4892 4.16495 12.6875 3.92578 12.6875C3.68661 12.6875 3.48828 12.4892 3.48828 12.25L3.48828 1.75C3.48828 1.51083 3.68661 1.3125 3.92578 1.3125C4.16495 1.3125 4.36328 1.51083 4.36328 1.75Z" fill="white"/>
                <path d="M12.6876 10.08C12.6876 10.1909 12.6468 10.3017 12.5593 10.3892L10.3893 12.5592C10.3076 12.6409 10.1968 12.6875 10.0802 12.6875C9.9635 12.6875 9.85265 12.6409 9.77098 12.5592L7.601 10.3892C7.43183 10.22 7.43183 9.94 7.601 9.77083C7.77016 9.60167 8.05016 9.60167 8.21933 9.77083L10.0802 11.6317L11.941 9.77083C12.1101 9.60167 12.3902 9.60167 12.5593 9.77083C12.6468 9.8525 12.6876 9.96335 12.6876 10.08Z" fill="white"/>
                <path d="M10.5117 1.75L10.5117 12.25C10.5117 12.4892 10.3134 12.6875 10.0742 12.6875C9.83505 12.6875 9.63672 12.4892 9.63672 12.25L9.63672 1.75C9.63672 1.51083 9.83505 1.3125 10.0742 1.3125C10.3134 1.3125 10.5117 1.51083 10.5117 1.75Z" fill="white"/>
            </svg>
        </div>
        <div class="btn-key-sort" data-index="3" data-type="string">
            <div class="f12-bold text-White">Asset</div>
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.53338 3.9199C6.53338 4.03073 6.49253 4.14158 6.40503 4.22908C6.23587 4.39825 5.95587 4.39825 5.7867 4.22908L3.92587 2.36825L2.06503 4.22908C1.89586 4.39825 1.61587 4.39825 1.4467 4.22908C1.27753 4.05992 1.27753 3.77992 1.4467 3.61075L3.61672 1.44073C3.69838 1.35906 3.8092 1.31242 3.92587 1.31242C4.04253 1.31242 4.15338 1.35906 4.23505 1.44073L6.40503 3.61075C6.4867 3.69825 6.53338 3.80906 6.53338 3.9199Z" fill="white"/>
                <path d="M4.36328 1.75L4.36328 12.25C4.36328 12.4892 4.16495 12.6875 3.92578 12.6875C3.68661 12.6875 3.48828 12.4892 3.48828 12.25L3.48828 1.75C3.48828 1.51083 3.68661 1.3125 3.92578 1.3125C4.16495 1.3125 4.36328 1.51083 4.36328 1.75Z" fill="white"/>
                <path d="M12.6876 10.08C12.6876 10.1909 12.6468 10.3017 12.5593 10.3892L10.3893 12.5592C10.3076 12.6409 10.1968 12.6875 10.0802 12.6875C9.9635 12.6875 9.85265 12.6409 9.77098 12.5592L7.601 10.3892C7.43183 10.22 7.43183 9.94 7.601 9.77083C7.77016 9.60167 8.05016 9.60167 8.21933 9.77083L10.0802 11.6317L11.941 9.77083C12.1101 9.60167 12.3902 9.60167 12.5593 9.77083C12.6468 9.8525 12.6876 9.96335 12.6876 10.08Z" fill="white"/>
                <path d="M10.5117 1.75L10.5117 12.25C10.5117 12.4892 10.3134 12.6875 10.0742 12.6875C9.83505 12.6875 9.63672 12.4892 9.63672 12.25L9.63672 1.75C9.63672 1.51083 9.83505 1.3125 10.0742 1.3125C10.3134 1.3125 10.5117 1.51083 10.5117 1.75Z" fill="white"/>
            </svg>
        </div>
        <div class="btn-key-sort" data-index="4" data-type="string">
            <div class="f12-bold text-White">Coin</div>
            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.24038 5.32045L8.57191 0.963819C8.82351 0.634814 8.58891 0.160095 8.17473 0.160095L1.51167 0.160095C1.09749 0.160095 0.862898 0.634814 1.11449 0.96382L4.44602 5.32045C4.64614 5.58215 5.04026 5.58215 5.24038 5.32045Z" fill="white"/>
            </svg>
        </div>
        <div class="btn-key-sort" data-index="5" data-type="string">
            <div class="f12-bold text-White">Amount</div>
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.53338 3.9199C6.53338 4.03073 6.49253 4.14158 6.40503 4.22908C6.23587 4.39825 5.95587 4.39825 5.7867 4.22908L3.92587 2.36825L2.06503 4.22908C1.89586 4.39825 1.61587 4.39825 1.4467 4.22908C1.27753 4.05992 1.27753 3.77992 1.4467 3.61075L3.61672 1.44073C3.69838 1.35906 3.8092 1.31242 3.92587 1.31242C4.04253 1.31242 4.15338 1.35906 4.23505 1.44073L6.40503 3.61075C6.4867 3.69825 6.53338 3.80906 6.53338 3.9199Z" fill="white"/>
                <path d="M4.36328 1.75L4.36328 12.25C4.36328 12.4892 4.16495 12.6875 3.92578 12.6875C3.68661 12.6875 3.48828 12.4892 3.48828 12.25L3.48828 1.75C3.48828 1.51083 3.68661 1.3125 3.92578 1.3125C4.16495 1.3125 4.36328 1.51083 4.36328 1.75Z" fill="white"/>
                <path d="M12.6876 10.08C12.6876 10.1909 12.6468 10.3017 12.5593 10.3892L10.3893 12.5592C10.3076 12.6409 10.1968 12.6875 10.0802 12.6875C9.9635 12.6875 9.85265 12.6409 9.77098 12.5592L7.601 10.3892C7.43183 10.22 7.43183 9.94 7.601 9.77083C7.77016 9.60167 8.05016 9.60167 8.21933 9.77083L10.0802 11.6317L11.941 9.77083C12.1101 9.60167 12.3902 9.60167 12.5593 9.77083C12.6468 9.8525 12.6876 9.96335 12.6876 10.08Z" fill="white"/>
                <path d="M10.5117 1.75L10.5117 12.25C10.5117 12.4892 10.3134 12.6875 10.0742 12.6875C9.83505 12.6875 9.63672 12.4892 9.63672 12.25L9.63672 1.75C9.63672 1.51083 9.83505 1.3125 10.0742 1.3125C10.3134 1.3125 10.5117 1.51083 10.5117 1.75Z" fill="white"/>
            </svg>
        </div>
        <div class="btn-key-sort" data-index="6" data-type="string">
            <div class="f12-bold text-White">Status</div>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.5 6.4585H2.5C2.15833 6.4585 1.875 6.17516 1.875 5.8335C1.875 5.49183 2.15833 5.2085 2.5 5.2085H17.5C17.8417 5.2085 18.125 5.49183 18.125 5.8335C18.125 6.17516 17.8417 6.4585 17.5 6.4585Z" fill="white"/>
                <path d="M15 10.625H5C4.65833 10.625 4.375 10.3417 4.375 10C4.375 9.65833 4.65833 9.375 5 9.375H15C15.3417 9.375 15.625 9.65833 15.625 10C15.625 10.3417 15.3417 10.625 15 10.625Z" fill="white"/>
                <path d="M11.6668 14.7915H8.3335C7.99183 14.7915 7.7085 14.5082 7.7085 14.1665C7.7085 13.8248 7.99183 13.5415 8.3335 13.5415H11.6668C12.0085 13.5415 12.2918 13.8248 12.2918 14.1665C12.2918 14.5082 12.0085 14.7915 11.6668 14.7915Z" fill="white"/>
            </svg>
        </div>
    </div>
    <table class="list-transaction-content content-sort w-100">
        <tbody>
          @if($collaterals->isNotEmpty())
             @foreach ($collaterals as $collateral)
                <tr class="tf-table-item checked"
                    data-bs-toggle="modal"
                    data-bs-target="#collateralModal"
                    data-id="{{ $collateral->collateral_id }}"
                    data-asset="{{ $collateral->asset_name }}"
                    data-amount="{{ number_format($collateral->usd_value, 2) }}"
                    data-wallet-address="{{ $collateral->wallet_address }}"
                    data-status="{{ strtoupper($collateral->status) }}"
                    data-amount-pending="{{ number_format($collateral->pending_usd_value, 2) }}"
                    data-date="{{ Carbon::parse($collateral->updated_at)->format('F j, Y') }}"
                    data-time="{{ Carbon::parse($collateral->updated_at)->format('h:i a') }}"
                    data-created-date="{{ Carbon::parse($collateral->created_at)->format('F j, Y') }}"
                    data-created-time="{{ Carbon::parse($collateral->created_at)->format('h:i a') }}"
                    >
                
                    <td>
                        <div class="tf-cart-checkbox">
                            <div class="tf-checkbox-wrapp">
                                <input class="checkbox-item" type="checkbox" name="transaction_checkbox" checked>
                                <div>
                                    <i class="icon-check"></i>
                                </div>
                            </div>
                            <div class="f12-medium text-break key-sort" data-title="Collateral ID : ">
                                #{{$collateral->collateral_id}}
                            </div>
                        </div>
                    </td>
                <td>
                    <div class="f12-bold key-sort">
                        {{Carbon::parse($collateral->updated_at)->format('F j, Y ');}} <br>
                         {{Carbon::parse($collateral->updated_at)->format('h:i a ');}} <br>
                        <span class="f12-medium">Last updated</span>
                    </div>
                </td>
                <td>
                    <div class="wrap-image">
                        <div class="image">
                            <img src="{{ asset('assets/images/item/' . $collateral->asset_name . '.svg') }}" alt="">
                        </div>
                        
                    </div>
                </td>
                <td>
                    <div class="wrap-image">
                       
                        <div class="f12-medium name key-sort">{{$collateral->asset_name}}</div>
                    </div>
                </td>
                <td>
                    <div class="wrap-image style-1">
                        <div class="image">
                            <img src="{{ asset('assets/images/item/' . $collateral->asset_name . '.svg') }}" alt="">
                        </div>
                        <div class="f12-bold key-sort">{{$collateral->asset_name}}</div>
                    </div>
                </td>
                <td>
                    <div class="f12-medium key-sort" data-title="Amount : ">${{number_format($collateral->usd_value, 2)}}</div>
                </td>
               <td>
                    @switch($collateral->status)
                        @case('locked')
                            <div class="box-status bg-LightGray type-red">
                                <i class="icon icon-lock"></i>
                                <span class="font-poppins key-sort">{{ strtoupper($collateral->status) }}</span>
                            </div>
                            @break

                        @case('active')
                            <div class="box-status bg-YellowGreen">
                                <i class="icon icon-check"></i>
                                <span class="font-poppins key-sort">{{ strtoupper($collateral->status) }}</span>
                            </div>
                            @break

                        @case('released')
                            <div class="box-status bg-LightGray">
                                <i class="icon icon-unlock"></i>
                                <span class="font-poppins key-sort">{{ strtoupper($collateral->status) }}</span>
                            </div>
                            @break

                        @case('liquidated')
                            <div class="box-status bg-danger">
                                <i class="icon icon-alert-triangle"></i>
                                <span class="font-poppins key-sort">{{ strtoupper($collateral->status) }}</span>
                            </div>
                            @break

                        @default
                            <div class="box-status bg-secondary">
                                <i class="icon icon-help-circle"></i>
                                <span class="font-poppins key-sort">UNKNOWN</span>
                            </div>
                    @endswitch
                </td>
                

            </tr>
           @endforeach
          @else
          <tr>
            <center>No Collaterals Found</center>
          </tr>
          @endif
        </tbody>
    </table>
</div>
</div>
</div>


<div class="modal fade" id="collateralModal" tabindex="-1" aria-labelledby="collateralModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content modern-card-design">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title" id="collateralModalLabel">
          <i class="bi bi-cpu-fill me-2 text-primary-accent"></i>Collateral Details
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body pt-0">
        <div class="info-group">
          <div class="info-item">
            <span class="info-label">Collateral ID</span>
            <span class="info-value" id="modalCollateralId"></span>
          </div>
          <div class="info-item">
            <span class="info-label">Asset</span>
            <span class="info-value" id="modalAsset"></span>
          </div>
        </div>
        <div class="info-group">
          <div class="info-item">
            <span class="info-label">Amount (USD)</span>
            <span class="info-value" id="modalAmount"></span>
          </div>
          <div class="info-item">
            <span class="info-label">Pending (USD)</span>
            <span class="info-value" id="modalAmountPending"></span>
          </div>
        </div>
        <div class="info-item info-item-full">
          <span class="info-label">Wallet Address</span>
          <span class="info-value-block" id="walletAddress"></span>
        </div>
        <div class="info-group">
           <div class="info-item">
            <span class="info-label">Created Date/Time</span>
            <div>
              <span class="info-value" id="CmodalDate"></span>
              <span class="info-value" id="CmodalTime"></span>
            </div>
          </div>
          <div class="info-item">
            <span class="info-label">Updated Date/Time</span>
            <div>
              <span class="info-value" id="modalDate"></span>
              <span class="info-value" id="modalTime"></span>
            </div>
          </div>
        </div>
        <div class="info-item">
            <span class="info-label">Status</span>
            <span class="box-status bg-LightGray" id="modalStatus"></span>
          </div>
      </div>

      <div class="modal-footer border-0 pt-0">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          <i class="bi bi-x-circle me-1"></i> Close
        </button>
        <button type="button" class="btn btn-primary">
          <i class="bi bi-download me-1"></i> Download Report
        </button>
      </div>
    </div>
  </div>
</div>

<!-- ===== Add this CSS to your <style> section ===== -->
<style>
  :root {
    --card-bg: #ffffff;
    --card-border-color: #e0e0e0;
    --text-color: #333333;
    --label-color: #888888;
    --primary-color: #007bff;
    --primary-accent: #007bff; /* Use your preferred accent color */
    --secondary-color: #6c757d;
    --success-color: #28a745;
  }

  /* Modern Card Design */
  .modern-card-design {
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    background-color: var(--card-bg);
    color: var(--text-color);
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    border: 1px solid var(--card-border-color);
  }

  .modal-header {
    border-bottom: none;
    padding: 1.5rem 1.5rem 0.5rem;
  }

  .modal-title {
    font-weight: 600;
    font-size: 1.25rem;
    color: var(--text-color);
  }

  .modal-body {
    padding: 0.5rem 1.5rem 1.5rem;
  }

  .modal-footer {
    border-top: none;
    padding: 0 1.5rem 1.5rem;
  }

  /* Information Layout */
  .info-group {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.25rem;
    margin-bottom: 1rem;
  }

  .info-item {
    display: flex;
    flex-direction: column;
  }

  .info-item-full {
    margin-bottom: 1rem;
  }

  .info-label {
    font-size: 0.8rem;
    font-weight: 500;
    color: var(--label-color);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 0.25rem;
  }

  .info-value {
    font-size: 1rem;
    font-weight: 600;
    color: var(--text-color);
  }

  .info-value-block {
    font-size: 1rem;
    font-weight: 600;
    color: var(--text-color);
    word-break: break-all;
  }

  /* Status Badge */
  .status-badge {
    display: inline-block;
    font-size: 0.8rem;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 50px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #fff;
    background-color: #6c757d; /* Default status color */
  }
  /* You can add specific colors based on the status value via JavaScript */
  /* e.g., if status is "Active", add a class `status-active` */
  .status-badge[data-status="active"] {
    background-color: var(--success-color);
  }
  .status-badge[data-status="pending"] {
    background-color: var(--secondary-color);
  }
  .status-badge[data-status="closed"] {
    background-color: #dc3545;
  }

  /* Button Styles */
  .btn-secondary {
    color: var(--text-color);
    background-color: var(--card-border-color);
    border: 1px solid var(--card-border-color);
  }

  .btn-primary {
    background-color: var(--primary-color);
    border: 1px solid var(--primary-color);
    transition: background-color 0.2s ease, box-shadow 0.2s ease;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }

  .btn-close {
    opacity: 0.5;
    transition: opacity 0.2s ease;
  }

  .btn-close:hover {
    opacity: 1;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .info-group {
      grid-template-columns: 1fr;
    }
  }
</style>

<!-- ===== Script to Populate Modal Dynamically ===== -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
      const modal = document.getElementById('collateralModal');
      modal.addEventListener('show.bs.modal', function(event) {
          const button = event.relatedTarget;
          document.getElementById('modalCollateralId').textContent = button.getAttribute('data-id');
          document.getElementById('modalAsset').textContent = button.getAttribute('data-asset');
          document.getElementById('modalAmount').textContent = "$" + button.getAttribute('data-amount');
          document.getElementById('modalStatus').textContent = button.getAttribute('data-status');
          document.getElementById('walletAddress').textContent = button.getAttribute('data-wallet-address') || 'N/A';
          document.getElementById('CmodalDate').textContent = button.getAttribute('data-created-date');
          document.getElementById('CmodalTime').textContent = button.getAttribute('data-created-time');
          document.getElementById('modalAmountPending').textContent = "$" + button.getAttribute('data-amount-pending');
          document.getElementById('modalDate').textContent = button.getAttribute('data-date');
          document.getElementById('modalTime').textContent = button.getAttribute('data-time');
      });
  });
</script>
@endsection