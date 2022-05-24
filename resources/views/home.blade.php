@extends('layouts.panel')

@section('head')
<title>Home - Wellcome in safna resume</title>
<link rel="stylesheet" href="{{ asset('/dist/carousel/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('/dist/carousel/css/owl.theme.default.min.css') }}">
<style>
    .box-img-avatar {
        width: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        transition: all 0.3s;
    }

    .img-avatar {
        width: 100%;
    }

    .cart-educations:hover {
        box-shadow: 0 0 1rem #0005;
    }

    .card-slider {
        overflow-x: auto;
    }

    @media(max-width: 768px) {
        .img-avatar {
            background-size: 100%;
            background-position: right;
        }

        .owl-stage {
            transform: translate3d(160px, 0px, 0px);
        }

        .box-img-avatar {
            margin-left: auto;
            margin-right: auto;
            display: block;
            position: relative;
            width: 140px;
            height: 140px;
            border-radius: 50%;
            overflow: hidden;
            border: 1px solid #0d6efd;
        }

        .img-avatar {
            width: 138%;
            margin: -20%;
        }
    }
</style>
@endsection

@section('pages')
<div class="banner alert-secondary pt-5 overflow-hidden">
    <div class="container py-5">
        <div class="row g-5 g-md-4 align-items-center">
            <div class="col-md-5 col-lg-4 order-md-1">
                <div class="box-img-avatar">
                    <img src="{{ asset('/images/wallpaper/safna.png') }}" alt="author" class="img-avatar">
                </div>
            </div>
            <div class="col-md-7 col-lg-8">
                <div class="text-center text-md-start mb-4">
                    <h1 class="fs-1">SAFNA PRASETIONO</h1>
                    <h5 class="mb-3">Web Develope</h5>
                    <p class="mb-3">
                        Hello, my name is Safna Prasetiono you can call me safna. I am 23 years old. I am a fresh
                        graduate
                        from Gunadarma University. I am a programmer because my bobi makes programs. Thank you for
                        your
                        attention and hope you have a great day
                    </p>
                    <a href="#" class="btn btn-outline-primary">Download Resume</a>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- education --}}
<div class="container py-5">
    <div class="mb-3">
        <div class="py-3">
            <h2 class="mb-0">Education Formal</h2>
        </div>
        <div class="row g-3">
            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 overflow-hidden shadow">
                    <div class="alert-secondary text-center p-5">
                        <i class="fas fa-school fa-2x fa-fw"></i>
                    </div>
                    <div class="card-body pb-5">
                        <h5 class="card-title">SDN 16 Pagi</h5>
                        <p class="card-text">
                            Sekolah dasar 16 pagi jakarta position-absolute mb-3 bottom-0pusat kelulusan tahun 2010.
                        </p>
                        <a href="/education/1-sdn-16-pg" class="btn btn-primary position-absolute mb-3 bottom-0">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 overflow-hidden shadow">
                    <div class="alert-secondary text-center p-5">
                        <i class="fas fa-school fa-2x fa-fw"></i>
                    </div>
                    <div class="card-body pb-5">
                        <h5 class="card-title">SMP Perguruan Ksatrya</h5>
                        <p class="card-text">Sekolah menengah pertama di perguruan ksatrya jakarta kelulusan tahun 2013.
                        </p>
                        <a href="#" class="btn btn-primary position-absolute mb-3 bottom-0">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 overflow-hidden shadow">
                    <div class="alert-secondary text-center p-5">
                        <i class="fas fa-university fa-2x fa-fw"></i>
                    </div>
                    <div class="card-body pb-5">
                        <h5 class="card-title">SMA Perguruan Ksatrya</h5>
                        <p class="card-text">Sekolah menengah atas di perguruan ksatrya jakarta kelulusan tahun 2016.
                        </p>
                        <a href="#" class="btn btn-primary position-absolute mb-3 bottom-0">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 overflow-hidden shadow">
                    <div class="alert-secondary text-center p-5">
                        <i class="fas fa-graduation-cap fa-2x fa-fw"></i>
                    </div>
                    <div class="card-body pb-5">
                        <h5 class="card-title">Universitas Gunadarma</h5>
                        <p class="card-text">Fakultas ilmu komputer & sistem informasi jurusan sistem informasi
                            kelulusan tahun 2020.</p>
                        <a href="#" class="btn btn-primary position-absolute mb-3 bottom-0">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="py-3">
            <h2 class="mb-0">Education UnFormal</h2>
        </div>
        <div class="row g-3">
            <div class="col-6 col-md-3">
                <div class="cart rounded overflow-hidden shadow">
                    <div class="alert-secondary text-center p-5">
                        <i class="fas fa-school fa-2x fa-fw"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="cart rounded overflow-hidden shadow">
                    <div class="alert-secondary text-center p-5">
                        <i class="fas fa-school fa-2x fa-fw"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="cart rounded overflow-hidden shadow">
                    <div class="alert-secondary text-center p-5">
                        <i class="fas fa-school fa-2x fa-fw"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="cart rounded overflow-hidden shadow">
                    <div class="alert-secondary text-center p-5">
                        <i class="fas fa-school fa-2x fa-fw"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- skill --}}
