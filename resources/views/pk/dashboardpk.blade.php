
<link rel="stylesheet" href="{{asset('/css/pk/style.css')}}" />
@extends('masterpk')

@section('banner')
<div class="banner">
    <h1>Dashboard</h1>
</div>
@endsection

@section('konten')
@foreach($pelamar as $p) 
<div class="bungkus">
<div class="content">
<br>
<p>
	<b>{{ $p->nama_pk }}</b>
	<a href="/index/editprofil/{{ $p->id_pk }}">Edit</a>
	<a href="/index/hapus/{{ $p->id_pk }}" onclick="return confirm('Apakah anda yakin ingin menghapus data ?')">Hapus</a>
	<br>
	{{ $p->kota_pk }} <br>
	{{ $p->email_pk }} <br> 
</p>
</div>
</div>
@endforeach
@endsection


