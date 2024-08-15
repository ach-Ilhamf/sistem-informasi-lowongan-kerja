<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/prs/profil.css')}}" />
    <title>dashboard</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="headerlogo"><img class="logo" src="http://localhost:8000/Logo2.png"></div>
            <!--Menu-->
            <div class="menu">
                <ul>
                    <li><a href="/index/data" class="tmbl-biru">DASHBOARD</a></li>
                    <li><a href="{{url('logout')}}" class="tmbl-oren">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="banner">
        <h1>Lamaran Masuk</h1>
    </div>

    <aside class="sidebar">
        <menu>
            <ul class="menu-content">
                <li class="top">
                    <img width="100px" height="100px" src="http://localhost:8000/profile.png">
                    <br>
                    <h4 align="center">
                    </h4><br>
                </li>
                <li><a href="/index/data">Data Perusahaan</a></li>
                <li><a href="pasang">Pasang Lowongan Kerja</a></li>
                <li><a href="cek">Cek Lowongan</a></li>
                <li><a href="masuk">Lamaran Masuk</a></li>
                <li><a href="profil">Profil</a></li>

            </ul>
        </menu>
    </aside>

    <div class="body">
        <div class="box">
            @foreach ($perusahaan as $p)
            <form action="/index/profil_update" method="post">
                {{ csrf_field() }}
                <h2>Edit Informasi Perusahaan</h2>
                <input type="hidden" name="id" value="{{ $p->id_prs }}">
                <h4><label>Nama Perusahaan</label></h4>
                <input name="nama" type="text" value="{{ $p->nama_prs }}"><br>

                <h4><label>Alamat</label></h4>
                <input name="alamat" type="text" value="{{ $p->alamat_prs }}"><br>
                <h4><label>Kota</label></h4>
                <input name="kota" type="text" value="{{ $p->kota_prs }}"><br>

                <h4><label>No Telp Kantor</label>
                    <h4>
                        <input name="tlp" type="text" value="{{ $p->telepon_prs }}"><br>
                        <h4><label>E-mail</label></h4>
                        <input name="email" type="email" value="{{ $p->email_prs }}"><br>

                        <button name="proses"
                            onclick="return confirm('Apakah anda yakin ingin mengubah data ?')">Simpan</button>
            </form>
            @endforeach
        </div>
    </div>


</body>

</html>
