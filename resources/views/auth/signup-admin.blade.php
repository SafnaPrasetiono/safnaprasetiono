@extends('auth.layout.panel-auth')

@section('head')
<title>signup - wellcome in signup admins</title>
@endsection

@section('pages')
<div class="box-auth">
    <div class="container">
        <div class="head-auth pt-5 pt-md-4 pb-3 pb-md-4">
            <h2 class="text-primary">signup</h2>
            <p class="m-0">Wellcome in signup pages</p>
        </div>
        <div class="auth-body py-3 py-md-2">
            <form action="{{ route('admin.signup.post') }}" method="post">
                @csrf
                @method('post')
                <div class="row g-2 mb-2">
                    <div class="col">
                        <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror"
                            placeholder="First name" value="{{ old('fname') }}">
                    </div>
                    <div class="col">
                        <input type="text" name="lname" class="form-control @error('lname') is-invalid @enderror"
                            placeholder="Last name" value="{{ old('lname') }}">
                    </div>
                    <div class="col-12">
                        @error('fname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        @error('lname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-2">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="exampleInputEmail1" placeholder="Your Email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4 mb-md-3">
                    <input type="password" name="password_confirmation"
                        class="form-control @error('password_confirmation') is-invalid @enderror"
                        placeholder="Comfrim Password">
                    @error('passwordConfrim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </form>
        </div>
        <div class="auth-footer py-1 py-md-0">
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
                <small class="d-block text-secondary">Your Heave an Account</small>
                <a href="/admin/login" class="text-decoration-none">LOGIN</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection