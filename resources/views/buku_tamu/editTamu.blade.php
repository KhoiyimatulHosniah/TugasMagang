<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .tamu-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 600px;
            max-width: 100%;
        }

        .tamu-container h2 {
            text-align: center;
            color: #333;
        }

        .tamu-form {
            display: flex;
            flex-direction: column;
        }

        .tamu-form label {
            margin-bottom: 10px;
            color: #555;
        }

        .tamu-form input,
        .tamu-form select {
            width: 80%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .tamu-form button {
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .tamu-form button:hover {
            background-color: #2980b9;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }
    </style>
    <title>BUTANOL APPLICATION</title>
    <link href="asset/images/logoB.png" rel="icon">
</head>
<body>
<div class="tamu-container">
    <h2>Edit Data Tamu</h2>
    <form class="tamu-form" action="{{ route('tamu.update', ['id' => $items->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <input type="text" class="form-control" name="nama"
                   id="exampleInputName" aria-describedby="nameHelp"
                   placeholder="Nama">
        </div>

        <div class="form-group">
            <select type="text" placeholder="Pilih Jenis Kelamin"
                    class="form-control form-select" name="jenis_kelamin"
                    aria-describedby="nameHelp" id="jenis_kelamin">
                <option>Pilih Jenis Kelamin</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <input type="date" class="form-control" name="tanggal"
                   id="exampleInputTanggal" aria-describedby="nameHelp" placeholder="">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="tujuan"
                   id="exampleInputName" aria-describedby="nameHelp"
                   placeholder="Tujuan">
        </div>
        <div class="form-group">
            <select type="text" placeholder="Pilih Nama Instansi"
                    class="form-control form-select" name="id_OPD"
                    aria-describedby="nameHelp" id="id_OPD">
                <option>Nama Instansi</option>
                @foreach($opd as $instansi)
                    <option
                        value="{{$instansi->id_OPD}}">{{$instansi->nama_instansi}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="no_telp"
                   id="exampleInputName" aria-describedby="nameHelp"
                   placeholder="Telepon">
        </div>
        <hr>
        <button type="submit" class="btn btn-primary btn-user btn-block">Update</button>
    </form>
</div>
</body>
</html>

