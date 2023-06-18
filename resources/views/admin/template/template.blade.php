<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="{{ asset('assets/icon.png') }}" />
    <link rel="stylesheet" href="{{ asset('style/style_admin.css') }}" />
    <link
        href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
        rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
</head>
<body>
<div class="sidebar">
    <div class="logo-details">
        <img src="../assets/db.jpg" alt="logo" width="50px" height="50px" srcset="">
        <span class="logo_name"><h4><i>Dations</i></h4></span>
    </div>
    <hr>
    <div class="logo-details">
        <i class="bx bx-user-circle"></i>
        <div class="account-detail">
            <b>{{ auth()->user()->nama_user }}</b>
            <span class="badge-info">Admin</span>
        </div>
    </div>
    <hr>
    <ul class="nav-links">
        <li>
            <a href="/dashboard" class="{{ ($judul == "Dashboard") ? "active" : "" }}">
                <i class="bx bx-home"></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/anggota" class="{{ ($judul == "Anggota") ? "active" : "" }}">
                <i class="bx bx-user"></i>
                <span class="links_name">Data Anggota</span>
            </a>
        </li>
        <li>
            <a href="/jenis_kas" class="{{ ($judul == "Jenis Kategori") ? "active" : "" }}">
                <i class="bx bx-money"></i>
                <span class="links_name">Data Kas</span>
            </a>
        </li>
        <li>
            <a href="/kas_anggota" class="{{ ($judul == "Kas Anggota") ? "active" : "" }}">
                <i class="bx bx-wallet-alt"></i>
                <span class="links_name">Data Kas</span>
            </a>
        </li>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="{{ ($judul == "Kas Anggota") ? "active" : "" }}">
                <i class="bx bx-wallet-alt"></i>
                <span class="links_name">Logout</span>
            </button>
        </form>
    </ul>
</div>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class="bx bx-menu sidebarBtn"></i>
        </div>
    </nav>
    @yield('content')
</section>
@yield('script')
<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    };
</script>
</body>
</html>
