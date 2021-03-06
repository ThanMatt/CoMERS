<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bamboo/styles.css">
      
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title><?=$generate->Title?></title>
</head>

<body>
    <div class="container-fluid main-container">
        
        <div class="logo-container"></div>
        <div class="welcome"></div>
        
        <div class="bits">
            <img src="<?=base_url()?>assets/img/bamboo/BITS%20Logo.png" width="100px" height="100px">
        </div>
        
        <div class="container-fluid view-container">
            
            <div class="bits">
                <img src="<?=base_url()?>uploads/events/<?=$generate->Logo?>" width="100px" height="100px">
            </div>
            
            <div class="row no-gutters">
                <div class="left-col col-sm-12 col-lg-4">
                
                </div>
                <div class="right-col col-sm-12 col-lg-8">
                    
                    <div class="string">
                        <img src="<?=base_url()?>assets/img/bamboo/string.jpg">
                        <img src="<?=base_url()?>assets/img/bamboo/string.jpg">
                    </div>
                    
                    <form class="col-sm-12 col-md-12 col-lg-10 form-container" id="ajax_form">
                        
                        <div class="title">
                            <label><?=$generate->Title?></label>
                        </div>
                        
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="You shouldn't be here" name="system-id" value="<?=$generate->System_ID?>" readonly hidden required>
                            <label for="exampleInput">Student ID</label>
                            <input type="text" class="form-control" name="student-id" id="student_id" placeholder="Enter Student ID" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label for="exampleInput">Last Name</label>
                                <input type="text" class="form-control" name="last-name" id="" placeholder="Enter Last Name" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="exampleInput">First Name</label>
                                <input type="text" class="form-control" name="first-name" id="" placeholder="Enter First Name" required>
                            </div> 
                            <div class="form-group col-sm-4">
                                <label for="exampleInput">Middle Initial</label>
                                <input type="text" class="form-control" name="middle-initial" id="" placeholder="Enter Middle Initial" required>
                            </div>
                        </div>    
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="exampleFormControlSelect1">Year</label>
                                <select class="form-control" name="year-level" id="year" required>
                                  <option>1st Year</option>
                                  <option>2nd Year</option>
                                  <option>3rd Year</option>
                                  <option>4th Year</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInput">Section</label>
                                <input type="text" class="form-control" name="section" id="" placeholder="Enter Section" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Course</label>
                            <select class="form-control" name="course" id="" required>
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
                        <div class="form-group form-check checkbox">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"><a href="terms.html">I Accept the Terms and Conditions</a></label>
                        </div>

                        <button type="submit" class="btn btn-lg">Submit</button>
                    </form>
                    
                    <div class="studentnum">
                        Switch
                    </div>
                    
                    <!-- For Student Number form only -->
                    <form class="col-sm-12 col-md-12 col-lg-10 form-container-student" id="ajax-form-id">

                    <input type="text" class="form-control" placeholder="You shouldn't be here" name="system-id" value="<?=$generate->System_ID?>" readonly hidden required>
                        <div class="title">
                            <label><?=$generate->Title?></label>
                        </div>

                        <div class="form-group">
                            <label for="exampleInput">Student ID</label>
                            <input type="text" class="form-control" name="student-id" id="student_id" placeholder="Enter Student ID" required>
                        </div>
                        <button type="submit" class="btn btn-lg">Submit</button>
                        
                    </form>
                    <!-- End of Student Number form only -->

                </div> <!-- End of right column -->   
            </div> 
            
        </div> <!-- End of second container fluid -->
        
    </div> <!-- End of main container fluid -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url();?>assets/js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
  <!-- Local Bootstrap Javascript -->
  <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js">
  </script>
  <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js.map">
  </script>

  <!--Personal Javascript -->
  <script src="<?=base_url()?>assets/js/bamboo/script.js">
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