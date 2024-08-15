<link rel="stylesheet" href="{{asset('/css/pk/style.css')}}" />
@extends('masterpk')

@section('banner')
<div class="banner">
    <h1>Dashboard</h1>
</div>
@endsection

@section('konten')
<div class="body">
    <div class="bodi">
        <center>
            <h2 style="color: black">DATA PENCARI KERJA</h2>
        </center> <br>
        <table border="1">
            <tr>
                <th>
                    <center> Nama Pencari Kerja</center>
                </th>
                <th>
                    <center>Alamat</center>
                </th>
                <th>
                    <center>Telepon</center>
                </th>
                <th>
                    <center>Email</center>
                </th>
                <th>
                    <center> Action</center>
                </th>
            </tr>
            @foreach ($pelamar as $p)
            <tr>
                <td>{{ $p->nama_pk }}</td>
                <td>{{ $p->alamat_pk }}</td>
                <td>{{ $p->telepon_pk }}</td>
                <td>{{ $p->email_pk }}</td>
                <td>
                    <center><a href="/index/profiledit/{{ $p->id_pk }}">Edit</a>
                        <a href="/index/hapus/{{ $p->id_pk }}"
                            onclick="return confirm('Apakah anda yakin ingin menghapus data ?')">Hapus</a></center>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
