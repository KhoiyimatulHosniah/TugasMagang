<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUTANOL APPLICATION</title>
    <link href="asset/images/logoB.png" rel="icon">
    <style>
        body {
            background: url('/background/background notulensi.png') center/cover no-repeat; 
            height: 500px;
            color: white;
            font-family: 'Kanit';
            margin: 0;
            padding: 0;
            
        }

        h1,
        .h1 {
            color: #212121;
            font-style: italic;
            font-size: 45px;
            margin-top: 60px;
            margin-left: 130px;
        }
        h2,
        .h2 {
            color: #212121;
            font-style: italic;
            font-size: 45px;
            margin-left: 130px;
            margin-top: 10px;
        }
        footer {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 8px;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            
            
        }
        .button1-container {
            display: flex; 
        }

        .button1 {
            margin: 10px; 
            font-family: 'Kanit';
            margin-left: 130px;
            padding: 10px 15px; 
            border: none; 
            background-color: #007ACC; 
            color: white; 
            text-align: center; 
            text-decoration: none; 
            display: inline-block; 
            font-size: 16px; 
            cursor: pointer; 
            border-radius: 5px; 
        }

        .button1:hover {
            background-color: #004675; 
        }

        .button1-container {
            display: flex; 
        }

        .button2 {
            margin: 10px; 
            margin-left: 10px;
            padding: 10px 15px; 
            border: none; 
            font-family: 'Kanit';
            background-color: #007ACC; 
            color: white; 
            text-align: center; 
            text-decoration: none; 
            display: inline-block; 
            font-size: 16px; 
            cursor: pointer; 
            border-radius: 5px; 
        }

        .button2:hover {
            background-color: #004675; 
        }

    </style>
</head>
<body>

    <div >
        <h1>Selamat Datang di</h1>
        <h2>Aplikasi Notulesi</h2>
    </div>
    <div class="button-container">
        <a href="/loginNotulensi"><button class="button1">NOTULENSI</button></a>
        <a href="/daftarhadir"><button class="button2">DAFTAR HADIR</button>
      </div>
    
    <footer>
            <p>&copy; {{ date('Y') }} PKLpolije. Dinas Komunikasi dan Informatika.</p>
    </footer>
    </div>
</body>
</html>