<div class="alert-secondary py-5">
    <div class="container">
        <div class="mb-3">
            <h3 class="m-0">Keahlian</h3>
        </div>
        <div class="row gx-3 gy-4 mb-5">

            <div class="col-6 col-md-4">
                <div class="d-flex bg-light rounded shadow w-100">
                    <div class="bg-secondary text-light rounded p-2">
                        <i class="fab fa-html5 fa-2x fa-fw"></i>
                    </div>
                    <div class="flex-fill mx-2">
                        <p class="fw-bold mb-1">HTML5</p>
                        <div class="progress" style="height: 12px">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="d-flex bg-light rounded shadow w-100">
                    <div class="bg-secondary text-light rounded p-2">
                        <i class="fab fa-css3 fa-2x fa-fw"></i>
                    </div>
                    <div class="flex-fill mx-2">
                        <p class="fw-bold mb-1">CSS3</p>
                        <div class="progress" style="height: 12px">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="d-flex bg-light rounded shadow w-100">
                    <div class="bg-secondary text-light rounded p-2">
                        <i class="fab fa-js-square fa-2x fa-fw"></i>
                    </div>
                    <div class="flex-fill mx-2">
                        <p class="fw-bold mb-1">JAVASCRIPT</p>
                        <div class="progress" style="height: 12px">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="d-flex bg-light rounded shadow w-100">
                    <div class="bg-secondary text-light rounded p-2">
                        <i class="fab fa-laravel fa-2x fa-fw"></i>
                    </div>
                    <div class="flex-fill mx-2">
                        <p class="fw-bold mb-1">Laravel</p>
                        <div class="progress" style="height: 12px">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="d-flex bg-light rounded shadow w-100">
                    <div class="bg-secondary text-light rounded p-2">
                        <i class="fab fa-free-code-camp fa-2x fa-fw"></i>
                    </div>
                    <div class="flex-fill mx-2">
                        <p class="fw-bold mb-1">Codeigniter</p>
                        <div class="progress" style="height: 12px">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="d-flex bg-light rounded shadow w-100">
                    <div class="bg-secondary text-light rounded p-2">
                        <i class="fab fa-bootstrap fa-2x fa-fw"></i>
                    </div>
                    <div class="flex-fill mx-2">
                        <p class="fw-bold mb-1">Bootstrap</p>
                        <div class="progress" style="height: 12px">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="d-flex bg-light rounded shadow w-100">
                    <div class="bg-secondary text-light rounded p-2">
                        <i class="fab fa-vuejs fa-2x fa-fw"></i>
                    </div>
                    <div class="flex-fill mx-2">
                        <p class="fw-bold mb-1">VUE JS</p>
                        <div class="progress" style="height: 12px">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="d-flex bg-light rounded shadow w-100">
                    <div class="bg-secondary text-light rounded p-2">
                        <i class="fas fa-database fa-2x fa-fw"></i>
                    </div>
                    <div class="flex-fill mx-2">
                        <p class="fw-bold mb-1">MySQL</p>
                        <div class="progress" style="height: 12px">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="d-flex bg-light rounded shadow w-100">
                    <div class="bg-secondary text-light rounded p-2">
                        <i class="fab fa-git-alt fa-2x fa-fw"></i>
                    </div>
                    <div class="flex-fill mx-2">
                        <p class="fw-bold mb-1">Git</p>
                        <div class="progress" style="height: 12px">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="d-flex bg-light rounded shadow w-100">
                    <div class="bg-secondary text-light rounded p-2">
                        <i class="fab fa-github fa-2x fa-fw"></i>
                    </div>
                    <div class="flex-fill mx-2">
                        <p class="fw-bold mb-1">Github</p>
                        <div class="progress" style="height: 12px">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="d-flex bg-light rounded shadow w-100">
                    <div class="bg-secondary text-light rounded p-2">
                        <i class="fab fa-react fa-2x fa-fw"></i>
                    </div>
                    <div class="flex-fill mx-2">
                        <p class="fw-bold mb-1">React Native</p>
                        <div class="progress" style="height: 12px">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="alert alert-light shadow m-0" role="alert">
                    <div class="d-flex align-items-center">
                        <div class="m-0 me-2">
                            <i class="fas fa-info-circle fa-lg"></i>
                            Informasi penilain berdasarkan dari develope
                        </div>
                        <a href="" class="btn btn-outline-primary ms-auto py-1">Detail</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- project --}}
