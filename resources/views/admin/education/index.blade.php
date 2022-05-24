@extends('admin.layouts.panel')

@section('head')
    <title>safna prasetiono - educations pages</title>
@endsection

@section('pages')
    <div class="container-fluid py-3">
        <div class="row gy-3">
            <div class="col-12">
                <div class="d-block bg-white rounded shadow p-3">
                    <h2 class="mb-0">Education Pages</h2>
                </div>
            </div>
            <div class="col-12">
                @livewire('admin.education.data-education')
            </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection