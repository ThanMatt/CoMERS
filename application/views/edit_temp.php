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
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style-edit.css">

    <title>Edit (Admin)</title>
  </head>
  <body>
    <div class="container-fluid main-container">
        
        <div class="nav-container">
          <nav>
          <a href="<?=base_url()?>home/about">About Us</a>
          <a href="#">Contact Us</a>
          <a href="#">Templates</a>
          </nav>
        </div> <!-- End of Nav-Container -->
        
        <div class="title-container">
            <div>
              <img src="<?=base_url()?>assets/img/COMERSv2.png">
            </div>            
        </div> <!-- End of Title-Container -->
        
        <div class="col-lg-6 col-sm-8 col-xs-6 container-fluid content-box">
           
            <form class="form-container" id="edit-regis" enctype="multipart/form-data">
                <div class="form-group">
                    <center><h1>Edit your <?=$name?> Registration</h1></center>
                </div>
                <div class="form-group">
                    <label>Event Name</label>
                    <input type="text" class="form-control" name="register_name" placeholder="You're not supposed to see this" value="<?=$name?>" id="regis-name" readonly hidden>
                    <input type="text" class="form-control" name="event_name" id="event-name" placeholder="Enter Event Name.." required>
                    <small class="form-text text-muted">The title for your Event / Activity</small>
                </div>   
                <label>Logo</label>
                <div class="custom-file" id="uploaded_image">
                    <input type="file" id="image_file" name="image_file">
                    <!-- <label class="custom-file-label" for="customFile" id="uploaded_image">Choose file</label> -->
                    <small class="form-text text-muted">Upload an image of your logo, preferably 75x75 pixels</small>
                </div>
                <div class="sub-con">
                    <input type="submit" class="btn btn-danger btn-lg">
                </div>
            </form>
            
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
    <script>
      var BASE_URL = "<?=base_url()?>";
    </script>
    <script src="<?=base_url()?>assets/js/script.js">
    </script>
    <script src="<?=base_url()?>assets/js/plugin.js">
    </script>



  </body>
</html>