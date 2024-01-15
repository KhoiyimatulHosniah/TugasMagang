<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Notulensi</title>
    <!-- Tambahkan CSS atau gaya cetak jika diperlukan -->
    <link rel="stylesheet" href="{{ asset('css/print.css')}}">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif
        }
        .h1 {
            font-size: 14%;
            align-content: center;
            font-weight: bold;
        }
        .h2 {
            font-size: 12%;

        }
        .p {
            font-size: 12%;
        }
    </style>
</head>

<body>

    <!-- Tambahkan konten cetak notulensi sesuai kebutuhan -->
    <h1>Notulen</h1>
    @foreach($items as $item)
    <p>ID Notulensi: {{ $item->id }}</p>
    <p>SIDANG/RAPAT: {{ $item->sidang_rapat }}</p>
    <p>Hari/Tanggal: {{ $item->hari }}, {{ $item->tanggal }}</p>
    <p>Jam Panggilan: {{ $item->jam_panggilan }}</p>
    <p>Jam sidang/rapat: {{ $item->jam_sidang_rapat }}</p>
    <p>PIMPINAN SIDANG/RAPAT</p>
    <p>Ketua: {{ $item->ketua }}</p>
    <p>Sekretaris: {{ $item->sekretaris }}</p>
    <p>Pencatat: {{ $item->pencatat }}</p>
    <p>Peserta sidang/rapat: {{ $item->peserta_sidang }}</p>
    <p>KEGIATAN SIDANG/RAPAT: {{ $item->kegiatan_sidang }}</p>
    <p>Kata Pembuka: {{ $item->kata_pembuka }}</p>
    <p>Pembahasan: {{ $item->pembahasan }}</p>
    <p>Keputusan: {{ $item->keputusan }}</p>
    @endforeach
</body>

</html>
