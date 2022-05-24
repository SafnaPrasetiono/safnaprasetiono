@extends('admin.layouts.panel')

@section('head')
    <title>safna prasetiono - tambah pendidikan</title>
    <style>
        .banners{
            display: block;
            border: 2px dashed rgb(180, 180, 180);
            cursor: pointer;
        }
    </style>
@endsection

@section('pages')
<div class="py-3">
    <div class="container-fluid mb-3">
        <div class="d-block rounded bg-white shadow p-3">
            <h2>Tambah Pendidikan</h2>
        </div>
    </div>

    <div class="container-fluid mb-3">
        <form action="{{ route('admin.education.store') }}" method="POST"  enctype="multipart/form-data" class="d-block rounded bg-white shadow p-3">
            @csrf
            @method('post')
            <div class="mb-3 row align-items-center">
                <label for="sekolah" class="form-label col-sm-3">Nama Sekolah</label>
                <div class="col-sm-9">
                    <input type="text" name="sekolah_name" id="sekolah" class="form-control">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="tingkatan" class="form-label col-sm-3">Tingkatan</label>
                <div class="col-sm-9">
                    <select name="tingkatan" id="tingkatan" class="form-select">
                        <option value="sd">Sekolah Dasar</option>
                        <option value="smp">Sekolah Menengah Pertama</option>
                        <option value="sma">Sekolah Menengan Atas</option>
                        <option value="universitas">Universitas</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="phone" class="form-label col-sm-3">Nomor Telepon</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="phone" maxlength="12">
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi Singkat Sekolah</label>
                <textarea name="description" id="description" class="form-control" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea name="address" id="address" class="form-control" rows="2"></textarea>
            </div>
            <div class="mb-3">
                <label for="banner" class="form-label">banner</label>
                <label class="banners py-5 text-center" for="imgBanner">
                    <i class="fas fa-upload fa-2x fa-fw mb-3"></i>
                    <p class="fw-light fs-5 mb-0">Upload Your Banner</p>
                </label>
                <input type="file" name="banner" id="imgBanner" class="d-none">
            </div>
            <div class="d-grid col-12 col-md-4 mb-3">
                <button type="submit" class="btn btn-outline-primary">Save Change</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('script')
    
@endsection