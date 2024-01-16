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
        .body{font-family: "Times New Roman"; background-color:#ccc}
        .rangkasurat {width: 980px;margin:0 auto; background-color:#fff;height:500px; padding:20px;}
        table{border-bottom:5px solid #000; padding: 2px}
        .tengah{text-align:center; line-height: 5px;}
        
    </style>
</head>

<body>
    
        
        <div class="rangkasurat">
        <table width="100%">
        <tr>
        <td><img src="public\assets\img/logo2.png" width="140px"></td>
        <td class="tengah">
        <h2>PEMERINTAH KABUPATEN SITUBONDO</h2>
        <h1>DINAS KOMUNIKASI DAN INFORMATIKA</h1>
        <p>Jl. PB. Sudirman No. 1 Telp. / Faks (0338)674096, SITUBONDO-68312</p>
        <p>website.kominfo.situbondokab.go.id, email: diskominfo@situbondokab.go.id</p>
        </td>
        </tr>
        </table>
       
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

 </div>
</body>

</html>
