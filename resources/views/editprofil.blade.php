<link rel="stylesheet" href="{{asset('/css/pk/style.css')}}" />
@extends('masterpk')

@section('banner')
<div class="banner">
    <h1>Profil</h1>
</div>
@endsection

@section('konten')
@foreach($pelamar as $p)
<div class="body">
    <div class="conten">
        <h1>Informasi Pribadi</h1>
        <br>
        <form action="/index/update" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>
                        <h3><label>Nama Lengkap</label></h3><br>
                        <input type="hidden" name="id" value="{{ $p->id_pk }}">
                        <input type="text" name="nama" maxlength="100" size="100" value="{{ $p->nama_pk }}"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><label>Alamat</label></h3><br>
                        <input type="text" name="alamat" maxlength="100" size="100" value="{{ $p->alamat_pk }}""><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><label>Kota</label></h3><br>
                        <input type=" text" name="kota" maxlength="100" size="100" value="{{ $p->kota_pk }}"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><label>Tanggal Lahir</label></h3><br>
                        <input type="date" name="tanggal_lahir" value="{{ $p->tgl_lahir }}"> <br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><label>Telepon</label></h3><br>
                        <input type="text" name="telepon" maxlength="100" size="100"
                            value="{{ $p->telepon_pk }}"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><label>Email</label></h3><br>
                        <input type="email" name="email" maxlength="100" size="100" value="{{ $p->email_pk }}"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><label>Keahlian</label></h3><br>
                        <input type="text" name="keahlian" maxlength="100" size="100"
                            value="{{ $p->keahlian }}"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="button">
                            <input type="submit" name="simpan"  onclick="return confirm('Apakah anda yakin ingin mengubah data ?') value="SIMPAN">
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</script>
@endforeach
@endsection
