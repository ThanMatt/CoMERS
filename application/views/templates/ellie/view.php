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
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/ellie/style-temp5.css">

  <title><?=$generate->Title?></title>
</head>

<body>
    <div class="container-fluid main-container">
        
        <div class="bits">
            <img src="<?=base_url()?>uploads/events<?=$generate->Logo?>" width="100px" height="100px">
        </div>
      
        <div class='col-6 content'>
            <form class="col-12 form-cont" id="ajax_form">
                <div>
                    <input type="text" class="form-control" placeholder="You shouldn't be here" name="system-id" value="<?=$generate->System_ID?>" readonly hidden required>
                    <h1><?=$generate->Title?></h1>
                </div>
                <div class="form-group">
                    <label>Student ID</label>
                    <input type="text" class="form-control" placeholder="Enter Student ID.." name="student-id">
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Your Last Name.." name="last-name">
                </div>
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="Your First Name.." name="first-name">
                </div>
                <div class="form-group">
                    <label>Middle Initial</label>
                    <input type="text" class="form-control" placeholder="Your Middle Initial.." name="middle-initial">
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="exampleFormControlSelect1">Year</label>
                        <select class="form-control" id="year" name="year-level">
                          <option>1st Year</option>
                          <option>2nd Year</option>
                          <option>3rd Year</option>
                          <option>4th Year</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleInput">Section</label>
                        <input type="text" class="form-control" name="section" placeholder="Enter Section">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Course</label>
                    <select class="form-control" name="course">
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

                <button type="submit" class="submit col-sm btn btn-lg" disabled>Submit</button>
                <button type="clear" class="clear col-sm btn btn-sm" disabled>Clear</button>

            </form>

            <form class="col-sm-10 col-md-10 col-lg-10 form-container-student">

                <div class="title">
                    <label><?=$generate->Title?></label>
                </div>

                <div class="form-group">
                    <label for="exampleInput">Student ID</label>
                    <input type="text" class="form-control" name="student_id" id="student_id" placeholder="Enter Student ID">
                </div>
                <button id="button-submit" type="submit" class="btn btn-lg" disabled>Submit</button>

            </form>
            <!-- End of Student Number form only -->
            
            <div class="studentnum">
                Switch
            </div>   
        </div>

        <div class="edit-button">
          <label>THIS IS VIEW ONLY</label>
        </div>
  
    </div> <!-- End of main-container -->
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
  <script src="<?=base_url()?>assets/js/ellie/script.js">
  </script>

  <script type="text/javascript">
    var BASE_URL = "<?=base_url()?>";
  </script>



</body>
<?php else: ?>
  <head>
    <title>Authorization Error</title>
  </head>
  <?= "<h1>You do not have access to view this page!</h1>"?>
<?php endif?>
</html>