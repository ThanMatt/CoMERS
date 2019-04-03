<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
    <!-- Local Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-reboot.min.css.map">
    
    <!-- Personal CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style-works.css">

    <title>CoMERS</title>
  </head>
  <body>
    <div class="container-fluid main-container">
        
        <div class="nav-container">
            <nav>
                <a href="<?=base_url()?>home">Home</a>
                <a href="<?=base_url()?>home/about">About Us</a>
                <a href="#">Contact Us</a>
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
              <label class='col-lg-12 btn btn-lg'><a href="<?=base_url()?>accounts/logout">LOGOUT</a></label>
            <?php endif ?>
            </div>
        </div> <!-- End of Title-Container -->
        
        <center>
          <div class="your-works">
              <h1>Your Works</h1>
          </div>
        </center>
        
        <div class="col-lg-12 col-sm-12 content">
        
          <?php if(is_array($works) || is_object($works)): ?>

          <?php foreach ($works as $work): ?>
            <div class="card">
              <img class="card-img-top cord" src="<?=base_url()?>assets/img/<?=$this->templates_model->checkName($work->Register_Name, $work->Account_ID)?>" height="250px" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title"><?= $work->Title?></h4>

                <a href="" id="delete-btn/<?=$work->System_ID?>" class="btn btn-danger delete-content">Delete</a>

                <a href="<?=base_url()?>templates/edit/<?=$work->System_ID?>" class="btn btn-danger" target="_blank">Edit</a>

                <a href="<?=base_url()?>view/<?=strtolower($work->Register_Name)?>/<?=$work->System_ID?>" class="btn btn-danger" target="_blank">View</a>

                <a href="<?=base_url()?>timeout/events/<?=strtolower($work->System_ID)?>" class="btn btn-danger" target="_blank">Time Out</a>

                <a href="<?=base_url()?>registration/events/<?=$work->System_ID?>" id="deploy-btn/<?=$work->System_ID?>" class="btn btn-danger deploy-content" target="_blank">Deploy</a>

                <a href="<?=base_url()?>registration/attendance/<?=strtolower($work->System_ID)?>" class="btn btn-danger">Attendance</a>
                

              </div>
            </div>
          <?php endforeach ?>  
          <?php else: ?>
            <h2 class='no-works'>No Works</h2>
          <?php endif ?>
        </div> <!-- End of Content -->

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
      crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- Local Bootstrap Javascript -->
    <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js">
    </script>
    <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js.map">
    </script>

      
      <!--Personal Javascript -->
        <!--Personal Javascript -->
    <script src="<?=base_url()?>assets/js/script.js">
    </script>
    <script>
      var BASE_URL = "<?=base_url()?>";
    </script>
    <script src="<?=base_url()?>assets/js/plugin.js">
    </script>
  </body>
</html>