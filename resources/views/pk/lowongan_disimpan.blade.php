<link rel="stylesheet" href="{{asset('/css/pk/style.css')}}" />
@extends('masterpk')

@section('banner')
<div class="banner">
    <h1>Lowongan Disimpan</h1>
</div>
@endsection

@section('konten')
@foreach($pelamar as $p)
<div class="teks">
    <div class="tabel">
        <table border="1" cellspacing="2">
            <tr>
                <th width='250px' style='background-color: #2979ff; color:white'>Nama Perusahaan</th>
                <th width='250px' style='background-color: #2979ff; color:white'>Bidang</th>
                <th width='700px' style='background-color: #2979ff; color:white'>Alamat</th>
                <th width='340px' style='background-color: #2979ff; color:white'>Pendidikan</th>
                <th width='340px' style='background-color: #2979ff; color:white'>Gaji</th>
                <th width='100px' style='background-color: #2979ff; color:white'>Keterangan</th>
            </tr>
            <tr>
                <td align='center'></td>
                <td align='center'></td>
                <td align='center'></td>
                <td align='center'></td>
                <td align='center'></td>
                <td>
                    <form method='post'>
                        <input type='submit' name='hapus' value='HAPUS'>
                    </form>
                </td>

                <div class='kotakBiru'>
                    <a href='cari pekerjaan.php'>
                        <h3>CARI LOWONGAN</h3>
                    </a>
                </div>
                <img src='Logo2.png'>";
    </div>
    </table>
</div>
@endsection
