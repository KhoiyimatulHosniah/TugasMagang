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
            padding: 20px;
            text-align: center;
            position: fixed;
            width: 100%;
            z-index: 1000; 
            display: flex;
            align-items: center;
            justify-content: space-between;
    }
        
        

        nav {
            
            background-color: rgba(48, 56, 215, 0.5);
            text-align: right;
            padding: 20px;
        }

        nav a {
            color: rgb(72, 68, 103);
            margin: 0 10px;
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

        h1,
        .h1 {
            color: #ffffff;
            font-style: italic;
            font-size: 55px;
            margin-top: 103px;
            margin-left: 230px;
}
        h2,
        .h2 {
            color: #344767;
            font-style: italic;
            font-size: 55px;
            margin-left: 230px;
}
footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            text-align: center;
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

    <div >
        <h1 >Selamat Datang di </h1>
        <h2>Application BUTANOL</h2>
    </div>


    <footer>
            <p>&copy; {{ date('Y') }} PKLpolije. Dinas Komunikasi dan Informatika.</p>
    </footer>
    </div>
</body>
</html>
