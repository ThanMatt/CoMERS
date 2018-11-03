<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Local Bootstrap CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css.map">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-grid.min.css.map">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-reboot.min.css.map">

  <!-- Personal CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">

  <title>CoMERS</title>
</head>

<body>
  <div class="container-fluid main-container">

    <div class="nav-container">
      <nav>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
        <a href="#">Templates</a>
      </nav>
    </div>

    <div class="col-sm-6 left">
      <img src="<?=base_url()?>assets/img/sbulogo.png">
      <label>CAS ORGANIZATIONS</label>
    </div>

    <div class="col-sm-6 right">
      <div class="login-box">
        <div class="logo"><img src="<?=base_url()?>assets/img/COMERS.png"></div>
        <form id="ajax_form">
          <input type="text" name="account_id" placeholder="USERNAME">
          <input type="password" name="password" placeholder="PASSWORD">
          <input class="btn btn-danger btn-lg login-btn" type="submit" id="login_btn" value="LOGIN">
        </form>
      </div>
    </div>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?= base_url();?>assets/js/jquery-3.3.1.js"></script>
  
  <script src="<?= base_url();?>assets/js/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous">
  </script>

  <!-- Local Bootstrap Javascript -->
  <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js">
  </script>
  <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js.map">
  </script>

  <!--Personal Javascript -->
  <script>
    var BASE_URL = "<?=base_url()?>";
  </script>
  <script src="<?=base_url()?>assets/js/login.js"></script>
  <script src="<?=base_url()?>assets/js/script.js">
  </script>
</body>

</html>