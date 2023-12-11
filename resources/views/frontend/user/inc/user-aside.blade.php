<div class="user-aside shadow rounded-3 overflow-hidden">
    <div class="head d-flex justify-content-center px-2 py-4">
        <div class="avatar text-center">
            <img src="{{ asset('frontend/assets/images/avatar.png') }}" alt="Avatar">
            <div class="title text-white mt-4 fs-4">Dipankar Biswas</div>
            <div class="subtitle text-white">example@gmail.com</div>
        </div>
    </div>
    <ul class="items px-2 py-4">
        <li class="item">
            <a href="{{ route('user.dashboard') }}" class="link active"><span class="icon"><i class="fa-solid fa-gauge"></i></span> <span class="txt">Dashboard</span></a>
        </li>
        <li class="item">
            <a href="{{ route('user.orders') }}" class="link"><span class="icon"><i class="fa-solid fa-bag-shopping"></i></span> <span class="txt">Orders</span></a>
        </li>
        <li class="item">
            <a href="{{ route('user.myaddress') }}" class="link"><span class="icon"><i class="fa-solid fa-location-dot"></i></span> <span class="txt">My Address</span></a>
        </li>
        <li class="item">
            <a href="{{ route('user.accountdetails') }}" class="link"><span class="icon"><i class="fa-regular fa-user"></i></span class="txt"> Account Details</a>
        </li>
        <li class="item">
            <a href="#" class="link"><span class="icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></span> <span class="txt">Logout</span></a>
        </li>
    </ul>
</div>