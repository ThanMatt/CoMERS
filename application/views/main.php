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
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style-landing.css">

  <title>CoMERS</title>
</head>

<body>
  <div class="container-fluid main-container">

    <div class="nav-container">
      <nav>
        <a href="<?=base_url()?>home/about">About Us</a>
        <a href="#">Contact Us</a>
        <a href="#">Your Works</a>
      </nav>
    </div> <!-- End of Nav-Container -->

    <div class="title-container">
      <div>
        <img src="<?=base_url()?>assets/img/COMERSv2.png">
      </div>
      <div class='login-container'>
        <?php if (!$this->session->userdata('logged_in')): ?>
          <label class='col-lg-12 btn btn-lg'><a href="login">LOGIN</a></label>
        <?php else: ?>
          <label class='col-lg-12 btn btn-lg'><a href="accounts/logout">LOGOUT</a></label>
        <?php endif ?>
      </div>
    </div> <!-- End of Title-Container -->
    <div class="col-lg-12 col-sm-12 content">
      <div class="col-sm-6 left">
        <img src="<?=base_url()?>assets/img/compi.png">
      </div>
      <div class="col-sm-6 right">
        <h1>Get Started</h1>
        <label>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut pretium nibh.<br>
          Sed placerat erat et interdum pulvinar. Orci varius natoque penatibus et magnis <br>
          dis parturient montes, nascetur ridiculus mus. Curabitur condimentum mattis <br>
          diam quis aliquam. In convallis sem dolor, vel feugiat urna blandit id. Nam <br>
          sagittis feugiat magna, sit amet rutrum mi ullamcorper quis.
        </label>
        <h3>Simple and Easy</h3>
        <ul>
          <li>Login</li>
          <li>Choose a Template</li>
          <li>Edit your Design</li>
          <li>Save and Publish</li>
        </ul>
      </div>
    </div> <!-- End of Content -->

    <div class="hupla">
      <h1>Templates</h1>
    </div>

    <div class='container-fluid templates-container'>
        <a href="<?=base_url()?>templates/apricot" target="_blank" class="box1" id="temp1"></a>
        <a href="<?=base_url()?>templates/bamboo" target="_blank" class="box1" id="temp2"></a>
        <a href="<?=base_url()?>templates/chipotle" target="_blank" class="box1" id="temp3"></a>
        <a href="<?=base_url()?>templates/dog" target="_blank" class="box1" id="temp4"></a>
        <a href="<?=base_url()?>templates/ellie" target="_blank" class="box1" id="temp5"></a>
        <div class="box1"></div>
    </div>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous">
  </script>
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
  <script src="<?=base_url()?>assets/js/script.js">
  </script>
</body>

</html>