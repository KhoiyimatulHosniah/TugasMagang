<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Notulensi</title>
    <!-- Tambahkan CSS atau gaya cetak jika diperlukan -->

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

            <p>SIDANG/RAPAT: {{$items->sidang_rapat}}</p>
            <p>Hari/Tanggal: {{ $items->hari }}, {{ $items->tanggal }}</p>
            <p>Jam Panggilan: {{$items->jam_panggilan}}</p>
            <p>Jam sidang/rapat: {{$items->jam_sidang_rapat}}</p>

            <p>PIMPINAN SIDANG/RAPAT</p>
            <p>Ketua: {{$items->ketua}}</p>
            <p>Sekretaris: {{$items->sekretaris}}</p>
            <p>Pencatat: {{$items->pencatat}}</p>
            <p>Peserta sidang/rapat: {{$items->peserta_sidang}}</p>
            <p>KEGIATAN SIDANG/RAPAT: {{$items->kegiatan_sidang}}</p>
            <p>Kata Pembuka: {{$items->kata_pembuka}}</p>
            <p>Pembahasan: {{$items->pembahasan}}</p>
            <p>Keputusan: {{$items->keputusan}}</p>


</body>

</html>
