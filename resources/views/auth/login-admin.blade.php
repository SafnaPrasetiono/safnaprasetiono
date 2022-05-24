@extends('auth.layout.panel-auth')

@section('head')
<title>login - wellcome in login admins</title>
@endsection

@section('pages')
<div class="box-auth">
    <div class="container">
        <div class="head-auth pt-5 pt-md-4 pb-3 pb-md-4">
            <h2 class="text-primary">Login</h2>
            <p class="m-0">Wellcome in login pages</p>
        </div>
        <div class="auth-body py-3 py-md-2">
            <form action="{{ route('admin.login.post') }}" method="post">
                @csrf
                <div class="mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="exampleInputEmail1" placeholder="Your Email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div class="d-flex mb-4 mb-md-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>    
                    </div>
                    <a href="#" class="ms-auto text-decoration-none">Get Password?</a>
                </div>
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </form>
        </div>
        <div class="auth-footer py-3 py-md-0">
            <small class="d-block py-3 text-center text-secondary">
                - OR -
            </small>
            <div class="row align-items-center justify-content-center py-2 mb-2">
                <div class="col-auto">
                    <a href="" class="other-link alert-secondary">
                        <img src="{{ url('/images/icons/google.png') }}" alt="links-google" class="img-fluid">
                    </a>
                </div>
                <div class="col-auto">
                    <a href="" class="other-link">
                        <img src="{{ url('/images/icons/facebook.png') }}" alt="links-facebook" class="img-fluid">
                    </a>
                </div>
                <div class="col-auto">
                    <a href="" class="other-link">
                        <img src="{{ url('/images/icons/twitter.png') }}" alt="links-switter" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="text-center py-2 mb-3">
                <small class="d-block text-secondary">Dont Heave Account</small>
                <a href="/admin/signup" class="text-decoration-none">SIGNUP</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection