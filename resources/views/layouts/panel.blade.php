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

    <link rel="stylesheet" href="{{ asset('/dist/app/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/icons/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/style/css/index.css') }}">

    @yield('head')
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">SP-Resume</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navigations">
                <i class="fas fa-bars fa-sm fa-fw"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
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
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="navigations">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">SP-Resume</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="nav flex-column">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link disabled">Disabled</a>
            </nav>
        </div>
    </div>


    <div class="main">
        @yield('pages')
    </div>

    <footer class="alert-secondary">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-8">
                    <span class="fw-bold">About Website</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis velit natus repellendus error
                        illo fugit culpa ad quaerat vitae maxime odit iste, beatae accusamus, est porro maiores ex,
                        ducimus iusto.</p>
                </div>
                <div class="col-6 col-md-2">
                    <nav class="nav flex-column">
                        <a class="nav-link py-1 active" aria-current="page" href="#">Active</a>
                        <a class="nav-link py-1" href="#">Link</a>
                        <a class="nav-link py-1" href="#">Link</a>
                        <a class="nav-link py-1 disabled">Disabled</a>
                    </nav>
                </div>
                <div class="col-6 col-md-2">
                    <nav class="nav flex-column">
                        <a class="nav-link py-1 active" aria-current="page" href="#">Active</a>
                        <a class="nav-link py-1" href="#">Link</a>
                        <a class="nav-link py-1" href="#">Link</a>
                        <a class="nav-link py-1 disabled">Disabled</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="d-flex text-center text-white">
            <span class="flex-fill bg-secondary py-2">
                Createing By Safna Prasetiono || 2020-2022
            </span>
        </div>
    </footer>

    <script src="{{ asset('/dist/style/js/jquery.js') }}"></script>
    <script src="{{ asset('/dist/style/js/popper.js') }}"></script>
    <script src="{{ asset('/dist/app/js/app.js') }}"></script>
    <script src="{{ asset('/dist/style/js/index.js') }}"></script>
    @yield('script')
</body>

</html>