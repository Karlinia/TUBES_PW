<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body >
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container"> <a class="navbar-brand text-primary" href="#">
        <i class="fa d-inline fa-lg fa-stop-circle"></i>
        <b><b> SPP Digital SMA Negeri 1 Lohbener </b></b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar4">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="https://www.google.com/maps/dir//Alamat+SMAN+1+Lohbener/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2e6eb8624311efd1:0x27fcc8130d6152fd?sa=X&ved=2ahUKEwj35KeWlb_mAhUBfX0KHUgwBIIQ9RcwDHoECAsQEg">Alamat</a> </li>
        </ul> <a class="btn navbar-btn ml-md-2 btn-primary text-white" href="Login.php">Log In</a>
      </div>
    </div>
  </nav>
  </nav>
  <div class="py-5 text-center" style="background-image: url('login.jpg'); background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 col-10 bg-white p-5">
        <h1 class="mb-4">Log in</h1>
        <form action="proseslogin.php" method="post">
        <table border="0" cellpadding="0" cellspacing="0" align="center">
          <tr>
            <td>Username</td>
            <td><input name="username" value="" maxlength="20" placeholder="Masukan Username..."></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password" value ="" maxlength="15" placeholder="Masukan Password..."></td>
          </tr>
          <tr>
            <td>Captcha</td>
            <!-- tentukan letak script generate gambar -->
            <td><img src="captcha.php" alt="gambar" /> </td>
          </tr>
            <td>Isikan captcha</td>
            <td><input name="kodecaptcha" value="" maxlength="5" placeholder="Masukan captcha..." /></td>
          <tr>
            <td><input id="submit" type ="submit" value="Login"></td>
          </tr>
        </table>
        </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6 p-3">
          <h5> <b>Main</b> </h5>
          <ul class="list-unstyled">
            <li> <a href="https://www.google.com/maps/dir//Alamat+SMAN+1+Lohbener/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2e6eb8624311efd1:0x27fcc8130d6152fd?sa=X&ved=2ahUKEwj35KeWlb_mAhUBfX0KHUgwBIIQ9RcwDHoECAsQEg">Alamat</a> </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 p-3">
          <h5> <b>About</b> </h5>
          <p class="mb-0"> SMA Negeri 1 Lohbener adalah salah satu Sekolah Menengah Atas yang berada di Kecamatan Lohbener Kabupaten Indramayu</p>
        </div>
        <div class="col-lg-3 col-md-6 p-3">
          <h5> <b>Follow us</b> </h5>
          <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-between my-2"> 
                <a href="https://www.facebook.com/SMAN-1-Lohbener-1177160618979516/?ref=py_c">
                <i class="d-block fa fa-facebook-official text-muted fa-lg mr-2"></i>
                </a> 
                <a href="https://www.instagram.com/smansaloh/">
                <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
                </a> 
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0 mt-2">© 2019 SMA Negeri 1 Lohbener</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>