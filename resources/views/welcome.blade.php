<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Hub</title>
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
        }

        /* Sidebar Navigation */
        .sidebar {
            width: 250px;
            background-color: #222;
            padding: 20px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            overflow-y: auto;
        }

        .sidebar h3 {
            margin-bottom: 10px;
            color: #f0ad4e;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li label {
            display: flex;
            align-items: center;
            cursor: pointer;
            font-size: 14px;
        }

        .sidebar ul li input[type="checkbox"] {
            margin-right: 10px;
            cursor: pointer;
        }

        .filter-button {
            background-color: #f0ad4e;
            border: none;
            color: #000;
            padding: 10px;
            margin-top: 20px;
            width: 100%;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Main Content */
        .main-content {
            margin-left: 270px;
            width: calc(100% - 270px);
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #222;
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

        /* Content */
        .content {
            padding: 20px;
        }

        .section-title {
            margin: 20px 0;
            font-size: 24px;
            color: #f0ad4e;
        }

        .movies-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .movie-card {
            background-color: #222;
            border: 1px solid #444;
            border-radius: 10px;
            overflow: hidden;
            width: 200px;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
        }

        .movie-card img {
            width: 100%;
            display: block;
        }

        .movie-title {
            text-align: center;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Kategori Usia</h3>
        <ul>
            <li><label><input type="checkbox"> SU</label></li>
            <li><label><input type="checkbox"> R13</label></li>
            <li><label><input type="checkbox"> D17</label></li>
            <li><label><input type="checkbox"> D21</label></li>
        </ul>

        <h3>Kategori Film</h3>
        <ul>
            <li><label><input type="checkbox"> Most Popular</label></li>
            <li><label><input type="checkbox"> Most Viewed</label></li>
            <li><label><input type="checkbox"> Longest</label></li>
            <li><label><input type="checkbox"> Rating 5</label></li>
        </ul>

        <h3>Genre</h3>
        <ul>
            <li><label><input type="checkbox"> Action</label></li>
            <li><label><input type="checkbox"> Comedy</label></li>
            <li><label><input type="checkbox"> Drama</label></li>
            <li><label><input type="checkbox"> Thriller</label></li>
            <li><label><input type="checkbox"> Romance</label></li>
        </ul>

        <button class="filter-button">Filter</button>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <div class="logo">FILM<span>HUB</span></div>
            <div class="user-icon" id="userIcon">
                <img src="https://via.placeholder.com/40" alt="User Icon">
                <button class="login-button" id="loginButton">Login</button>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="section">
                <div class="section-title">Comedy</div>
                <div class="movies-grid">
                    <div class="movie-card">
                        <img src="{{ asset('storage/posters/cMMt3UjXtWI1STELBaw0cCdwuiS0zdVkkJzk5xZE.jpg') }}" alt="Movie Poster">
                        <div class="movie-title">Lara Ati</div>
                    </div>
                    <div class="movie-card">
                        <img src="{{ asset('storage/posters/5pbNbTaIx1OdeA6XlYRfiwPHu15URlU8XjUz8Agb.jpg') }}" alt="Movie Poster">
                        <div class="movie-title">Warkop DKI Reborn</div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section-title">Drama</div>
                <div class="movies-grid">
                    <div class="movie-card">
                        <img src="{{ asset('storage/posters/vr01PGYo131yVOt8NBTyk82VSRd1JpRPH5dZmwDB.jpg') }}" alt="Movie Poster">
                        <div class="movie-title">Start Up</div>
                    </div>
                    <div class="movie-card">
                        <img src="{{ asset('storage/posters/K6N7a4oZ7f5IHLWqKHkA14vfLrgXGr2FJfdd8ZUQ.jpg') }}" alt="Movie Poster">
                        <div class="movie-title">Love For Sale</div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        userIcon.addEventListener('click', () => {
            // Toggle the display of the login button
            if (loginButton.style.display === 'block') {
                loginButton.style.display = 'none';
            } else {
                loginButton.style.display = 'block';
            }
        });

        loginButton.addEventListener('click', () => {
            // Redirect to the login page
            window.location.href = '/logi'; // Update with your login page URL
        });

    </script>
</body>
</html>
