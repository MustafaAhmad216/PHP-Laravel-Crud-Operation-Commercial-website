<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body>
    <div>

        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a style="color: white; " href="{{ url('/home') }}">Home</a>
                @else
                    <a style="color: #267871; margin: 0px 20px;" href="{{ route('login') }}" >Log in</a>
                    @if (Route::has('register'))
                        <a style="color: #136a8a;"  href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <br>


    <section style="background:#136a8a;" class='login_register' id='login_register'>
        <div class='head'>
            <h1 class='company'>
                <pre>                           Registeration Form                           </pre>
            </h1>
        </div>
        <br>

        <div class='form'>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <br>

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input style=" margin-top: 5px; margin-bottom: 5px; " id="username" class='name'
                            type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <br>
                <br>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email:') }}</label>

                    <div class="col-md-6">
                        <input style=" margin-top: 5px; margin-bottom: 5px; " id="username" class='email'
                            type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <br> <br>


                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password:') }}</label>

                    <div class="col-md-6">
                        <input style=" margin-top: 5px; margin-bottom: 5px; " id="password" class='password'
                            type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <br>
                <br>

                <div class="row mb-3">
                    <label for="password-confirm"
                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input style=" margin-top: 5px; margin-bottom: 5px; " class='password' id="password-confirm"
                            type="password" class="form-control" name="password_confirmation" required
                            autocomplete="new-password">
                    </div>
                </div>

                <br>
                <button style="margin:0px 500px; padding: 12px 15px; border:0px 300px; text-align:center;"
                    type="submit" class='btn-login_register' id='do-login_register' value="register"> <b>Register</b>
                </button>
            </form>
        </div>

    </section>
</body>

</html>
