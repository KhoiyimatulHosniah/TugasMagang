<!DOCTYPE html>
<html>
<title> contoh surat</title>
<head>
<style type="text/css">
body{font-family: "Times New Roman"; background-color:#ccc}
.rangkasurat {width: 980px;margin:0 auto; background-color:#fff;height:100%; padding:20px;}
table{border-bottom:5px solid #000; padding: 2px}
.tengah{text-align:center; line-height: 5px;}
</style>
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
<table>
    <center>
<h1>Notulen</h1>
    </center>
    <br>
<p>SIDANG/RAPAT: {{$items->sidang_rapat}}</p>
<p>Hari/Tanggal: {{ $items->hari }}, {{ $items->tanggal }}</p>
<p>Jam Panggilan: {{$items->jam_panggilan}}</p>
<p>Jam sidang/rapat: {{$items->jam_sidang_rapat}}</p>
<br>
<p>PIMPINAN SIDANG/RAPAT</p>
<p>Ketua: {{$items->ketua}}</p>
<p>Sekretaris: {{$items->sekretaris}}</p>
<p>Pencatat: {{$items->pencatat}}</p>
<p>Peserta sidang/rapat: {{$items->peserta_sidang}}</p>
<br>
<p>KEGIATAN SIDANG/RAPAT: {{$items->kegiatan_sidang}}</p>
<p>Kata Pembuka: {{$items->kata_pembuka}}</p>
<p>Pembahasan: {{$items->pembahasan}}</p>
<p>Keputusan: {{$items->keputusan}}</p>
</table>
</div>
</body>
</html