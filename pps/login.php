<?php require 'php/config.php'; session_start(); if(isset($_SESSION['c_admin'])){ header('location:admin/'); }elseif(isset($_SESSION['c_guru'])){ header('location:guru/');}elseif(isset($_SESSION['c_orangtua'])){ header('location:walimurid/'); }?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login LBH</title>
  <link rel="icon" href="favicon.ico">
  <link rel="shortcut icon" href="php/img/logo.ico">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
 <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->

  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="theme/dist/css/AdminLTE.min.css"> -->
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="theme/plugins/iCheck/square/blue.css"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
  </style>
</head>
<?php ?>
<body class="" >
  
  <section class="vh-100 mt-5">
  <div class="container-fluid h-custom">
    <h3 class=" text-center pt-5 h1 ">Selamat Datang DI <br> LANGUAGE BOARDING HOUSE </h3>
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
     
        <img src="php/img/hero2-transparent.png"
          class="img-fluid" alt="Sample image" width="70%">
      
      </div>
    <?php if(isset($_SESSION['pesan']) && $_SESSION['pesan']=='gagal'){?>
      <p><div style="display: none;" class="alert alert-danger alert-dismissable">Username atau Password Salah!
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      </div></p>
    <?php }$_SESSION['pesan'] = '';?>
    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
    <form action="php/<?php echo md5('login'); ?>" method="post">
    <h2 class="h3 text-center p-3 text-primary">Login</h2>

<!-- Email input -->
<div class="form-outline mb-4">
  <input type="text" name="username" id="form3Example3" class="form-control form-control-lg"
    placeholder="Enter a valid Username" />
  <label class="form-label" for="form3Example3">Username</label>
</div>

<!-- Password input -->
<div class="form-outline mb-3">
  <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
    placeholder="Enter password" />
  <label class="form-label" for="form3Example4">Password</label>
</div>

<div class="col-xs-12 mt-3">
  <div class="form-group">
  <label>Masuk Sebagai</label>
  <select class="form-control" name="v">
    <option disabled="">Pilih Akses</option>
    <option value="admin">Admin</option>
    <option value="guru">Conseling</option>
    <option value="wali">Tutor</option>
  </select>  
  </div>
</div>
  
        <button class="btn btn-primary btn-flat btn-lg" style="width:100%;">Log In <i class="glyphicon glyphicon-log-in"></i></button>
    </form>
    </div>
   </div>
   <div
     class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
     <!-- Copyright -->
     <div class="text-white mb-3 mb-md-0">
       Copyright © 2020. All rights reserved.
     </div>
     <!-- Copyright -->
 
     <!-- Right -->
     <div>
       <a href="#!" class="text-white me-4">
         <i class="fab fa-facebook-f"></i>
       </a>
       <a href="#!" class="text-white me-4">
         <i class="fab fa-twitter"></i>
       </a>
       <a href="#!" class="text-white me-4">
         <i class="fab fa-google"></i>
       </a>
       <a href="#!" class="text-white">
         <i class="fab fa-linkedin-in"></i>
       </a>
     </div>
     <!-- Right -->
   </div>
  </section>

<!-- jQuery 2.2.3 -->
<script src="theme/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="theme/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="theme/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script>
//angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
$(document).ready(function(){setTimeout(function(){$(".alert").fadeIn('fast');}, 100);});
//angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
setTimeout(function(){$(".alert").fadeOut('fast');}, 10000);
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
