<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up in to CodingDuck</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('public')}}/frontend/register/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('public')}}/frontend/register/css/style.css">
</head>
<body>
    <div class="main">

        <div class="container">
            <div class="signup-content">
                <form method="POST" action="{{ route('register') }}" id="signup-form" class="signup-form">
                    @csrf
                    <h2>Sign up</h2>
                    <div class="form-group">
                        {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label> --}}
                        <input name="role" type="text" list="browsers" required placeholder="Enter Your Role" />
                           <datalist id="browsers">
                           <option value="Admin">
                           <option value="User">

                         </datalist>
                        @error('role')
                        <span
                        class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}
                        <input type="text" class="form-input  @error('name') is-invalid @enderror" name="name" id="name"  value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name"/>
                    @error('name')
                        <span
                        class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label> --}}
                        <input type="tel" class="form-input  @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Enter Your Phone"/>
                    @error('phone')
                         <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label> --}}
                        <input type="email" class="form-input  @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email"/>
                    @error('email')
                         <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __(' Password') }}</label> --}}
                        <input type="password" class="form-input  @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Enter your Password"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group row">
                        {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> --}}

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Your Password">
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div> --}}
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit submit" value="Sign up"/>
                        {{-- <a href="#" class="submit-link submit">Sign in</a> --}}
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('public')}}/frontend/register/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('public')}}/frontend/register/js/main.js"></script>
</body>
</html>
