<aside>
    <nav>
        <div class="brand">
            <a href="{{url('dashboard')}}">
                <span class="logo"></span>
                <span class="text">SKB</span>
            </a>
            <div class="action">
                <span class="ph-lg-none">*</span>
                <span class="dt-none dt-lg-block aside-close"><i class="fa-solid fa-xmark"></i></span>
            </div>
        </div>
        <ul class="navbar-nav">
            <li class="">
                <a href="{{Route('home-page')}}" class="link-item" target="_blank"><span>Site Visit</span></a>
            </li>
            <li class="tree">
                <a href="{{Route('admin.dashboard')}}" class="link-item"><span>Dashboard</span></a>
            </li>
            {{-- <li class="tree">
                <a href="javascript:void(0)"><span>Brand</span></a>
                <ul>
                    <li><a href="{{Route('brand.addbrand')}}" class="link-item">Add Brand</a></li>
                </ul>
            </li> --}}

            <li class="tree">
                <a href="javascript:void(0)"><span>Order</span></a>
                <ul>
                    <li><a href="{{Route('list.orderlist')}}" class="link-item">Order List</a></li>
                </ul>
            </li>
            
            <li class="tree">
                <a href="javascript:void(0)"><span>Categories</span></a>
                <ul>
                    <li><a href="{{Route('category.addcategory')}}" class="link-item">Add Category</a></li>
                </ul>
            </li>


            <li class="tree">
                <a href="javascript:void(0)"><span>Size</span></a>
                <ul>
                    <li><a href="{{ Route('sizes') }}" class="link-item">Add Size</a></li>
                </ul>
            </li>

            <li class="tree">
                <a href="javascript:void(0)"><span>Color</span></a>
                <ul>
                    <li><a href="{{Route('color.addcolor')}}" class="link-item">Add Color</a></li>
                </ul>
            </li>
            <li class="tree">
                <a href="javascript:void(0)"><span>Slider</span></a>
                <ul>
                    <li><a href="{{Route('slide.slidelist')}}" class="link-item">Add Slide</a></li>
                </ul>
            </li>
            <li class="tree">
                <a href="javascript:void(0)"><span>Tshirt</span></a>
                <ul>
                    <li><a href="{{Route('neck.necklist')}}" class="link-item">Tshirt List</a></li>
                </ul>
            </li>
            <li class="tree">
                <a href="javascript:void(0)"><span>Products</span></a>
                <ul>
                    <li><a href="{{Route('product.addproduct')}}" class="link-item">Add Product</a></li>
                </ul>
            </li>
            <li class="tree">
                <a href="javascript:void(0)"><span>User</span></a>
                <ul>
                    <li><a href="{{Route('register')}}" class="link-item">Add User</a></li>
                </ul>
            </li>
            <li class="tree">
                <a href="javascript:void(0)"><span>Apparence</span></a>
                <ul>
                    <li><a href="{{ route('slides') }}" class="link-item">Slides</a></li>
                    <li><a href="{{ route('banners') }}" class="link-item">Banners</a></li>
                    <li><a href="{{ route('site.setup') }}" class="link-item">Website Setup</a></li>
                </ul>
            </li>
            <li class="tree">
                <a href="{{ route('profile') }}" class="link-item"><span>Profile</span></a>
            </li>
        </ul>
    </nav>
</aside>