<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Talha USA | Forget Password</title>
        <link rel="stylesheet" type="text/css" href="{{asset('backend/css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('backend/css/style.css')}}">
    </head>
    <body>
        
        <div class="auth-form">
            <div class="form-data">
                <form action="{{ route('password.email') }}" method="post">
                    @csrf

                    <div class="head">
                        @php
                            $setup = \App\Models\SiteSetup::where('id',1)->first();
                        @endphp
                        <h1>
                            @if(isset($setup->header_logo))
                                <img src="{{ asset($setup->header_logo) }}" alt="Logo">
                            @endif
                        </h1>
                        @if($errors->any())
                            <p style="color:red;background: #ddd;margin-top: 10px;">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </p>
                        @endif
                    </div>

                    <div class="body">
                        <div class="input-box">
                            <input type="email" placeholder="Email" name="email" required>
                            <i class='bx bxs-user'></i>
                        </div>
                    </div>
                    <div class="foot">
                        <button type="submit" class="btn">Forget Password</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>