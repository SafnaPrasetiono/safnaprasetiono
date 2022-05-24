@extends('layouts.panel')

@section('head')
<title>safna prasetiono - pendidikan</title>
@endsection

@section('pages')
<div class="py-5 alert-secondary">
    <div class="container pt-5 pb-3 mt-3">
        <div class="row g-4 justify-content-center align-items-center">
            <div class="col-12 col-md-6 order-2 order-md-1">
                <h1>SDN 16 PAGI</h1>
                <p class="mb-0 fs-5 pe-0 pe-md-3">pernah bersekolah di sekolah dasar negri 16 petang jakarta pusat pada tahun 2004 sampain tahun 2007</p>
            </div>
            <div class="col-8 col-md-4 order-1 order-md-2 ms-md-auto">
                <img src="{{ url('/images/wallpaper/laravel.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="mb-4">
            <h3 class="fw-light">RIWAYAT PENDIDIKAN</h3>
        </div>
        <div class="row g-4">
            <?php for($x=1; $x <= 6; $x++) : ?>
            <div class="col-12 col-md-4">
                <div class="d-block bg-white rounded shadow p-3">
                    <P class="fw-bold mb-0">Kelas {{ $x }}</P>
                    <p class="fw-light">SDN 16 PAGI JAKARTA</p>
                    <small>2004 - 2004</small>
                    <div class="row">
                        <div class="col-5">
                            <p class="mb-0">Index Nilai</p>
                        </div>
                        <div class="col">: 80</div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="mb-0">keterangan</p>
                        </div>
                        <div class="col">: Lulus</div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="mb-4">
            <h3 class="fw-light">Galeri</h3>
        </div>
        <div class="row g-4">
            <?php for($x=1; $x <= 6; $x++) : ?>
            <div class="col-6 col-md-4">
                <img src="{{ url('/images/wallpaper/laravel.png') }}" alt="" class="img-fluid rounded shadow">
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="d-flex align-items-center mb-3">
                    <i class="fas fa-map-marker-alt fa-lg fa-fw"></i>
                    <p class="mb-0 ms-3 fw-bold fs-5">SDN 16 PAGI</p>
                </div>
                <div class="p-2">
                    <p class="">Jl. Cemp. Putih Bar. No.19, RT.10/RW.3, Cemp. Putih Bar., Kec. Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10520</p>
                    <p>(021)-42884357</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63465.538909556155!2d106.85010540560856!3d-6.184762773071649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f454c5b44769%3A0xc90ea8362aeed838!2sSD%20Negeri%20Cempaka%20Putih%20Barat%2016%20Pagi!5e0!3m2!1sid!2sid!4v1644688663164!5m2!1sid!2sid" class="d-block w-100" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')

@endsection