<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light bg-primary">
    <div class="container"> <a class="navbar-brand text-primary bg-primary" href="#">
        <b><b class="text-light bg-primary"> SPP Digital SMAN 1 LOHBENER</b></b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar4">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item bg-light"> <a class="nav-link" href="main.php">Home</a> </li>
          <li class="nav-item bg-light"> <a class="nav-link" href="https://www.google.com/maps/dir//Alamat+SMAN+1+Lohbener/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2e6eb8624311efd1:0x27fcc8130d6152fd?sa=X&ved=2ahUKEwj35KeWlb_mAhUBfX0KHUgwBIIQ9RcwDHoECAsQEg">Alamat</a> </li>
        </ul> <a class="btn navbar-btn ml-md-2 btn-light" href="Logout.php"><i class="fa fa-user fa-fw"></i>Log Out</a>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center" >
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-6 col-10" style="">
          <h1>Pembayaran SPP</h1>
          <p class="mb-3">Silahkan lengkapi form dibawah ini untuk konfirmasi bukti&nbsp; pembayaran SPP Anda :</p>
          <form action="prosesform.php" class="text-left">
            <div class="form-group"> <label for="form16" contenteditable="true">NIS :</label> <input type="text" class="form-control" id="form15" placeholder="Masukan NIS Anda ....."> </div>
            <div class="form-group"> <label for="form16" contenteditable="true">Nama :</label> <input type="text" class="form-control" id="form16" placeholder="Masukan Nama Anda ....."> </div>
            <div class="form-group"> <label for="form17">Kelas :</label> <input type="text" class="form-control" id="form17" placeholder="Masukan Kelas Anda ......"> </div>
            <div class="form-group"> <label for="form18">Tanggal Pembayaran :</label><input type="date" class="form-control" id="form18" placeholder="...."> </div>
            <div class="form-row">
            <div class="form-group"> <label for="form19">Waktu Pembayaran :</label><input type="time" class="form-control" id="form19" placeholder="...."> </div>
     
            <div class="form-group col-md-12"> <label for="form20">Nominal yang dibayar :</label> <input type="text" class="form-control" id="form20" placeholder="..."> </div>
            </div>
            <div class="card text-center">
              <div class="card-header"> Upload Bukti Pembayaran</div>
              <div class="card-body">
                <p class="card-text">Silahkan upload bukti pembayaran Anda disini berupa gambar.</p>
                <form action="form.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file">
                  </form>
                  <?php
                        if(isset($_POST['submit'])){
                        $file_asal = $_FILES['file']['tmp_name'];
                        $file_tujuan = "upload/".$_FILES['file']['name']; // Ditambah "upload/" karena ingin disimpan ke folder Upload  
                        move_uploaded_file($file_asal, $file_tujuan);
                        }
                  ?>
              </div>
            </div>
          </form>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12"><a class="btn btn-primary" href="prosesform.php">Kirim Bukti Pembayaran</a></div>
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