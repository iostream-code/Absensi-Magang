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
                <a href="/admin"><span>Admin</span></a>
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
            
            <li class="sidebar-item {{ ($title === "admin" ? 'active' : '') }}">
                <a href="/admin" class='sidebar-link'>
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ ($title === "user" || $title === "create" || $title === "edit" ? 'active' : '') }}">
                <a href="/admin/user" class='sidebar-link'>
                    <i class="fa-solid fa-user"></i>
                    <span>User</span>
                </a>
            </li>

            <li class="sidebar-item {{ ($title === "riwayat" ? 'active' : '') }}">
                <a href="/riwayat" class='sidebar-link'>
                    <i class="fa-solid fa-book"></i>
                    <span>Riwayat</span>
                </a>
            </li>

            <li class="sidebar-item {{ ($title === "settings" ? 'active' : '') }}">
                <a href="/settings" class='sidebar-link'>
                    <i class="fa-solid fa-gear"></i>
                    <span>Settings</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="/" class='sidebar-link'>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </li>
            
        </ul>
    </div>
    
</aside>