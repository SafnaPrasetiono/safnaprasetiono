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

    <div class="wrapper alert-secondary">
        <nav class="navbar navbar-expand-md navbar-light py-1 bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" id="btn-slider-toggle">
                    <i class="fas fa-bars fa-lg fa-fw"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('admin.dashboard') }}">dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="slider bg-primary" id="slider-toggle">
            <div class="d-flex p-2 justify-content-between align-items-center">
                <div class="d-flex border rounded text-white fw-bold overflow-hidden ms-2">
                    <span class="ps-2 pe-1">Resume</span>
                    <span class="bg-light border-0 pb-1 px-2 text-primary">SP</span>
                </div>
                <button class="btn btn-outline-light d-block d-md-none lh-1 py-1 px-2 m-1 shadow end-0"
                    onclick="sliderToggle()">
                    <i class="fas fa-arrow-left fa-sm fa-fw py-1"></i>
                </button>
            </div>
            <div class="p-1">
                <nav class="nav flex-column" id="slider-accordion">
                    <a class="nav-link slider-link active" aria-current="page" href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-home box-icons fa-fw"></i>Dashboard
                    </a>
                    <a class="nav-link slider-link active" href="#">
                        <i class="fas fa-user box-icons fa-fw"></i>Profile
                    </a>
                    <hr class="dropdown-divider bg-white">
                    <a class="nav-link slider-link" href="#" data-bs-toggle="collapse" data-bs-target="#educations">
                        <i class="fas fa-school box-icons fa-fw"></i>Pendidikan
                        <i class="fas fa-caret-down fa-fw ms-auto box-icons-arrow"></i>
                    </a>
                    <div class="accordion-collapse collapse" id="educations">
                        <a class="nav-link slider-link-secondary" href="#"> <i
                                class="fas fa-angle-right fa-xs fa-fw"></i>Formal</a>
                        <a class="nav-link slider-link-secondary" href="#"> <i
                                class="fas fa-angle-right fa-xs fa-fw"></i>Tidak Formal</a>
                        <a class="nav-link slider-link-secondary" href="{{ route('admin.education.index') }}"> <i
                                class="fas fa-angle-right fa-xs fa-fw"></i>all Data</a>
                    </div>
                    <a class="nav-link slider-link" href="#" data-bs-toggle="collapse"
                        data-bs-target="#skills">Keahlian</a>
                    <div class="accordion-collapse collapse " id="skills" data-bs-parent="#slider-accordion">
                        <a class="nav-link slider-link-secondary" href="#"> <i
                                class="fas fa-angle-right fa-xs fa-fw"></i>Pribadi</a>
                        <a class="nav-link slider-link-secondary" href="#"> <i
                                class="fas fa-angle-right fa-xs fa-fw"></i>Programming</a>
                        <a class="nav-link slider-link-secondary" href="#"> <i
                                class="fas fa-angle-right fa-xs fa-fw"></i> Lainnya</a>
                    </div>
                    <hr class="dropdown-divider bg-white">
                    <a class="nav-link slider-link" href="#">
                        <i class="fas fa-photo-video box-icons fa-fw"></i>Konten
                    </a>
                    <a class="nav-link slider-link" href="#">
                        <i class="fas fa-file-code box-icons fa-fw"></i>Projek
                    </a>
                    <hr class="dropdown-divider bg-white">
                    <a class="nav-link slider-link" href="{{ route('admin.setting') }}">
                        <i class="fas fa-cog box-icons fa-fw"></i>Setting
                    </a>
                    <a class="nav-link slider-link" href="#">
                        <i class="fas fa-sign-out-alt box-icons fa-fw"></i>LogOut
                    </a>
                </nav>
            </div>
        </div>
        <div class="main-pages">
            @yield('pages')
        </div>
    </div>

    <script src="{{ asset('/dist/style/js/jquery.js') }}"></script>
    <script src="{{ asset('/dist/style/js/popper.js') }}"></script>
    <script src="{{ asset('/dist/app/js/app.js') }}"></script>
    <script src="{{ asset('/dist/style/js/admin/dashboard.js') }}"></script>
    @yield('script')

    @livewireScripts
</body>

</html>