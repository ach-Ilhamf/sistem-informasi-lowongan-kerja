<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('/css/prs/dashboardprs.css')}}" />
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
        <h1>Dashboard</h1>
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
        <center>
            <h2>DATA PERUSAHAAN</h2>
        </center> <br>
        <table border='1'>
            <tr>
                <th>
                    <center>Nama Perusahaan</center>
                </th>
                <th>
                    <center> Alamat</center>
                </th>
                <th>
                    <center>Kota</center>
                </th>
                <th>
                    <center>No. Telepon</center>
                </th>
                <th>
                    <center> Email</center>
                </th>
                <th width="110px">
                    <center>Action</center>
                </th>
            </tr>

            @foreach ($perusahaan as $p)
            <tr>
                <td>{{ $p->nama_prs }}</td>
                <td>{{ $p->alamat_prs }}</td>
                <td>{{ $p->kota_prs }}</td>
                <td>{{ $p->telepon_prs }}</td>
                <td>{{ $p->email_prs }}</td>
                <td>
                    <center> <a href="/index/editprofil/{{ $p->id_prs }}">Edit</a>
                        <a href="/index/hapus3/{{ $p->id_prs }}"
                            onclick="return confirm('Apakah anda yakin ingin menghapus data ?')">Hapus</a></center>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
