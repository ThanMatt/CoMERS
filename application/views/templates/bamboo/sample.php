<!DOCTYPE html>
<html>

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
    <title>Bamboo</title>
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
                <img src="<?=base_url()?>assets/img/bamboo/BITS%20Logo.png" width="100px" height="100px">
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
                            <label>General Assembly</label>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInput">Student ID</label>
                            <input type="text" class="form-control" name="student_id" id="student_id" placeholder="Enter Student ID">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label for="exampleInput">Last Name</label>
                                <input type="text" class="form-control" name="" id="" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="exampleInput">First Name</label>
                                <input type="text" class="form-control" name="" id="" placeholder="Enter First Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="exampleInput">Middle Name</label>
                                <input type="text" class="form-control" name="" id="" placeholder="Enter Middle Name">
                            </div>
                        </div>    
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="exampleFormControlSelect1">Year</label>
                                <select class="form-control" id="year">
                                  <option>1st Year</option>
                                  <option>2nd Year</option>
                                  <option>3rd Year</option>
                                  <option>4th Year</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInput">Section</label>
                                <input type="text" class="form-control" name="" id="" placeholder="Enter Section">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Course</label>
                            <select class="form-control" id="">
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

                        <button type="submit" class="btn btn-lg" disabled>Submit</button>
                    </form>
                    
                    <div class="studentnum">
                        Switch
                    </div>
                    
                    <!-- For Student Number form only -->
                    <form class="col-sm-12 col-md-12 col-lg-10 form-container-student">

                        <div class="title">
                            <label>General Assembly</label>
                        </div>

                        <div class="form-group">
                            <label for="exampleInput">Student ID</label>
                            <input type="text" class="form-control" name="student_id" id="student_id" placeholder="Enter Student ID">
                        </div>
                        <button type="submit" class="btn btn-lg" disabled>Submit</button>
                        
                    </form>
                    <!-- End of Student Number form only -->

                </div> <!-- End of right column -->   
            </div> 
            
        </div> <!-- End of second container fluid -->
       
    <!-- EDIT BUTTON -->
    <?php if(!$this->session->userdata('logged_in')):?>

    <div class="edit-button">
        <label>Customize by Logging in!</label>
        <a href="<?=base_url()?>login"><button class="toedit">LOGIN</button></a>
    </div>

    <?php else: ?>

    <div class="edit-button">
        <label>Edit this template!</label>
        <a href="<?=base_url()?>edit/bamboo"><button class="toedit">EDIT</button></a>
    </div>

    <?php endif ?>
    <!-- END EDIT BUTTON -->
        
    </div> <!-- End of main container fluid -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
</body>

</html>