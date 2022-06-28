<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/input.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="img/icon/icon.png" type="image/x-icon">
  </head>
  <body>
    <section class="vh-100 register-background" style="background-image: url('img/register/zyro-image1.png'); background-repeat: no-repeat; background-size: cover; ">
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
                    <div class="form">
                        <input type="text" name="nama" class="form__input" id="nama" autocomplete="off" placeholder=" ">
                        <label for="nama" class="form__label">Nama</label>
                    </div>
                    <div class="form">
                        <input type="email" name="email" class="form__input" id="email" autocomplete="off" placeholder=" ">
                        <label for="email" class="form__label">Email</label>
                    </div>
                    <div class="form">
                        <input type="password" name="password" class="form__input" id="password" autocomplete="off" placeholder=" ">
                        <label for="password" class="form__label">Password</label>
                    </div>
                    <div class="form">
                        <input type="password" name="conf-password" class="form__input" id="conf-password" autocomplete="off" placeholder=" ">
                        <label for="conf-password" class="form__label">Konfirmasi Password</label>
                    </div>
                    <a href="/verify"><button class="btn btn-primary btn-lg btn-block mb-5" type="submit">Register</button></a>
                    <p>Have an account? <a href="/login" class="link-info">Sign in here</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
  </body>
</html>
