<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" >
    <title>Admin Panel | My Task</title>
    @php
    $setup = \App\Models\SiteSetup::where('id',1)->first();
    @endphp
    <link rel="icon" type="image/x-icon" href="{{ asset($setup->header_logo) }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link href="{{ asset('backend/css/main.css') }}" rel="stylesheet" >
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

    @yield('admin.styles')
  </head>
  <body>

    <div id="apps">
        @include('backend.inc.sidebar')
        <div class="wrapper">
            @include('backend.inc.header')
            <div class="main-content">
                @yield('admin.content')
                @include('backend.inc.footer')
            </div>
        </div>
        <div class="site-overly"></div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/js/menu-active.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/main.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-bottom-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
    
        @if(Session::has('success'))
            toastr.success('{{Session::get('success')}}', 'Success!');
            @php
                Session::forget("success");
            @endphp
        @elseif(Session::has('info'))
            toastr.info('{{Session::get('info')}}', 'Info!')
            @php
                Session::forget("info");
            @endphp
        @elseif(Session::has('warning'))
            toastr.warning('{{Session::get('warning')}}', 'Warning!')
            @php
                Session::forget("warning");
            @endphp
        @elseif(Session::has('error'))
            toastr.error('{{Session::get('error')}}', 'Fail!')
            @php
                Session::forget("error");
            @endphp
        @endif
        
    </script>
    @yield('admin.scripts')
  </body>
</html>