@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="form login">
            <div class="form-content">
                <header>{{ __('Login') }}</header>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="field input-field">
                            <input placeholder="Email Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="field input-field">
                            <input placeholder="Enter your password" required id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <i class='bx bx-hide eye-icon'></i>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-link">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="field button-field">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>

                <div class="form-link">
                    <span>Don't have an account? 
                        <a href="{{ route('register') }}" class="link signup-link">
                            {{ __('Register') }}
                        </a>
                    </span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="{{ asset('assets/images/google.png') }}" alt="" class="google-img">
                
                    <span>Login with Google</span>
                </a>
            </div>

        </div>
    </div>
</div>
@endsection

<script>
    const forms = document.querySelector(".forms"),
        pwShowHide = document.querySelectorAll(".eye-icon"),
        links = document.querySelectorAll(".link");

    pwShowHide.forEach(eyeIcon => {
        eyeIcon.addEventListener("click", () => {
            let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
    
            pwFields.forEach(password => {
                if(password.type === "password"){
                    password.type = "text";
                    eyeIcon.classList.replace("bx-hide", "bx-show");
                    return;
                }
                password.type = "password";
                eyeIcon.classList.replace("bx-show", "bx-hide");
            })

        })
    })      

    links.forEach(link => {
        link.addEventListener("click", e => {
             e.preventDefault(); //preventing form submit
            forms.classList.toggle("show-signup");
        })
    })
</script>
