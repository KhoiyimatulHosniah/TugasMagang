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
        }

        .tamu-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 600px;
            max-width: 100%;
            margin: 40px;
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
        <h2>Edit Notulensi</h2>
        <form class="tamu-form" action="{{ route('formNotulen.update', ['id' => $items->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <input type="text" class="form-control" name="sidang" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Nama Sidang/Kegiatan" value="{{ $items->sidang_rapat }}">
            </div>
            <div class="form-group">
                <select type="text" placeholder="Pilih Hari" class="form-control form-select"
                    name="hari" aria-describedby="nameHelp" id="hari">
                    <option value="" disabled selected>Pilih Hari</option>
                    <option value="Senin" {{ $items->hari == 'Senin' ? 'selected' : '' }}>Senin
                    </option>
                    <option value="Selasa" {{ $items->hari == 'Selasa' ? 'selected' : '' }}>Selasa
                    </option>
                    <option value="Rabu" {{ $items->hari == 'Rabu' ? 'selected' : '' }}>Rabu
                    </option>
                    <option value="Kamis" {{ $items->hari == 'Kamis' ? 'selected' : '' }}>Kamis
                    </option>
                    <option value="Jumat" {{ $items->hari == 'Jumat' ? 'selected' : '' }}>Jumat
                    </option>
                </select>
            </div>
            <div class="form-group">
                <input type="date" class="form-control" name="tanggal" id="exampleInputTanggal" aria-describedby="nameHelp"
                    placeholder="Tanggal" value="{{ $items->tanggal }}">
            </div>
            <div class="form-group">
                <input type="time" class="form-control" name="jam_panggilan" id="exampleInputJamPanggilan" aria-describedby="nameHelp"
                    placeholder="Jam Panggilan" value="{{ $items->jam_panggilan }}">
            </div>
            <div class="form-group">
                <input type="time" class="form-control" name="jam_sidang_rapat" id="exampleInputJamRapat" aria-describedby="nameHelp"
                    placeholder="Jam Sidang Rapat" value="{{ $items->jam_sidang_rapat }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="acara" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Acara" value="{{ $items->acara }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="ketua" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Ketua" value="{{ $items->ketua }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="ketua" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Ketua" value="{{ $items->ketua }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="sekretaris" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Sekretaris" value="{{ $items->sekretaris }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="sekretaris" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Sekretaris" value="{{ $items->sekretaris }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pencatat" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Pencatat" value="{{ $items->pencatat }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pesertasidang" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Peserta Sidang" value="{{ $items->peserta_sidang }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="kegiatansidang" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Kegiatan Sidang" value="{{ $items->kegiatan_sidang}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="katapembuka" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Kata Pembuka" value="{{ $items->kata_pembuka }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pembahasan" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Pembahasan" value="{{ $items->pembahasan }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="keputusan" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Keputusan" value="{{ $items->keputusan }}">
            </div>
            
            <hr>
            <button type="submit" class="btn btn-primary btn-user btn-block">Update</button>
        </form>
    </div>
</body>

</html>
