<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/input.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="shortcut icon" href="img/icon/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
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
              <form style="width: 25rem;" class="animate__animated animate__fadeInUp">
                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
                <div class="form">
                  <input type="text" name="email" class="form__input" id="email" autocomplete="off" placeholder=" " required>
                  <label for="email" class="form__label">Email</label>
                </div>
                <div class="form">
                  <input type="password" name="password" class="form__input" id="password" autocomplete="off" placeholder=" " required>
                  <label for="password" class="form__label">Password</label>
                </div>
                <div class="form-check mb-4">
                  <input class="form-check-input mb-4" type="checkbox" value="" id="remember" />
                  <label class="form-check-label" for="remember"> Remember me </label>
                </div>
                <div class="d-grid gap-2 mb-3">
                  <button class="btn btn-info btn-lg btn-block" style="color: white;" type="button">Login</button>
                </div>
                <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                <p>Don't have an account? <a href="/register" class="link-info">Register here</a></p>
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
  </body>
</html>
