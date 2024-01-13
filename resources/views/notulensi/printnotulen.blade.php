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
    @foreach($notulensis as $notulensi)
    <p>ID Notulensi: {{ $notulensi->id }}</p>
    <p>SIDANG/RAPAT: {{ $notulensi->sidang_rapat }}</p>
    <p>Hari/Tanggal: {{ $notulensi->hari }}, {{ $notulensi->tanggal }}</p>
    <p>Jam Panggilan: {{ $notulensi->jam_panggilan }}</p>
    <p>Jam sidang/rapat: {{ $notulensi->jam_sidang_rapat }}</p>
    <p>PIMPINAN SIDANG/RAPAT</p>
    <p>Ketua: {{ $notulensi->ketua }}</p>
    <p>Sekretaris: {{ $notulensi->sekretaris }}</p>
    <p>Pencatat: {{ $notulensi->pencatat }}</p>
    <p>Peserta sidang/rapat: {{ $notulensi->peserta_sidang }}</p>
    <p>KEGIATAN SIDANG/RAPAT: {{ $notulensi->kegiatan_sidang }}</p>
    <p>Kata Pembuka: {{ $notulensi->kata_pembuka }}</p>
    <p>Pembahasan: {{ $notulensi->pembahasan }}</p>
    <p>Keputusan: {{ $notulensi->keputusan }}</p>
    @endforeach
</body>

</html>
