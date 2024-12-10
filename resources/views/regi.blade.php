<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #222;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
        }
        .form-container input, .form-container button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }
        .form-container input {
            background: #333;
            color: #fff;
        }
        .form-container button {
            background: #f90;
            color: #000;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Register</h2>
        <form action="{{ route('register.post') }}" method="POST">
            @csrf <!-- Token CSRF untuk keamanan -->
            <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
            @error('username')<small style="color: red;">{{ $message }}</small>@enderror
        
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            @error('email')<small style="color: red;">{{ $message }}</small>@enderror
        
            <input type="password" name="password" placeholder="Password" required>
            @error('password')<small style="color: red;">{{ $message }}</small>@enderror
        
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            
            <button type="submit">Register</button>
        </form>
        
    </div>
</body>
</html>
