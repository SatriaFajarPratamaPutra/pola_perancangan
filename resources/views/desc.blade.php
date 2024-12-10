<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie->judul }} - Film Hub</title>
    <style>
        /* General Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #111;
            color: #fff;
            display: flex;
            height: 100vh;
        }

        /* Main Content */
        .main-content {
            width: 100%;
            padding: 20px;
            overflow-y: auto;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #222;
            margin-bottom: 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .logo span {
            color: #f0ad4e;
        }

        .user-icon {
            position: relative;
            cursor: pointer;
        }

        .user-icon img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid #f0ad4e;
        }

        .login-button {
            position: absolute;
            top: 50px;
            right: 0;
            display: none;
            background-color: #f0ad4e;
            color: #000;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        /* Movie Details */
        .movie-details {
            display: flex;
            gap: 20px;
            margin-top: 20px;
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.6);
        }

        .movie-details img {
            width: 300px;
            height: 450px;
            object-fit: cover;
            border-radius: 10px;
        }

        .movie-info {
            max-width: 600px;
        }

        .movie-title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #f0ad4e;
        }

        .movie-description p {
            margin-bottom: 15px;
            font-size: 18px;
        }

        .movie-description strong {
            color: #f0ad4e;
        }

        /* Genre Section */
        .genre-section {
            margin-top: 20px;
        }

        .genre-title {
            font-size: 24px;
            color: #f0ad4e;
            text-align: center;
            margin-bottom: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <div class="logo">FILM<span>HUB</span></div>
            <div class="user-icon" id="userIcon">
                <img src="https://via.placeholder.com/40" alt="User Icon">
                <button class="login-button" id="loginButton">Login</button>
            </div>
        </div>

        <!-- Movie Details Section -->
        <div class="movie-details">
            <!-- Poster Image -->
            <img src="{{ asset('storage/' . $movie->poster) }}" alt="Poster {{ $movie->judul }}">

            <div class="movie-info">
                <!-- Movie Title -->
                <div class="movie-title">{{ $movie->judul }}</div>

                <!-- Movie Details -->
                <div class="movie-description">
                    <p><strong>Tahun:</strong> {{ $movie->tahun }}</p>
                    <p><strong>Genre:</strong> {{ $movie->genre }}</p>
                    <p><strong>Durasi:</strong> {{ $movie->durasi }}</p>
                    <p><strong>Rating:</strong> {{ $movie->rating }}</p>
                    <p><strong>Deskripsi:</strong> {{ $movie->sinopsis }}</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
