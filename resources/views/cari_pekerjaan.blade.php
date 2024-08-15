<link rel="stylesheet" href="{{asset('/css/pk/style.css')}}" />
@extends('masterpk')

@section('banner')
<div class="banner">
    <h1>Cari Pekerjaan</h1>
</div>
@endsection

@section('konten')
<div class="body">
    <div class="bodi">
        <center>
            <h2 style="color: black">LOWONGAN PEKERJAAN</h2>
        </center> <br>
        <table border="1">
            <tr>
                <th width="150px">
                    <center> Nama Perusahaan</center>
                </th>
                <th width="130px">
                    <center> Posisi</center>
                </th>
                <th>
                    <center> Deskripsi Pekerjaan</center>
                </th>
            </tr>
            @foreach ($pelamar as $p)
            <tr>
                <td>{{ $p->nama_prs }}</td>
                <td>{{ $p->posisi }}</td>
                <td>{{ $p->deskripsi }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
