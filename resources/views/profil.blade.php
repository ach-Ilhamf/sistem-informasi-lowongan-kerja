<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/prs/profil.css" />
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
                <li><a href="/index/pasang">Pasang Lowongan Kerja</a></li>
                <li><a href="/index">Cek Lowongan</a></li>
                <li><a href="/index/kandidat">Lamaran Masuk</a></li>
                <li><a href="/index/profil">Profil</a></li>

            </ul>
        </menu>
    </aside>

    <div class="body">
        <div class="box">

            <form action="/index/insert" method="post">
                {{ csrf_field() }}
                <h2>Informasi Perusahaan</h2>
                <h4><label>Nama Perusahaan</label></h4>
                <input name="nama" type="text" required><br>

                <h4><label>Alamat</label></h4>
                <input name="alamat" type="text" required><br>
                <h4><label>Kota</label></h4>
                <input name="kota" type="text" required><br>

                <h4><label>No Telp Kantor</label>
                    <h4>
                        <input name="tlp" type="text" required><br>
                        <h4><label>E-mail</label></h4>
                        <input name="email" type="email" required><br>

                        <button name="proses">Simpan</button>
            </form>
        </div>
    </div>


</body>

</html>
