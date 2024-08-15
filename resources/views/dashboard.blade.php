<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/admin/dashboard.css')}}" />
    <title>Dashboard</title>
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
        <h1>Dashboard</h1>
    </div>

    <aside class="sidebar">       
        <menu>
            <ul class="menu-content">
                <li class="top"><img width="100px" height="100px" src="http://localhost:8000/profile.png"><br><h4 align="center"></h4></li>
                <li><a href="/index/data_perusahaan">Daftar Perusahaan</a></li>
                <li><a href="/index/data_kandidat">Daftar Kandidat</a></li>
                <li><a href="/index/data_loker" ><span>Daftar Lowongan Kerja</span></a></li>
            </ul>
        </menu>
    </aside>

    <div class="body">
      <div class="image"><img src="http://localhost:8000/6308.png"></div>
    </div>
</body>
</html>