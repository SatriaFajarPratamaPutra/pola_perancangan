<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Film Hub</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #111;
            color: #fff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .film-card {
            background-color: #222;
            border: 1px solid #444;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .film-card img {
            width: 100px;
            height: 150px;
            margin-right: 15px;
            border-radius: 8px;
            object-fit: cover;
        }

        .film-info {
            flex-grow: 1;
        }

        .film-info h3 {
            margin-bottom: 5px;
        }

        .film-info p {
            margin: 0;
            font-size: 14px;
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Film</h1>

        @foreach ($films as $film)
            <div class="film-card">
                <img src="{{ asset('storage/' . $film->poster) }}" alt="Poster {{ $film->judul }}">
                <div class="film-info">
                    <h3>{{ $film->judul }} ({{ $film->tahun }})</h3>
                    <p>Genre: {{ $film->genre }}</p>
                    <p>Durasi: {{ $film->durasi }}</p>
                    <p>Rating: {{ $film->rating }}/5</p>
                    <p>Direktur: {{ $film->sutradara }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
