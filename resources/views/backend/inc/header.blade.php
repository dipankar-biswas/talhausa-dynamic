<header class="layout-header">
    <div class="header-content">
        <div class="left">
            <div class="aside-open dt-none ph-lg-block icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="search icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        <div class="right">
            <div class="language icon">
                <i class="fa-solid fa-language"></i>
            </div>
            <div class="notification icon">
                <i class="fa-regular fa-bell"></i>
            </div>
            <div class="avatar">
                <img class="user-options-btn" src="{{ asset('backend/images/user.png') }}" alt="Avatar">
                <div class="user-options">
                    <div class="head">
                        <div class="image">
                            <img src="{{ asset('backend/images/user.png') }}" alt="Avatar">
                        </div>
                        <div class="content">
                            <div class="name">{{Auth::user()->name}}</div>
                            <div class="sub-title">admin</div>
                        </div>
                    </div>
                    <div class="body">
                        <hr>
                        <a href="{{ route('profile') }}" class="link">
                            <div class="icon"><i class="fa-regular fa-user"></i></div>
                            <div class="txt">Profile</div>
                        </a>
                        <a href="#" class="link">
                            <div class="icon"><i class="fa-solid fa-gear"></i></div>
                            <div class="txt">Settings</div>
                        </a>
                        <a href="#" class="link">
                            <div class="icon"><i class="fa-regular fa-credit-card"></i></div>
                            <div class="txt">Billing</div>
                        </a>
                        <hr>
                        <a href="#" class="link">
                            <div class="icon"><i class="fa-regular fa-life-ring"></i></div>
                            <div class="txt">Help</div>
                        </a>
                        <a href="#" class="link">
                            <div class="icon"><i class="fa-solid fa-dollar-sign"></i></div>
                            <div class="txt">Pricing</div>
                        </a>
                        <a href="#" class="link">
                            <div class="icon"><i class="fa-solid fa-question"></i></div>
                            <div class="txt">FAQ</div>
                        </a>
                        <hr>
                        <a href="{{Route('logout')}}" class="link">
                            <div class="icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></div>
                            <div class="txt">Logout</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>