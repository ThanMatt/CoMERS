<!doctype html>
<html lang="en">
<?php if ($this->session->userdata('account_id') == $generate->Account_ID): ?>
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
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/chipotle/style-temp3.css">

  <title><?=$generate->Title?></title>
</head>

<body>
    <div class="container-fluid main-container">
        
    <div class="bits">
        <img src="<?=base_url()?>assets/img/chipotle/BITS.png" width="100px" height="100px">
    </div>
        
    <div class="gir">
        <img src="<?=base_url()?>assets/img/chipotle/giraffe.png">
    </div>    
        
    <div class="welcome">
        <img src="<?=base_url()?>assets/img/chipotle/welcome.png">
    </div>    
      
        <div class="col-sm-10 content">
        
            <div class="col-sm-6 form-container">
            
                <h1 class="title"><?=$generate->Title?></h1>
                
                <form id="ajax_form">
                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <input type="text" class="form-control" placeholder="You shouldn't be here" name="system-id" value="<?=$generate->System_ID?>" readonly hidden required>
                        <label>Student ID</label>
                        <input type="text" class="form-control" placeholder="Your Student ID.." required name="student-id">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6 form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Your Last Name.." required name="last-name">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6 form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Your First Name.." required name="first-name">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6 form-group">
                        <label>Middle Initial</label>
                        <input type="text" class="form-control" placeholder="Your Middle Initial.." required name="middle-initial">
                    </div>
                    <div class="col-sm-12 form-row">
                            <div class="form-group col-sm-6">
                                <label for="exampleFormControlSelect1">Year</label>
                                <select class="form-control" id="year" name="year-level" required>
                                  <option>1st Year</option>
                                  <option>2nd Year</option>
                                  <option>3rd Year</option>
                                  <option>4th Year</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInput">Section</label>
                                <input type="text" class="form-control" name="section" placeholder="Enter Section" required>
                            </div>
                        </div>
                        <div class="col-sm-12 form-group">
                            <label for="exampleFormControlSelect2">Course</label>
                            <select class="form-control" name="course" required>
                              <option>Accountancy</option>
                              <option>Economics</option>
                              <option>English</option>
                              <option>Entrepreneurship</option>
                              <option>Financial Management</option>
                              <option>Human Biology</option>
                              <option>Human Resources</option>
                              <option>Information Technology</option>
                              <option>Legal Management</option>
                              <option>Literature</option>
                              <option>Marketing Management</option>
                              <option>Operations Management</option>
                              <option>Physical Education</option>
                              <option>Political Science</option>
                              <option>Psychology</option>
                            </select>
                        </div>

                        <button type="submit" class="submit col-sm btn btn-lg">Submit</button>
                        <button type="reset" class="clear col-sm btn btn-lg">Clear</button>
                    
                </form>
                
            </div>
            
            <!-- For Student Number form only -->
            <form class="col-sm-6 col-md-6 col-lg-6 form-container-student" id="ajax-form-id">

                <input type="text" class="form-control" placeholder="You shouldn't be here" name="system-id" value="<?=$generate->System_ID?>" readonly hidden required>
                <div class="title">
                    <label><?=$generate->Title?></label>
                </div>

                <div class="form-group">
                    <label for="exampleInput">Student ID</label>
                    <input type="text" class="form-control" name="student-id" id="student_id" placeholder="Enter Student ID">
                </div>
                <button id="button-submit" type="submit" class="btn btn-lg">Submit</button>

            </form>
            <!-- End of Student Number form only -->
            <div class="col-sm-4 picture-container">
            
              <img src="<?=base_url()?>uploads/events/<?=$generate->Logo?>" height="500px">
                
            </div>
            
        </div>
        
        <div class="studentnum">
            Switch
        </div>                
        
    </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?= base_url();?>assets/js/jquery-3.3.1.js"></script>
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
  <script src="<?=base_url()?>assets/js/chipotle/script.js">
  </script>

  <script type="text/javascript">
    var BASE_URL = "<?=base_url()?>";
  </script>

  <script src="<?=base_url()?>assets/js/register.js">
  </script>
</body>
<?php else: ?>
  <head>
    <title>404 Not Found </title>
  </head>
  <?= "<h1>404 ERROR: The registration might have been removed or closed by the moderator</h1>"?>
<?php endif?>

</html>