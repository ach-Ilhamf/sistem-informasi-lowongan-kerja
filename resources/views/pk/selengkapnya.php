<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v2">
    <title>Lamaran Pekerjaan</title>
</head>
<body>
<header>
    <div class="wrapper">
        <div class="logo"><img src="Logo2.png"></div>
            <div class="menu">
            <ul>
                <li><a href="dashboard real.php" class="tmbl-biru">DASHBOARD</a></li>
                <li><a href="#Logout" class="tmbl-oren">LOGOUT</a></li>
            </ul>
            </div>
    </div>
</header>
<div class="banner">
    <h1>Lamaran Pekerjaan</h1>
</div>

<?php
        include "koneksi_db.php";
        $ambil_data=mysqli_query($koneksi,"select * from profil");
        $tampil=mysqli_fetch_array($ambil_data);
    ?>
    <aside class="sidebar">
        <menu>
          <ul class="menu-content">
            <li class="top"><img width="100px" height="100px" src="berkas_foto/<?php echo $tampil['foto'];?>"> 
                <br><h4 align="center">
                <?php
                    echo"
                    $tampil[nama_lengkap]
                    ";
                ?>
                </h4></BR></li>
            <li><a href="whislist pekerjaan.php">Lowongan Disimpan</a></li>
            <li><a href="melamar pekerjaan.php"><span>Lamaran Kerja</span></a></li>
            <li><a href="cari pekerjaan.php"><span>Cari Lowongan</span></a></li>
            <li><a href="pengaturan.php"><span>Pengaturan Akun</span></a></li>
            <li><a href="PROFIL.php"><span>Edit Profil</span></a></li>
            <li><a href="bantuan.php"><span>Bantuan</span></a></li>
          </ul>
        </menu>
      </aside>

<?php
    $ambildata2 = mysqli_query($koneksi,"select * from lowongan");
    $tampil2 = mysqli_fetch_array($ambildata2);
?>
<div class="bungkus">

    <div class="box">
        <div class="header">

            <table>
                <tr>
                    <th colspan="3"><h1><?php echo "$tampil2[bidang]";?></h1></th>
                </tr>
                <tr>
                    <td>Gaji</td>
                    <td>Pendidikan </td>
                    <td>Alamat</td>
                </tr>
                <tr>
                    <td width="100px"><?php echo "$tampil2[gaji]";?></td>
                    <td width="100px"><?php echo "$tampil2[pendidikan]";?> </td>
                    <td width="150px"><?php echo "$tampil2[alamat]";?></td>
                </tr>
            </table>
        </div>

        <div class="bawah">
            <h3>Deskripsi</h3><br>
            <pre><?php echo "$tampil2[deskripsi]";?><br></pre>
            <form action="melamar pekerjaan.php" method="post">
                <input type="submit" name="lamar" value="Lamar Pekerjaan">
            </form>
        </div>
    </div>

    <div class="box2">
        <?php
        include "koneksi_perusahaan.php";
        $ambildata3 = mysqli_query($koneksi_per,"select * from profil_perusahaan");
        $tampil3 = mysqli_fetch_array($ambildata3);
        ?>
        <div class="samping">
            <h3>Profil Perusahaan</h3><br>
            <?php echo "$tampil3[username]";?><br><br>

            <b>Deskripsi Perusahaan</b><br><br>
            <div class="deskripsi"><?php echo "$tampil3[deskripsi]";?></div><br>


            <b>Email</b><br>
            <a href="<?php echo "$tampil3[email]";?>"><?php echo "$tampil3[email]";?><br></a>
        </div>
        
    </div>

</div>



</div>
</body>
</html>