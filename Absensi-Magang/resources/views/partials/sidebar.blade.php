<link rel="stylesheet" href="/assets/css/main/app.css">
<link rel="stylesheet" href="/assets/css/main/app-dark.css">
<link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
<link rel="shortcut icon" href="/assets/images/logo/favicon.png" type="image/png">    
<link rel="stylesheet" href="/assets/css/shared/iconly.css">

<aside>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="/home"><span>User</span></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li class="sidebar-item {{ ($title === "home" ? 'active' : '') }}">
                <a href="{{ route('home') }}" class='sidebar-link'>
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="sidebar-item {{ ($title === "recap" ? 'active' : '') }}">
                <a href="{{ route('recap_presence') }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>My Presence</span>
                </a>
            </li>

            <li class="sidebar-item {{ ($title === "settings" ? 'active' : '') }}">
                <a href="/settings" class='sidebar-link'>
                    <i class="fa-solid fa-gear"></i>
                    <span>Settings</span>
                </a>
            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>Jadwal Tes</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item">
                        <a href="/tambah-jadwal-plp">Tambah Jadwal</a>
                    </li>
                    <li class="submenu-item">
                        <a href="/jadwal-berlangsung-plp">Berlangsung</a>
                    </li>
                    <li class="submenu-item">
                        <a href="/jadwal-mendatang-plp">Mendatang</a>
                    </li>
                    <li class="submenu-item">
                        <a href="jadwal-riwayat-plp">Riwayat</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="{{ route('logOut') }}" class='sidebar-link'>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </li>
            
        </ul>
    </div>
    
</aside>