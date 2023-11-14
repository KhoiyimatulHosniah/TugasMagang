<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUTANOL APPLICATION</title>
    <link href="asset/images/logoB.png" rel="icon">
    <style>
        body {
            background-image: url('/background/background landing.png');
            background-size: cover;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            text-align: right;
        }

        nav {
            margin-top: 20px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    

    <nav>
        <a href="{{ route('landingpage1') }}">Beranda</a>
        <a href="{{ route('layanan') }}">Layanan</a>
        <a href="{{ route('tentang') }}">Tentang Kami</a>
        <a href="{{ route('kontak') }}">Kontak</a>
    </nav>
<div>
        <h1>Selamat Datang di </h1>
        <h1>Application BUTANOL<h1>
    </div>
</body>
</html>
