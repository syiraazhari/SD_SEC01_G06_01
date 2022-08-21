<div class="container">
  <div class="forms">
      <div class="form login">
          <span class="title">Login</span>

          <form method="POST" action="{{ route('login') }}">
              <div class="input-field">
                  <input type="text" placeholder="Enter your email" required id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  <i class="uil uil-envelope icon"></i>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="input-field">
                <input placeholder="Enter your password" required id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  <i class="uil uil-lock icon"></i>
                  <i class="uil uil-eye-slash showHidePw"></i>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="checkbox-text">
                  <div class="checkbox-content">
                      <input type="checkbox" id="logCheck">
                      <label for="logCheck" class="text">Remember me</label>
                  </div>
                  
                  @if (Route::has('password.request'))
                    <a class="text" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
              </div>

              <div class="input-field button">
                  <input type="button" value="Login">
              </div>
          </form>

          <div class="login-signup">
              <span class="text">Not a member?
                  <a href="{{ route('register') }}" class="text signup-link">Signup Now</a>
              </span>
          </div>
      </div>

      <!-- Registration Form -->
      <div class="form signup">
          <span class="title">Registration</span>

          <form action="#">
              <div class="input-field">
                  <input type="text" placeholder="Enter your name" required>
                  <i class="uil uil-user"></i>
              </div>
              <div class="input-field">
                  <input type="text" placeholder="Enter your email" required>
                  <i class="uil uil-envelope icon"></i>
              </div>
              <div class="input-field">
                  <input type="password" class="password" placeholder="Create a password" required>
                  <i class="uil uil-lock icon"></i>
              </div>
              <div class="input-field">
                  <input type="password" class="password" placeholder="Confirm a password" required>
                  <i class="uil uil-lock icon"></i>
                  <i class="uil uil-eye-slash showHidePw"></i>
              </div>

              <div class="checkbox-text">
                  <div class="checkbox-content">
                      <input type="checkbox" id="termCon">
                      <label for="termCon" class="text">I accepted all terms and conditions</label>
                  </div>
              </div>

              <div class="input-field button">
                  <input type="button" value="Signup">
              </div>
          </form>

          <div class="login-signup">
              <span class="text">Already a member?
                  <a href="#" class="text login-link">Login Now</a>
              </span>
          </div>
      </div>
  </div>
</div>