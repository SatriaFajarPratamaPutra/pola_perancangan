<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Film - Film Hub</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #111;
            color: #fff;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background-color: #222;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }

        .logo span {
            color: #f0ad4e;
        }

        .user-icon {
            cursor: pointer;
            font-size: 20px;
        }

        /* Form Container */
        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #000;
            border: 1px solid #444;
            border-radius: 10px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #f0ad4e;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            background-color: #222;
            border: 1px solid #444;
            color: #fff;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-group input[type="file"] {
            padding: 5px;
        }

        /* Submit Button */
        .submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #f0ad4e;
            color: #000;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #e09c3b;
        }

        /* File Input Styling */
        .file-input {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #222;
            border: 1px solid #444;
            padding: 5px;
            border-radius: 5px;
        }

        .file-input input[type="file"] {
            flex-grow: 1;
            color: #fff;
        }

        .file-input .close-btn {
            background-color: #f0ad4e;
            color: #000;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 16px;
            padding: 5px 8px;
        }

        .file-input .close-btn:hover {
            background-color: #e09c3b;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="logo">FILM<span>HUB</span></div>
        <div class="user-icon">🔍</div>
    </div>

    <!-- Form Container -->
    <div class="form-container">
        <h2>Tambah Film</h2>
        <form action="{{ route('adm.page') }}" method="post" enctype="multipart/form-data">
            <!-- Judul Film -->
            <div class="form-group">
                <label for="judul">Judul Film</label>
                <input type="text" id="judul" name="judul" placeholder="Masukkan judul film" required>
            </div>
            <!-- Tahun Film -->
            <div class="form-group">
                <label for="tahun">Tahun Film</label>
                <input type="number" id="tahun" name="tahun" placeholder="Masukkan tahun rilis" required>
            </div>
            <!-- Genre Film -->
            <div class="form-group">
                <label for="genre">Genre Film</label>
                <input type="text" id="genre" name="genre" placeholder="Masukkan genre film" required>
            </div>
            <!-- Durasi Film -->
            <div class="form-group">
                <label for="durasi">Durasi Film</label>
                <input type="text" id="durasi" name="durasi" placeholder="Masukkan durasi film" required>
            </div>
            <!-- Rating Film -->
            <div class="form-group">
                <label for="rating">Rating Film</label>
                <input type="number" step="0.1" id="rating" name="rating" placeholder="Masukkan rating film (1-5)" required>
            </div>
            <!-- Referensi -->
            <div class="form-group">
                <label for="referensi">Referensi</label>
                <input type="text" id="referensi" name="referensi" placeholder="Masukkan referensi" required>
            </div>
            <!-- Sutradara -->
            <div class="form-group">
                <label for="sutradara">Sutradara</label>
                <input type="text" id="sutradara" name="sutradara" placeholder="Masukkan nama sutradara" required>
            </div>
            <!-- Sinopsis Film -->
            <div class="form-group">
                <label for="sinopsis">Sinopsis Film</label>
                <textarea id="sinopsis" name="sinopsis" rows="5" placeholder="Masukkan sinopsis film" required></textarea>
            </div>
            <!-- Poster Film -->
            <div class="form-group">
                <label for="poster">Poster Film</label>
                <div class="file-input">
                    <input type="file" id="poster" name="poster" accept="image/*" required>
                    <button type="button" class="close-btn">&times;</button>
                </div>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
