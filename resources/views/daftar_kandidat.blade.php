<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/admin/daftar_kandidat.css')}}" />
    <title>Daftar Kandidat</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="headerlogo"><a href="#"><img class="logo" src="http://localhost:8000/Logo2.png"></a></div>

            <!--Menu-->
            <div class="menu">
                <ul>
                    <li><a href="/index/admin" class="tmbl-biru">DASHBOARD</a></li>
                    <li><a href="{{url('logout')}}" class="tmbl-oren">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="banner">
        <h1>Daftar Kandidat</h1>
    </div>

    <aside class="sidebar">
        <menu>
            <ul class="menu-content">
                <li class="top"><img width="100px" height="100px" src="http://localhost:8000/profile.png"><br>
                    <h4 align="center"></h4>
                </li>
                <li><a href="/index/data_perusahaan">Daftar Perusahaan</a></li>
                <li><a href="/index/data_kandidat">Daftar Kandidat</a></li>
                <li><a href="/index/data_loker"><span>Daftar Lowongan Kerja</span></a></li>
            </ul>
        </menu>
    </aside>

    <div class="body">
        <div class="bodi">
            <center>
                <h2 style="color: white">DAFTAR KANDIDAT</h2>
            </center> <br>
            <table border="1">
                <tr>
                    <th>
                        <center> Nama Pencari Kerja</center>
                    </th>
                    <th>
                        <center> Alamat</center>
                    </th>
                    <th>
                        <center>Telepon</center>
                    </th>
                    <th>
                        <center>Email</center>
                    </th>
                    <th>
                        <center>Action</center>
                    </th>
                </tr>
                @foreach ($admin as $p)
                <tr>
                    <td>{{ $p->nama_pk }}</td>
                    <td>{{ $p->alamat_pk }}</td>
                    <td>{{ $p->telepon_pk }}</td>
                    <td>{{ $p->email_pk }}</td>
                    <td>
                        <center> <br>
                            <a href="/index/hapus_kandidat/{{ $p->id_pk }}"
                                onclick="return confirm('Apakah anda yakin ingin menghapus data ?')">Hapus</a></center>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>
