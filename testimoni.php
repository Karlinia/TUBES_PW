<?php
    session_start();
    if( isset($_SESSION['username']) ){
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPP Digital</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
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
        </ul>

        <a class="btn navbar-btn ml-md-2">
        <?php
        echo $_SESSION['nama_user'];

        ?>
        </a>
        <a class="btn navbar-btn ml-md-2 btn-primary text-white" href="../logout.php">Logout</a>
        <a class="btn navbar-btn ml-md-2 btn-primary text-white" href="testimoni.php">Testimoni</a>
      </div>
    </div>
  </nav>

  <div class="py-5 bg-primary">
    <div class="container">
      <div class="row">
        <form role="form" id="quickForm" method="post" action="proses_testi.php" onsubmit="alert('Kirim Hasil Testi Anda?')">
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaPemesan">Nama Pengguna</label>
                    <input type="text" name="namap" class="form-control" id="namaPemesan" value="<?php echo $_SESSION['nama_user']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <textarea class="ckeditor " id="ckedtor" name="deskripsi" required autocomplete="deskripsi" placeholder="Deskripsi"></textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name="submit" value="submit">Kirim</a></button>
                </div>
              </form>
      </div>
    </div>
  </div>

  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6 p-3">
          <h5> <b>Main</b> </h5>
          <ul class="list-unstyled">
            <li> <a href="main.php">Home</a> </li>
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
                </a> </div>
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

<?php
    }else{
        echo "
            <script>
                alert('Anda harus login!');
            </script>
        ";
        header('Location: ../index.php');
    }
?>