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
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/dandelion/style-temp4.css">

  <title>Dandelion</title>
</head>

<body>
    <div class="container-fluid main-container">
      
        <div class="content">
            
            <div class="circ-logo">
                <img src="<?=base_url()?>assets/img/dandelion/BITS.png" width="100px" height="100px">
            </div>
                
            <form class="col-10 form-cont">
                <div class="form-group">
                    <label>Student ID</label>
                    <input type="text" class="form-control" placeholder="Enter Student ID.." required>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Your Last Name.." required>
                </div>
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="Your First Name.." required>
                </div>
                <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" class="form-control" placeholder="Your Middle Name.." required>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="exampleFormControlSelect1">Year</label>
                        <select class="form-control" id="year" required>
                          <option>1st Year</option>
                          <option>2nd Year</option>
                          <option>3rd Year</option>
                          <option>4th Year</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleInput">Section</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter Section" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Course</label>
                    <select class="form-control" id="" required>
                        <option>Accountancy</option>
                        <option>Economics</option>
                        <option>Entrepreneurship</option>
                        <option>Financial Management</option>
                        <option>Human Biology</option>
                        <option>Human Resource</option>
                        <option>Information Technology</option>
                        <option>Legal Management</option>
                        <option>Marketing Management</option>
                        <option>Operations Management</option>
                        <option>Psychology</option>
                    </select>
                </div>

                <button type="submit" class="submit col-sm btn btn-lg">Submit</button>
                <button type="reset" class="clear col-sm btn btn-sm">Clear</button>

            </form>
            
        </div>
        
    <!-- EDIT BUTTON -->
      <div class="edit-button">
        <label>Customize by Logging in!</label>
        <button class="toedit">EDIT</button>
      </div>
    <!-- END EDIT BUTTON -->
        
    </div> <!-- End of main-container -->
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
  <script src="<?=base_url()?>assets/js/dandelion/script.js">
  </script>
</body>

</html>