<div>
    <div class="box-auth">
        <div class="container">
            <div class="head-auth py-4 text-center">
                <img src="{{ url('/images/auth/password.png') }}" alt="" class="w-75">
                <p class="fs-3 fw-bold text-primary text-uppercase mb-1">Login</p>
                <p class="m-0 text-uppercase">Wellcome in login pages</p>
            </div>
            <div class="auth-body py-3 py-md-2">
                <div class="mb-3 placeholder-glow">
                    <input wire:model='email' type="email" name="email"
                        class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                        placeholder="Your Email" wire:loading.class='placeholder' wire:target='submit'>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3 placeholder-glow">
                    <input wire:model='password' type="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                        wire:loading.class='placeholder' wire:target='submit'>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- <div class="d-flex mb-4 mb-md-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <a href="#" class="ms-auto text-decoration-none">Get Password?</a>
                </div> --}}
                <div class="pb-4">
                    <button wire:click='submit' class="btn btn-primary form-control" wire:loading.attr='disabled' wire:target='submit'>
                        <span class="spinner-border spinner-border-sm" wire:loading wire:target='submit'></span>
                        <span wire:loading wire:target='submit'>Loading...</span>
                        <span wire:loading.remove wire:target='submit'>Submit</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('success', event => {
            Swal.fire({
                icon: 'success',
                title: 'Good Jobs!',
                text: event.detail,
            })
        })
        window.addEventListener('error', event => {
            Swal.fire({
                icon: 'error',
                title: 'Opps...!',
                text: event.detail,
            })
        })
    </script>
</div>