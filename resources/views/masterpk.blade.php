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
    @yield('banner')
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

    @yield('konten')
