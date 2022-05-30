<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Safna Prasetiono">
    <meta name="keywords" content="safna prasetiono">
    <link rel="icon" type="image/png" href="{{ url('/images/logo/safna.png') }}"/>
    <meta name="title" content="Safna Prasetiono - Merupakan website portofolio safna prasetiono">
    <meta name="description"
        content="Safna Prasetiono merupaka website pengenalan atau portofolio yang bertujuan untuk mengetahui sejarah, pengalaman dan keterampilan mengenai safna prasetiono.">

    <meta name="theme-color" media="(prefers-color-scheme: light)" content="white">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="black">

    @yield('head')

    <link rel="stylesheet" href="{{ asset('/dist/app/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/icons/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/style/css/admin/panel.css') }}">
    @livewireStyles

</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
            <div class="container-fluid">
                <button class="btn btn-default" id="btn-slider" type="button">
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand me-auto text-danger" href="#">Dash<span class="text-warning">Board</span></a>
                <ul class="nav ms-auto">
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <i class="fa fa-bell fa-lg py-2" aria-hidden="true"></i>
                            <span class="badge bg-danger">10</span>
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom align-items-cente mb-2">
                                <i class="fa fa-bell me-3" aria-hidden="true"></i>
                                <span class="fw-bold lh-1">Notifikasi</span>
                            </div>
                            <a class="dropdown-item py-2 overflow-hidden text-truncate" href="#">
                                <p class="lh-1 mb-0 fw-bold">Sample</p>
                                <small class="content-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Quia sint laboriosam in architecto earum.</small>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <img src="{{ url('/images/avatar/' . auth('admin')->user()->avatar) }}" alt="user" class="img-user">
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom mb-2">
                                <img src="{{ url('/images/avatar/' . auth('admin')->user()->avatar) }}" alt="user"
                                    class="img-user me-2">
                                <div class="d-block mt-1">
                                    <p class="fw-bold m-0 lh-1">Username</p>
                                    <small>Email@gmail.com</small>
                                </div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Setting
                            </a>
                            <hr class="dropdown-divider">
                            <a class="btnLogout dropdown-item" href="#">
                                <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>LogOut
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="slider" id="sliders">
            <div class="slider-head">
                <div class="d-block p-3">
                    <img src="{{ url('/images/avatar/' . auth('admin')->user()->avatar) }}" alt="user" class="slider-img-user mb-2">
                    <p class="fw-bold mb-0 lh-1 text-color">{{auth('admin')->user()->username}}</p>
                    <small class="text-color">{{auth('admin')->user()->email}}</small>
                </div>
            </div>
            <div class="slider-body px-1 pb-4">
                <nav class="nav flex-column" id="nav-acordion">
                    <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                        <i class="fa fa-home box-icon" aria-hidden="true"></i>Dashboard
                    </a>
                    <a class="nav-link" href="{{ route('admin.profile') }}">
                        <i class="fas fa-user box-icon" aria-hidden="true"></i>Profile
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link collapsed" href="#loker" type="button" data-bs-toggle="collapse"
                    data-bs-target="#loker">
                    <i class="fas fa-briefcase box-icon fa-fw"></i>Loker
                    <span class="indications">
                        <i class="fas fa-angle-up fa-sm fa-fw"></i>
                    </span>
                    </a>
                    <div id="loker" class="accordion-collapse collapse" data-bs-parent="#nav-accordion">
                        <a class="nav-link nav-link-child ps-5" href="#">
                            <i class="fas fa-users box-icon fa-fw"></i>Magang
                        </a>
                        <a class="nav-link nav-link-child ps-5" href="#">
                            <i class="far fa-user-hard-hat box-icon fa-fw"></i>Bursa Kerja
                        </a>
                    </div>
                    <a class="nav-link" href="#">
                        <i class="far fa-backpack box-icon fa-fw"></i>Karantina
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link" href="#">
                        <i class="fas fa-newspaper box-icon" aria-hidden="true"></i>Berita
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="#">
                        <i class="fas fa-file-alt box-icon fa-fw"></i>Pages
                    </a>
                    <a class="nav-link px-3" href="#">
                        <i class="fas fa-users box-icon fa-fw"></i>User Data
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="btnLogout nav-link px-3" href="#">
                        <i class="fas fa-sign-out-alt box-icon"></i>LogOut
                    </a>
                </nav>
            </div>
        </div>

        <div class="main-pages">
            @yield('pages')
        </div>
    </div>

    <div class="slider-background" id="sliders-background"></div>
    <script src="{{ asset('/dist/style/js/jquery.js') }}"></script>
    <script src="{{ asset('/dist/style/js/popper.js') }}"></script>
    <script src="{{ asset('/dist/app/js/app.js') }}"></script>
    <script src="{{ asset('/dist/style/js/admin/dashboard.js') }}"></script>
    <script src="{{ asset('/dist/style/js/alert.js') }}"></script>
    @yield('script')

    @livewireScripts
</body>

</html>