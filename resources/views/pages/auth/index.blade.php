<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Register Page</title>
    <link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/_partials/error.css') }}">
</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="wrapper">
        {{-- Register --}}
        <div class="form-container sign-up">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h2>sign up</h2>
                <div class="form-group">
                    <input type="text" name="username">
                    <label for="username">username</label>
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-group">
                    <input type="email" name="email">
                    <label for="email">email</label>
                    <i class="fas fa-at"></i>
                </div>
                <div class="form-group">
                    <input type="password" name="password">
                    <label for="password">password</label>
                    <i class="fas fa-lock"></i>
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation">
                    <label for="confirmation_password">confirm password</label>
                    <i class="fas fa-lock"></i>
                </div>
                <button type="submit" class="btn">sign up</button>
                <div class="link">
                    <p>You already have an account?<a href="#" class="signin-link"> sign in</a></p>
                </div>
            </form>
        </div>
        {{-- End Register --}}

        {{-- Start Login --}}
        <div class="form-container sign-in">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h2>login</h2>
                <div class="form-group">
                    <input type="email" name="email">
                    <label for="email">email</label>
                    <i class="fas fa-at"></i>
                </div>
                <div class="form-group">
                    <input type="password" name="password">
                    <label for="password">password</label>
                    <i class="fas fa-lock"></i>
                </div>
                {{-- <div class="forgot-pass">
                    <a href="#">forgot password?</a>
                </div> --}}
                <button type="submit" class="btn">login</button>
                <div class="link">
                    <p>Don't have an account?<a href="#" class="signup-link"> sign up</a></p>
                </div>
            </form>
        </div>
        {{-- End Login --}}

    </div>
    <script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
    <script src="{{ asset('signin-up/js/script.js') }}"></script>
</body>

</html>
