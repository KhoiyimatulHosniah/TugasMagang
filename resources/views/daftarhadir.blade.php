<!DOCTYPE html>
<html>
<head>
<title>Form Daftar Hadir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:#39A7FF;
            background-size: cover;
            background-position: center;
            color: #000000;
        }

        h1 {
            color: #333;
            color: #000000;
            text-align: center;
            padding-top: 50px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #E0F4FF;
            color: black;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }

        p {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Form Daftar Hadir</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form method="post" action="{{ route('daftar-hadir.submit') }}">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="instansi">Jenis Kelamin:</label>
        <input type="text" name="instansi" required>
        <label for="instansi">Nama Instansi:</label>
        <input type="text" name="nama_instansi" required>
        <label for="jabatan">Jabatan:</label>
        <input type="text" name="jabatan" required>

        <label for="no_telp">No. Telepon:</label>
        <input type="text" name="no_telp" required>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>