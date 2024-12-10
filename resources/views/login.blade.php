<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Hub - Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            text-align: center;
        }

        .logo {
            display: inline-flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo span:first-child {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }

        .logo span:last-child {
            font-size: 24px;
            font-weight: bold;
            color: #f1a41b;
            background-color: #000;
            padding: 2px 5px;
            border-radius: 4px;
        }

        .login-box {
            background-color: #1e1e1e;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
            max-width: 300px;
            margin: 0 auto;
        }

        .login-box input {
            width: 93%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            font-size: 14px;
        }

        .login-box input::placeholder {
            color: #aaa;
        }

        .login-box button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: #f1a41b;
            color: #000;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .login-box button:hover {
            background-color: #d98d1a;
        }

        .register {
            margin-top: 10px;
            font-size: 12px;
        }

        .register a {
            color: #f1a41b;
            text-decoration: none;
        }

        .register a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: #e74c3c;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <span>FILM</span><span>HUB</span>
        </div>
        <div class="login-box">
            <!-- Tampilkan error jika ada -->
            @if ($errors->has('login_error'))
                <div class="error-message">
                    {{ $errors->first('login_error') }}
                </div>
            @endif

            <!-- Form login -->
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Log In</button>
            </form>

            <div class="register">
                Don't have an account? <a href="{{ route('register') }}">Register Now</a>
            </div>
        </div>
    </div>
</body>
</html>
