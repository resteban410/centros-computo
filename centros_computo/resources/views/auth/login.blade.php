@extends('layouts.app')

@section('content')

<section class="vh-100" style="background-color: #f4f5f5d7;">
  <div class="container py-4 h-30">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; margin-bottom: 0px;">
        <div class="row g-0" style="
    margin-bottom: -4%;
">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="img/bg-img/login.png"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <form method="POST" action="{{ route('login') }}">
                        @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">

                    <a class="nav-brand" href="index.php"><img src="img/core-img/logo-buap.png" alt=""></a>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar sesión en su cuenta</h5>

                  <div class="form-outline mb-4">
                  <input id="email" type="text" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{ old('id') }}" required autofocus>
                    <label style="font-size: 15px; class="form-label" for="form2Example17">ID de usuario</label>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>

                  <div class="form-outline mb-4">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <label style="font-size: 15px; class="form-label" for="form2Example27">Contraseña</label>
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>

                  <div class="pt-1 mb-5">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">
                    {{ __('Iniciar sesion') }}
                    </button>
                  </div>

                  <a style="font-size: 14px;"class="small text-muted" href="#!">Olvido su contraseña?</a>
                  <p style="font-size: 13px; "class="mb-5 pb-lg-2" style="color: #393f81;"> ¿No tiene cuenta? Diríjase con el responsable de centros de cómputo</p>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
