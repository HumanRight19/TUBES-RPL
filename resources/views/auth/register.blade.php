<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/input.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="shortcut icon" href="img/icon/icon.png" type="image/x-icon">
</head>
<body>
    <section class="vh-100" style="background-image: url('img/register/zyro-image1.png'); background-repeat: no-repeat; background-size: cover; ">
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" >
          <div class="container">
            <div class="row gx-lg-5 align-items-center">
              <div class="col-lg-6 mb-5 mb-lg-0">
                <h1 class="my-5 display-3 fw-bold ls-tight" style="color: white">
                  Aplikasi <br />
                  <span class="text-primary" style="color: white">Plesir Solo</span>
                </h1>
                <p style="color: white">
                  Menjadi salah satu aplikasi berbasis web untuk mempermudah Anda mengeksplor destinasi wisata di Kota Solo. Daftarkan akun Anda sekarang dan dapatkan berbagai layanan yang ada.
                </p>
              </div>
              <div class="col-12 ms-auto col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong animate__animated animate__fadeInUp" style="border-radius: 1rem; ">
                  <div class="card-body p-5 text-center">
                    <h3 class="mb-3">Register</h3>
                    <p>Silakan isi form di bawah ini</p>
                    <form action="{{ route('register') }}" action="post">
                      @csrf
                      <div class="form">
                          <input type="text" name="nama" class="form__input" id="nama" autocomplete="off" placeholder=" " required>
                          <label for="nama" class="form__label">Nama</label>
                                @error('nama')
                                    <div class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                      </div>
                      <div class="form">
                          <input type="email" name="email" class="form__input" id="email" autocomplete="off" placeholder=" " required>
                          <label for="email" class="form__label">Email</label>
                                @error('email')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                      </div>
                      <div class="form">
                          <input type="password" name="password" class="form__input" id="password" autocomplete="new-password" placeholder=" " required>
                          <label for="password" class="form__label">Password</label>
                                @error('password')
                                    <div class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                      </div>
                      <div class="form">
                          <input type="password" name="password_confirmation" class="form__input" id="password_confirm" autocomplete="new-password" placeholder=" " required>
                          <label for="conf_password" class="form__label">Konfirmasi Password</label>
                      </div>
                      <button class="btn btn-primary btn-lg btn-block mb-5" type="submit">Register</button>


                      @guest
                      @if (Route::has('login'))
                            <p>Have an account? <a href="{{ route('login') }}" class="link-info">Sign in here</a></p>
                      @endif
                      @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                      @endguest


                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>





