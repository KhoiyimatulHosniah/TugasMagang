
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: "Kanit";
            background-color: #3498db;
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

        .tamu-form .form-group {
            margin-bottom: 16px;
        }

        .tamu-form input,
        .tamu-form select,
        .tamu-form input[type="date"]{
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .tamu-form input[type="date"],
        .tamu-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 8px;
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

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        /* Ukuran layar kurang dari 768px */
        @media (max-width: 768px) {
            .tamu-container {
                width: 90%;
            }

            .tamu-form input,
            .tamu-form select {
                width: 100%;
            }
        }

        /* Ukuran layar kurang dari 576px */
        @media (max-width: 576px) {
            .tamu-container {
                padding: 10px;
            }

            .tamu-container h2 {
                font-size: 24px;
            }

            .tamu-form label {
                font-size: 14px;
            }

            .tamu-form input,
            .tamu-form select {
                width: 100%;
                font-size: 14px;
                padding: 8px;
            }

            .tamu-form button {
                font-size: 14px;
            }

            table,
            th,
            td {
                font-size: 14px;
            }
        }
        /* Ukuran layar kurang dari 768px */
@media (max-width: 768px) {
  .tamu-form input,
  .tamu-form select {
    width: 100%;
    box-sizing: border-box;
  }
}

/* Ukuran layar kurang dari 576px */
@media (max-width: 576px) {
  .tamu-form label {
    font-size: 14px;
  }

  .tamu-form input,
  .tamu-form select {
    width: 100%;
    box-sizing: border-box;
    font-size: 14px;
    padding: 8px;
  }
}
    </style>
    <title>BUTANOL APPLICATION</title>
    <link href="asset/images/logoB.png" rel="icon">
</head>

<body>
    <div class="tamu-container">
        <h2>Edit Data Tamu</h2>
        <form class="tamu-form" action="{{ route('formopd.update', ['id' => $items->id_OPD]) }}" method="POST">
            @csrf
            @method('PUT')

            
            <div class="form-group">
                <input type="text" class="form-control" name="nama_instansi" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Nama Instansi" value="{{ $items->nama_instansi }}">
            </div>
            
            <hr>
            <button type="submit" class="btn btn-primary btn-user btn-block">Update</button>
        </form>
    </div>
</body>

</html>