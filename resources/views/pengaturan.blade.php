<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/prs/pengaturan.css')}}" />
    <title>Pengaturan</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="headerlogo"><img class="logo" src="http://localhost:8000/Logo2.png"></div>         
            <!--Menu-->
            <div class="menu">  
                <ul>
                    <li><a href="index/data" class="tmbl-biru">DASHBOARD</a></li>
                    <li><a href="{{url('logout')}}" class="tmbl-oren">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="banner">
        <h1>Pengaturan</h1>
    </div>

    <aside class="sidebar">       
        <menu>
          <ul class="menu-content">
            <li class="top">
                <img width="100px" height="100px" src="http://localhost:8000/profile.png"> 
                <br><h4 align="center">
                </h4><br></li>
                <li><a href="/index/pasang">Pasang Lowongan Kerja</a></li>
                <li><a href="/index">Cek Lowongan</a></li>
                <li><a href="/index/masuk">Lamaran Masuk</a></li>
                <li><a href="/index/profil">Profil</a></li>
                <li><a href="/index/pengaturan">Pengaturan</a></li>
            
          </ul>
        </menu>
    </aside>

    <div class="body">
      <div class="box">
        <form action="">
          <h3>Login Information</h3>
          <div class="batas"><h4><label >Email Addres</h4></div> 
              <input type="text" maxlength="100"><br>
          <h4><label>Password</label><h4>
              <input type="text" maxlength="100"><br>
          <h4><label>Pasword Verify</label></h4>
              <input type="text" maxlength="100"><br>
          <button>Update</button>
        </form>
      </div>
    </div>
</body>
</html>