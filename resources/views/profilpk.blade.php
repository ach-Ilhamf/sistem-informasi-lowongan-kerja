<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/pk/style.css')}}" />
    <title>Dashboard</title>
</head>

<body>

    <header>
        <div class="wrapper">
            <div class="logo"><img src="http://localhost:8000/Logo2.png"></div>
            <div class="menu">
                <ul>
                    <li><a href="/index/pelamar" class="tmbl-biru">DASHBOARD</a></li>
                    <li><a href="{{url('logout')}}" class="tmbl-oren">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="banner">
        <h1>Profil</h1>
    </div>
    <aside class="sidebar">

        <menu>
            <ul class="menu-content">
                <li class="top"><img width="100px" height="100px" src="http://localhost:8000/profile.png">
                    <br>
                    <h4 align="center"></h4>
                </li>
                <li><a href="/index/pelamar"><span>Data Pencari Kerja</span></a></li>
                <li><a href="/index/lihat_loker"><span>Cari Lowongan</span></a></li>
                <li><a href="/index/profilpk"><span>Melengkapi Profil</span></a></li>
            </ul>
        </menu>
    </aside>

    <div class="body">
        <div class="conten">
            <h1>Informasi Pribadi</h1>
            <br>
            <form action="/index/store" method="post">
                {{ csrf_field() }}
                <table>
                    <tr>
                        <td>
                            <h3><label>Nama Lengkap</label></h3><br>
                            <input type="text" name="nama" maxlength="100" size="100" required><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3><label>Alamat</label></h3><br>
                            <input type="text" name="alamat" maxlength="100" size="100" required><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3><label>Kota</label></h3><br>
                            <input type="text" name="kota" maxlength="100" size="100" required><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3><label>Agama</label></h3><br>
                            <select name="agama">
                                <option></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen Protestan">Kristen Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select> <br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3><label>Jenis Kelamin</label></h3><br>
                            <select name="jeniskelamin">
                                <option></option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select> <br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3><label>Tanggal Lahir</label></h3><br>
                            <input type="date" name="tanggal_lahir" required> <br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3><label>Telepon</label></h3><br>
                            <input type="text" name="telepon" maxlength="100" size="100" required><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3><label>Email</label></h3><br>
                            <input type="email" name="email" maxlength="100" size="100" required><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3><label>Upload Foto Formal(.jpg/.jpeg)</label></h3><br>
                            <input type="file" name="foto" value="Upload Foto" required><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3><label>Pendidikan Terakhir</label></h3><br>
                            <select name="pendidikan">
                                <option></option>
                                <option value="SMA/SMK">SMA/SMK</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3><label>Keahlian</label></h3><br>
                            <input type="text" name="keahlian" maxlength="100" size="100" required><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="button">
                                <input type="submit" name="simpan" value="SIMPAN"
                                    onclick="return confirm('Apakah anda yakin data yang dimasukkan sudah benar ?')">
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>
