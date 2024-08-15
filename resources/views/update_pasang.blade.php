<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/prs/pasang.css')}}" />
    <title>Pasang Lowongan Kerja</title>
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
        <h1>Pasang Lowongan Kerja</h1>
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
            <h2> EDIT LOWONGAN PEKERJAAN</h2>
            @foreach ($perusahaan as $p)
            <form action="/index/update_loker" method="post">
                {{ csrf_field() }}
                <table>
                    <tr>
                        <input type="hidden" name="id" value="{{ $p->id_loker }}">
                        <td><label>Nama Perusahaan</label></td>
                        <td>: <input name="nama" type="text" value="{{ $p->nama_prs }}" /></td>
                    </tr>
                    <tr>
                        <td><label>Posisi Pekerjaan</label></td>
                        <td>
                            : <input name="posisi" type="text" value="{{ $p->posisi }}" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Deskripsi Lowongan :</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea name="deskripsi" style="width:580px;height:400px"
                                value="{{ $p->deskripsi }}"></textarea></td>
                    </tr>
                    <tr>
                        <td><label>Tanggal Posting</label></td>
                        <td>
                            : <input name="tgl_posting" type="date" value="{{ $p->tgl_loker }}" />
                        </td>
                    </tr>
                    <tr>
                        <td><label>Tanggal Kadaluarsa</label></td>
                        <td>
                            : <input name="tgl_kadaluarsa" type="date" value="{{ $p->tgl_exp }}" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit" name="proses"
                                onclick="return confirm('Apakah anda yakin ingin mengubah data ?')">Kirim</button></td>
                    </tr>
                </table>
            </form>
            @endforeach
        </div>
    </div>
</body>

</html>
