<div class="wrap">
    <div class="header-left">
        <div class="button-show-hide">
            <i class="icon-menu"></i>
        </div>
        <h6>Dashboard</h6>
        <form class="form-search flex-grow" method="GET">
            @csrf
            <fieldset class="name">
                <input type="text" placeholder="Type to search…" class="show-search style-1" name="name" tabindex="2" value="" aria-required="true" required="">
            </fieldset>
            <div class="button-submit">
                <button class="" type="submit"><i class="icon-search-normal1"></i></button>
            </div>
        </form>
    </div>
    <div class="header-grid">
        
        <div class="line1"></div>
         @php
            $user = Auth::user();
        @endphp
        <div class="popup-wrap user type-header">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="header-user wg-user">
                        <span class="image">
                            <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : 'https://www.gravatar.com/avatar/' . md5(strtolower(trim(Auth::user()->email))) . '?s=30&d=identicon' }}" alt="">
                        </span>
                        <span class="content flex flex-column">
                            <span class="label-02 text-Black name">{{ explode(' ', trim($user->name))[0] ?? 'User' }}</span>
                            <span class="f14-regular text-Gray">User</span>
                        </span>
                    </span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton3">
                    <li>
                        <a href="{{ route('account') }}" class="user-item">
                            <div class="body-title-2">Account</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('inbox') }}" class="user-item">
                            <div class="body-title-2">Inbox</div>
                            <div class="number">27</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('transaction') }}" class="user-item">
                            <div class="body-title-2">Transaction</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('settings') }}" class="user-item">
                            <div class="body-title-2">Settings</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('verify') }}" class="user-item">
                            <div class="body-title-2">Verification</div>
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="user-item">
                                <div class="body-title-2">Log out</div>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>