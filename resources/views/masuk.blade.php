<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/prs/masuk.css')}}" />
    <title>Lamaran Masuk</title>
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
                <li><a href="/index/masuk">Lamaran Masuk</a></li>
                <li><a href="/index/profil">Profil</a></li>

            </ul>
        </menu>
    </aside>

    <div class="body">
        <center>
            <h2 style="color: white">DATA KANDIDAT</h2>
        </center> <br>
        <table border="1">
            <tr>
                <th>
                    <center> Nama Pelamar</center>
                </th>
                <th>
                    <center>Pendidikan</center>
                </th>
                <th>
                    <center> Keahlian</center>
                </th>
                <th>
                    <center>Tanggal Lahir</center>
                </th>
                <th>
                    <center>Alamat</center>
                </th>
                <th>
                    <center> Action</center>
                </th>
            </tr>
            @foreach ($perusahaan as $p)
            <tr>
                <td>{{ $p->nama_pk }}</td>
                <td>{{ $p->pendidikan }}</td>
                <td>{{ $p->keahlian }}</td>
                <td>{{ $p->tgl_lahir }}</td>
                <td>{{ $p->alamat_pk }}</td>
                <td>
                    <center><a href="/index/hapus4/{{ $p->id_pk }}"
                            onclick="return confirm('Apakah anda yakin ingin menghapus kandidat ?')">Hapus</a></center>
                </td>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
