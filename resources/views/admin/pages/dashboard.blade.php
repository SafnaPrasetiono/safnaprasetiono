@extends('admin.layouts.panel')

@section('head')
    <title>Dashboard - Wellcome in dashbord pages</title>
@endsection

@section('pages')
    <div class="container-fluid py-3">
        <div class="col-12">
            <div class="d-block bg-white rounded shadow p-3">
                <h2 class="mb-0">Dashboard Admins</h2>
                <p class="fw-light fs-5 mb-0">Selamat datang kembali {{auth('admin')->user()->username}}</p>
            </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection