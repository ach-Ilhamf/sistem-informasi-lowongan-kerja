<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/pk/cari.css')}}" />

    <title>Cari Lowongan</title>
</head>
<body>
<header>
<div class="wrapper">
        <div class="logo"><img src="Logo2.png"></div>
            <div class="menu">
            <ul>
                <li><a href="pelamar" class="tmbl-biru">DASHBOARD</a></li>
                <li><a href="{{url('logout')}}" class="tmbl-oren">LOGOUT</a></li>
            </ul>
            </div>
</div>
</header>
<div class="banner">
    <h1>Cari Lowongan</h1>
</div>

<div class="cari">
    <form action="" method="post">
        <input type="text" name="nama_perusahaan" maxlength="100" size="100" placeholder="Nama Perusahaan"><button name="cari">CARI</button> <br>
        <div class="list">
            <input id="kota" name="kota" list="cariKota" placeholder="Kota/Kabupaten"> 
            <datalist id="cariKota">
                <option value="Bangkalan">
                <option value="Lamongan">
                <option value="Gresik">
            </datalist>
            <input id="pendidikan" name="pendidikan" list="studi" placeholder="Pendidikan"> 
            <datalist id="studi">
                <option value="SMA/SMK/Sederajat">
                <option value="D3">
                <option value="S1">
                <option value="S2">
                <option value="S3">
            </datalist>
            <input id="bidang" name="bidang" list="kategori" placeholder="Bidang Keahlian"> 
            <datalist id="kategori">
                <option  value="Network Engineer">
                <option  value="IT Solution">
            </datalist>
        </div>
    </form>
    
    <br><br><br>
    <table border="0">
    <form action = "whislist pekerjaan.php" method="post">
        <input type="submit" name="simpan" value="SIMPAN">
    </form> 
    <a class="selengkapnya" href="selengkapnya.php">SELENGKAPNYA</a>
    </td>
    </table>

</div>
</body>
</html>