<div class="py-5">
    <div class="container">
        <div class="mb-3">
            <h2 class="m-0">Projek</h2>
        </div>
        <div class="row g-3">

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card shadow h-100">
                    <img src="{{ url('/images/repositories/flossprint.png') }}" class="card-img-top" alt="card">
                    <div class="card-body">
                        <h5 class="card-title">Toko Flossprint Studio</h5>
                        <p class="card-text">Toko penjualan pakaian serta jasa pembuatan sablon baju</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card shadow h-100">
                    <img src="{{ url('/images/repositories/login-desain.png') }}" class="card-img-top w-100" alt="card">
                    <div class="card-body">
                        <h5 class="card-title">Desain Halaman Login</h5>
                        <p class="card-text">Pembuatan tamplate desain login responsive untuk website</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card shadow h-100">
                    <img src="{{ url('/images/repositories/agentdrink.png') }}" class="card-img-top w-100" alt="card">
                    <div class="card-body">
                        <h5 class="card-title">Agentdrink Inventory</h5>
                        <p class="card-text">Aplikasi inventori berbasis website untuk penyimpanan data serta penjualan
                            pada agen minuman.</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card shadow h-100">
                    <img src="{{ url('/images/repositories/dashboard-template.png') }}" class="card-img-top w-100"
                        alt="card">
                    <div class="card-body">
                        <h5 class="card-title">Dashboard template</h5>
                        <p class="card-text">Pembuatan tampilan dashboard responsive untuk aplikasi website.</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card shadow h-100">
                    <img src="{{ url('/images/repositories/crud_php_mysql.png') }}" class="card-img-top w-100"
                        alt="card">
                    <div class="card-body">
                        <h5 class="card-title">CRUD PHP MYSQL</h5>
                        <p class="card-text">Create, Read, Update, dan Delete, menggunakan PHP dan MySQL.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="alert-secondary py-5">
    <div class="container">
        <div class="py-3">
            <h2 class="mb-0">Konten Programmer</h2>
        </div>
        <div class="row gx-3 gy-4 mb-3">
            @for ($i = 1; $i <= 8; $i++) <div class="col-6 col-md-3">
                <div class="card card-video-content overflow-hidden">
                    <img src="{{ url('/images/wallpaper/laravel.png') }}" alt="vid">
                    <div class="d-flex align-items-center justify-content-center position-absolute text-white w-100 h-100"
                        style="background-color: #0004">
                        <i class="fas fa-play fa-2x fa-fw"></i>
                    </div>
                </div>
        </div>
        @endfor
    </div>
</div>
</div>

<div class="bg-white py-5">
    <div class="container mb-3">
        <div class="py-3">
            <h2 class="mb-0">Kontak Saya</h2>
        </div>
        <div class="row gx-3 gy-4">
            <div class="col-12">
                <iframe class="rounded shadow w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.3008965080599!2d106.86484096485904!3d-6.1840147890419965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4f872acc7eb%3A0xc420b3389b49a76a!2sJl.%20Cemp.%20Putih%20Bar.%20No.5%2C%20RT.9%2FRW.13%2C%20Cemp.%20Putih%20Bar.%2C%20Kec.%20Cemp.%20Putih%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010520!5e0!3m2!1sid!2sid!4v1637854275323!5m2!1sid!2sid"
                    height="300px" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex align-items-center position-relative rounded overflow-hidden shadow bg-light">
                    <div class="p-3 alert-secondary">
                        <i class="fas fa-at fa-2x fa-fw"></i>
                    </div>
                    <div class="px-2">
                        <p class="fw-bold m-0 lh-1">My Email</p>
                        <span>safnaprasetino71@gmail.com</span>
                    </div>
                    <a href="mailto:safnaprasetiono71@gmail.com" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex align-items-center position-relative rounded overflow-hidden shadow bg-light">
                    <div class="p-3 alert-secondary">
                        <i class="fab fa-whatsapp fa-2x fa-fw"></i>
                    </div>
                    <div class="px-2">
                        <p class="fw-bold m-0 lh-1">Phone Number</p>
                        <span>087778335325</span>
                    </div>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=6287778335325"
                        class="stretched-link"></a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex align-items-center position-relative rounded overflow-hidden shadow bg-light">
                    <div class="p-3 alert-secondary">
                        <i class="fab fa-github fa-2x fa-fw"></i>
                    </div>
                    <div class="px-2">
                        <p class="fw-bold m-0 lh-1">Github</p>
                        <span>safnaprasetiono</span>
                    </div>
                    <a href="https://github.com/SafnaPrasetiono" target="_blank" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('/dist/carousel/js/owl.carousel.min.js') }}"></script>
<script>
    $('.owl-carousel').owlCarousel({
        center: true,
        loop:false,
        margin:8,
        dots: false,
        stagePadding: true,
        responsive:{
            0:{
                items:2
            },
            480:{
                items:2
            },
            768:{
                items:3
            },
            960:{
                items:4
            }
        }
        
    })
</script>
@endsection