<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('admin') }}/img/logo_sumbar.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('admin') }}/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"
                ],
                urls: ['{{ asset('admin') }}/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/css/atlantis.css">

    <style>
        .captcha-img img {
            width: 100% !important;
            max-width: 180px;
        }
    </style>
</head>

<div style="margin-bottom:-80px;margin-top:20px;">
    <center>
        <img style="padding: 10px;background-color: #253425;border-radius:4px;" src="{{ asset('front/images/logo.png') }}" alt="Logo" class="mb-2" width="250">
    </center>
</div>

<body class="login">
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">

            <h3 class="text-center">Silahkan Login</h3>
            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="placeholder"><b>Email</b></label>
                    <input id="email" name="email" type="email"
                        class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                        required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="placeholder"><b>Password</b></label>
                    <div class="position-relative">
                        <input id="password" name="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="show-password">
                            <i class="icon-eye"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group form-action-d-flex mb-3">
                    <button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Sign
                        In</button>
                </div>
                <center>
                    <script id="_waug6k">
                        var _wau = _wau || [];
                        _wau.push(["small", "2ubo6n2wa5", "g6k"]);
                    </script>
                    <script async src="//waust.at/s.js"></script>
                </center>
            </form>
        </div>

    </div>
    <script src="{{ asset('admin') }}/js/core/jquery.3.2.1.min.js"></script>
    <script src="{{ asset('admin') }}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="{{ asset('admin') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('admin') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('admin') }}/js/atlantis.min.js"></script>
</body>


</html>
