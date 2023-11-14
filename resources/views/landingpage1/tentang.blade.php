<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUTANOL APPLICATION</title>
    <link href="asset/images/logoB.png" rel="icon">
    <style>
        body {
            background-color: #9fb0ce;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #154291;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            margin-top: 20px;
            text-align: center;
        }

        nav a {
            color: #333;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header>
        <h1>Tentang Kami</h1>
    </header>

    <nav>
        <a href="{{ route('landingpage1') }}">Beranda</a>
        <a href="{{ route('layanan') }}">Layanan</a>
        <a href="{{ route('tentang') }}">Tentang Kami</a>
        <a href="{{ route('kontak') }}">Kontak</a>
    </nav>

    <div class="container">
        <!-- Konten tentang kami di sini -->
    </div>
</body>
</html>
