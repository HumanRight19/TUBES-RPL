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
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
              <div class="mt-5 ms-xl-5">
                <div class="d-flex flex-row">
                  <img src="img/icon/icon.png" style="width: 100px;" class="animate__animated animate__fadeInUp" alt="">
                  <div class="h1 fw-bold pt-4 ps-3 animate__animated animate__fadeInUp">
                    <a href="/" style="text-decoration: none; color:black">Plesir Solo</a> 
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-sm-center h-custom-1 px-5 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                <form method="POST" action="{{route('login')}}" style="width: 25rem;" class="animate__animated animate__fadeInUp">
                    @csrf
                    <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
                    <div class="form">
                    <input type="email" name="email" class="form__input" id="email" autocomplete="off" placeholder=" " required>
                    <label for="email" class="form__label">Email</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">							
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form">
                      <input type="password" name="password" class="form__input" id="password" autocomplete="off" placeholder=" " required>
                      <label for="password" class="form__label">Password</label>
                          @error('password')
                              <span class="invalid-feedback" role="alert">							
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                    <div class="form-check mb-4">
                      <input class="form-check-input mb-4" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                      <label class="form-check-label" for="remember"> Remember me </label>
                    </div>
                    <div class="d-grid gap-2 mb-3">
                      <button class="btn btn-info btn-lg btn-block" style="color: white;" type="submit">Login</button>
                    </div>
                  
                
                    @guest
                        @if (Route::has('password.request'))
                                <p class="small mb-5 pb-lg-2"><a class="text-muted btn btn-link" href={{ route('password.request') }}>Forgot password?</a></p>
                                <p>Don't have an account? <a href="{{ route('register') }}" class="link-info">Register here</a></p>
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
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="img/login/zyro-image2.png"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
      </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>


