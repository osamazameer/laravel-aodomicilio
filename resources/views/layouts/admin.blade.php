<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="resources/styles/style.css">



</head>

<body>

    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">AODOMICILLIO</div>
            </a>
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Products</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="dropdown-item" href="{{ route('product') }}">Products</a>
                        <a class="dropdown-item" href="{{ route('create-product') }}">New Product</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Categories</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="dropdown-item" href="{{ route('category') }}">Categories</a>
                        <a class="dropdown-item" href="{{ route('create-category') }}">New Category</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Orders</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="dropdown-item" href="{{ route('order-list') }}">Manage Orders</a>
                    </div>
                </div>
            </li>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-gradient-primary   topbar mb-4 static-top shadow">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Shujja Osama</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    @yield('admincontent')
                </div>
            </div>
        </div>
    </div>






</body>
<style>
    .text-body {
        color: #858796 !important;
    }

    .text-muted {
        color: #858796 !important;
    }

    .text-black-50 {
        color: rgba(0, 0, 0, 0.5) !important;
    }

    .text-white-50 {
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0;
    }

    .text-decoration-none {
        text-decoration: none !important;
    }


    html {
        position: relative;
        min-height: 100%;
    }

    body {
        height: 100%;
    }

    a:focus {
        outline: none;
    }

    #wrapper {
        display: flex;
    }

    #wrapper #content-wrapper {
        background-color: #f8f9fc;
        width: 100%;
        overflow-x: hidden;
    }

    #wrapper #content-wrapper #content {
        flex: 1 0 auto;
    }


    .animated--fade-in {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
        -webkit-animation-duration: 200ms;
        animation-duration: 200ms;
        -webkit-animation-timing-function: opacity cubic-bezier(0, 1, 0.4, 1);
        animation-timing-function: opacity cubic-bezier(0, 1, 0.4, 1);
    }

    .bg-gradient-primary {
        background: #710000 !important;

    }

    .sidebar .nav-item .nav-link,
    .topbar .nav-item .nav-link {
        position: relative;
    }

    .sidebar .nav-item .nav-link .badge-counter,
    .topbar .nav-item .nav-link .badge-counter {
        position: absolute;
        transform: scale(0.7);
        transform-origin: top right;
        right: .25rem;
        margin-top: -.25rem;
    }

    .sidebar .nav-item .nav-link .img-profile,
    .topbar .nav-item .nav-link .img-profile {
        height: 2rem;
        width: 2rem;
    }

    .topbar {
        height: 4.375rem;
    }

    .topbar #sidebarToggleTop {
        height: 2.5rem;
        width: 2.5rem;
    }

    .topbar #sidebarToggleTop:hover {
        background-color: #eaecf4;
    }

    .topbar #sidebarToggleTop:active {
        background-color: #dddfeb;
    }

    .topbar .navbar-search {
        width: 25rem;
    }

    .topbar .navbar-search input {
        font-size: 0.85rem;
        height: auto;
    }

    .topbar .topbar-divider {
        width: 0;
        border-right: 1px solid #e3e6f0;
        height: calc(4.375rem - 2rem);
        margin: auto 1rem;
    }

    .topbar .nav-item .nav-link {
        height: 4.375rem;
        display: flex;
        align-items: center;
        padding: 0 0.75rem;
    }

    .topbar .nav-item .nav-link:focus {
        outline: none;
    }

    .topbar .nav-item:focus {
        outline: none;
    }

    .topbar .dropdown {
        position: static;
    }

    .topbar .dropdown .dropdown-menu {
        width: calc(100% - 1.5rem);
        right: 0.75rem;
    }

    .topbar .dropdown-list {
        padding: 0;
        border: none;
        overflow: hidden;
    }

    .topbar .dropdown-list .dropdown-header {
        background-color: #4e73df;
        border: 1px solid #4e73df;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        color: #fff;
    }

    .topbar .dropdown-list .dropdown-item {
        white-space: normal;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        border-left: 1px solid #e3e6f0;
        border-right: 1px solid #e3e6f0;
        border-bottom: 1px solid #e3e6f0;
        line-height: 1.3rem;
    }

    .topbar .dropdown-list .dropdown-item .dropdown-list-image {
        position: relative;
        height: 2.5rem;
        width: 2.5rem;
    }

    .topbar .dropdown-list .dropdown-item .dropdown-list-image img {
        height: 2.5rem;
        width: 2.5rem;
    }

    .topbar .dropdown-list .dropdown-item .dropdown-list-image .status-indicator {
        background-color: #eaecf4;
        height: 0.75rem;
        width: 0.75rem;
        border-radius: 100%;
        position: absolute;
        bottom: 0;
        right: 0;
        border: 0.125rem solid #fff;
    }

    .topbar .dropdown-list .dropdown-item .text-truncate {
        max-width: 10rem;
    }

    .topbar .dropdown-list .dropdown-item:active {
        background-color: #eaecf4;
        color: #3a3b45;
    }

    @media (min-width: 576px) {
        .topbar .dropdown {
            position: relative;
        }

        .topbar .dropdown .dropdown-menu {
            width: auto;
            right: 0;
        }

        .topbar .dropdown-list {
            width: 20rem !important;
        }

        .topbar .dropdown-list .dropdown-item .text-truncate {
            max-width: 13.375rem;
        }
    }

    .topbar.navbar-dark .navbar-nav .nav-item .nav-link {
        color: rgba(255, 255, 255, 0.8);
    }

    .topbar.navbar-dark .navbar-nav .nav-item .nav-link:hover {
        color: #fff;
    }

    .topbar.navbar-dark .navbar-nav .nav-item .nav-link:active {
        color: #fff;
    }

    .topbar.navbar-light .navbar-nav .nav-item .nav-link {
        color: #d1d3e2;
    }

    .topbar.navbar-light .navbar-nav .nav-item .nav-link:hover {
        color: #b7b9cc;
    }

    .topbar.navbar-light .navbar-nav .nav-item .nav-link:active {
        color: #858796;
    }

    .sidebar {
        width: 6.5rem;
        min-height: 100vh;
    }

    .sidebar .nav-item {
        position: relative;
    }

    .sidebar .nav-item:last-child {
        margin-bottom: 1rem;
    }

    .sidebar .nav-item .nav-link {
        text-align: center;
        padding: 0.75rem 1rem;
        width: 6.5rem;
    }

    .sidebar .nav-item .nav-link span {
        font-size: 0.65rem;
        display: block;
    }

    .sidebar .nav-item.active .nav-link {
        font-weight: 700;
    }

    .sidebar .nav-item .collapse {
        position: absolute;
        left: calc(6.5rem + 1.5rem / 2);
        z-index: 1;
        top: 2px;
    }

    .sidebar .nav-item .collapse .collapse-inner {
        border-radius: 0.35rem;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
    }

    .sidebar .nav-item .collapsing {
        display: none;
        transition: none;
    }

    .sidebar .nav-item .collapse .collapse-inner,
    .sidebar .nav-item .collapsing .collapse-inner {
        padding: .5rem 0;
        min-width: 10rem;
        font-size: 0.85rem;
        margin: 0 0 1rem 0;
    }

    .sidebar .nav-item .collapse .collapse-inner .collapse-header,
    .sidebar .nav-item .collapsing .collapse-inner .collapse-header {
        margin: 0;
        white-space: nowrap;
        padding: .5rem 1.5rem;
        text-transform: uppercase;
        font-weight: 800;
        font-size: 0.65rem;
        color: #b7b9cc;
    }

    .sidebar .nav-item .collapse .collapse-inner .collapse-item,
    .sidebar .nav-item .collapsing .collapse-inner .collapse-item {
        padding: 0.5rem 1rem;
        margin: 0 0.5rem;
        display: block;
        color: #3a3b45;
        text-decoration: none;
        border-radius: 0.35rem;
        white-space: nowrap;
    }

    .sidebar .nav-item .collapse .collapse-inner .collapse-item:hover,
    .sidebar .nav-item .collapsing .collapse-inner .collapse-item:hover {
        background-color: #eaecf4;
    }

    .sidebar .nav-item .collapse .collapse-inner .collapse-item:active,
    .sidebar .nav-item .collapsing .collapse-inner .collapse-item:active {
        background-color: #dddfeb;
    }

    .sidebar .nav-item .collapse .collapse-inner .collapse-item.active,
    .sidebar .nav-item .collapsing .collapse-inner .collapse-item.active {
        color: #4e73df;
        font-weight: 700;
    }

    .sidebar #sidebarToggle {
        width: 2.5rem;
        height: 2.5rem;
        text-align: center;
        margin-bottom: 1rem;
        cursor: pointer;
    }

    .sidebar #sidebarToggle::after {
        font-weight: 900;
        content: '\f104';
        font-family: 'Font Awesome 5 Free';
        margin-right: 0.1rem;
    }

    .sidebar #sidebarToggle:hover {
        text-decoration: none;
    }

    .sidebar #sidebarToggle:focus {
        outline: none;
    }

    .sidebar.toggled {
        width: 0 !important;
        overflow: hidden;
    }

    .sidebar.toggled #sidebarToggle::after {
        content: '\f105';
        font-family: 'Font Awesome 5 Free';
        margin-left: 0.25rem;
    }

    .sidebar.toggled .sidebar-card {
        display: none;
    }

    .sidebar .sidebar-brand {
        height: 4.375rem;
        text-decoration: none;
        font-size: 1rem;
        font-weight: 800;
        padding: 1.5rem 1rem;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 0.05rem;
        z-index: 1;
    }

    .sidebar .sidebar-brand .sidebar-brand-icon i {
        font-size: 2rem;
    }

    .sidebar .sidebar-brand .sidebar-brand-text {
        display: none;
    }

    .sidebar hr.sidebar-divider {
        margin: 0 1rem 1rem;
    }

    .sidebar .sidebar-heading {
        text-align: center;
        padding: 0 1rem;
        font-weight: 800;
        font-size: 0.65rem;
    }

    .sidebar .sidebar-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 0.875rem;
        border-radius: 0.35rem;
        color: rgba(255, 255, 255, 0.8);
        margin-left: 1rem;
        margin-right: 1rem;
        margin-bottom: 1rem;
        padding: 1rem;
        background-color: rgba(0, 0, 0, 0.1);
    }

    .sidebar .sidebar-card .sidebar-card-illustration {
        height: 3rem;
        display: block;
    }

    .sidebar .sidebar-card .sidebar-card-title {
        font-weight: bold;
    }

    .sidebar .sidebar-card p {
        font-size: 0.75rem;
        color: rgba(255, 255, 255, 0.5);
    }

    @media (min-width: 768px) {
        .sidebar {
            width: 14rem !important;
        }

        .sidebar .nav-item .collapse {
            position: relative;
            left: 0;
            z-index: 1;
            top: 0;
            -webkit-animation: none;
            animation: none;
        }

        .sidebar .nav-item .collapse .collapse-inner {
            border-radius: 0;
            box-shadow: none;
        }

        .sidebar .nav-item .collapsing {
            display: block;
            transition: height 0.15s ease;
        }

        .sidebar .nav-item .collapse,
        .sidebar .nav-item .collapsing {
            margin: 0 1rem;
        }

        .sidebar .nav-item .nav-link {
            display: block;
            width: 100%;
            text-align: left;
            padding: 1rem;
            width: 14rem;
        }

        .sidebar .nav-item .nav-link i {
            font-size: 0.85rem;
            margin-right: 0.25rem;
        }

        .sidebar .nav-item .nav-link span {
            font-size: 0.85rem;
            display: inline;
        }





        .sidebar .sidebar-brand .sidebar-brand-icon i {
            font-size: 2rem;
        }

        .sidebar .sidebar-brand .sidebar-brand-text {
            display: inline;
        }

        .sidebar .sidebar-heading {
            text-align: left;
        }

        .sidebar.toggled {
            overflow: visible;
            width: 6.5rem !important;
        }

        .sidebar.toggled .nav-item .collapse {
            position: absolute;
            left: calc(6.5rem + 1.5rem / 2);
            z-index: 1;
            top: 2px;
            -webkit-animation-name: growIn;
            animation-name: growIn;
            -webkit-animation-duration: 200ms;
            animation-duration: 200ms;
            -webkit-animation-timing-function: transform cubic-bezier(0.18, 1.25, 0.4, 1), opacity cubic-bezier(0, 1, 0.4, 1);
            animation-timing-function: transform cubic-bezier(0.18, 1.25, 0.4, 1), opacity cubic-bezier(0, 1, 0.4, 1);
        }

        .sidebar.toggled .nav-item .collapse .collapse-inner {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            border-radius: 0.35rem;
        }

        .sidebar.toggled .nav-item .collapsing {
            display: none;
            transition: none;
        }

        .sidebar.toggled .nav-item .collapse,
        .sidebar.toggled .nav-item .collapsing {
            margin: 0;
        }

        .sidebar.toggled .nav-item:last-child {
            margin-bottom: 1rem;
        }

        .sidebar.toggled .nav-item .nav-link {
            text-align: center;
            padding: 0.75rem 1rem;
            width: 6.5rem;
        }

        .sidebar.toggled .nav-item .nav-link span {
            font-size: 0.65rem;
            display: block;
        }

        .sidebar.toggled .nav-item .nav-link i {
            margin-right: 0;
        }

        .sidebar.toggled .nav-item .nav-link[data-toggle="collapse"]::after {
            display: none;
        }

        .sidebar.toggled .sidebar-brand .sidebar-brand-icon i {
            font-size: 2rem;
        }

        .sidebar.toggled .sidebar-brand .sidebar-brand-text {
            display: none;
        }

        .sidebar.toggled .sidebar-heading {
            text-align: center;
        }
    }

    .sidebar-light .sidebar-brand {
        color: #6e707e;
    }

    .sidebar-light hr.sidebar-divider {
        border-top: 1px solid #eaecf4;
    }

    .sidebar-light .sidebar-heading {
        color: #b7b9cc;
    }

    .sidebar-light .nav-item .nav-link {
        color: #858796;
    }

    .sidebar-light .nav-item .nav-link i {
        color: #d1d3e2;
    }

    .sidebar-light .nav-item .nav-link:active,
    .sidebar-light .nav-item .nav-link:focus,
    .sidebar-light .nav-item .nav-link:hover {
        color: #6e707e;
    }

    .sidebar-light .nav-item .nav-link:active i,
    .sidebar-light .nav-item .nav-link:focus i,
    .sidebar-light .nav-item .nav-link:hover i {
        color: #6e707e;
    }

    .sidebar-light .nav-item .nav-link[data-toggle="collapse"]::after {
        color: #b7b9cc;
    }

    .sidebar-light .nav-item.active .nav-link {
        color: #6e707e;
    }

    .sidebar-light .nav-item.active .nav-link i {
        color: #6e707e;
    }

    .sidebar-light #sidebarToggle {
        background-color: #eaecf4;
    }

    .sidebar-light #sidebarToggle::after {
        color: #b7b9cc;
    }

    .sidebar-light #sidebarToggle:hover {
        background-color: #dddfeb;
    }

    .sidebar-dark .sidebar-brand {
        color: #fff;
    }

    .sidebar-dark hr.sidebar-divider {
        border-top: 1px solid rgba(255, 255, 255, 0.15);
    }

    .sidebar-dark .sidebar-heading {
        color: rgba(255, 255, 255, 0.4);
    }

    .sidebar-dark .nav-item .nav-link {
        color: rgba(255, 255, 255, 0.8);
    }

    .sidebar-dark .nav-item .nav-link i {
        color: rgba(255, 255, 255, 0.3);
    }

    .sidebar-dark .nav-item .nav-link:active,
    .sidebar-dark .nav-item .nav-link:focus,
    .sidebar-dark .nav-item .nav-link:hover {
        color: #fff;
    }

    .sidebar-dark .nav-item .nav-link:active i,
    .sidebar-dark .nav-item .nav-link:focus i,
    .sidebar-dark .nav-item .nav-link:hover i {
        color: #fff;
    }

    .sidebar-dark .nav-item .nav-link[data-toggle="collapse"]::after {
        color: rgba(255, 255, 255, 0.5);
    }

    .sidebar-dark .nav-item.active .nav-link {
        color: #fff;
    }

    .sidebar-dark .nav-item.active .nav-link i {
        color: #fff;
    }

    .sidebar-dark #sidebarToggle {
        background-color: rgba(255, 255, 255, 0.2);
    }

    .sidebar-dark #sidebarToggle::after {
        color: rgba(255, 255, 255, 0.5);
    }

    .sidebar-dark #sidebarToggle:hover {
        background-color: rgba(255, 255, 255, 0.25);
    }

    .sidebar-dark.toggled #sidebarToggle::after {
        color: rgba(255, 255, 255, 0.5);
    }
</style>

</html>