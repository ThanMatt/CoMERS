<!DOCTYPE>
<html>

<head>
  <title>Apricot</title>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/apricot/styles.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    var BASE_URL = "<?=base_url()?>";
  </script>
  <script src="<?=base_url()?>assets/js/apricot/script.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="main-container">

    <div class="main-box-container">

      <div class="left-container">

        <label>Hello there,</label>
        <label>Welcome to SBU</label>
        <form id="ajax_form">
          <input type="text" name="snum" id="txt_snum" placeholder="Enter Student Number..." required>
          <input type="submit" value="Login">
        </form>
        <label id="manual">Manual Registration</label>
        <label id="back">Back</label>

      </div>
      <!-- End of Left Container -->

      <div class="right-container">

        <div class="right-content">
          <label class="info-register">Register</label>
          <label class="info-id">your student ID number</label>
          <label class="info-fb">Please like us on facebook</label>
          <div class="fb">
            <a href="https://www.facebook.com/BITSSanBeda/" target="_blank">
              <img src="<?=base_url()?>assets/img/apricot/fb.png" width="40" height="40">
            </a>
          </div>
          <div class="bits">
            <img src="<?=base_url()?>assets/img/apricot/bits.png" width="150" height="150">
          </div>
        </div>

        <div class="register">
          <form action="register.php" method="POST">
            <input class="txtbox" type="text" name="fname" id="fname" placeholder="Enter First Name.." required>
            <input class="txtbox" type="text" name="mi" id="mi" placeholder="Enter Middle Initial.." required>
            <input class="txtbox" type="text" name="lname" id="lname" placeholder="Enter Last Name.." required>
            <input class="txtbox" type="text" name="snum" id="txt_snum2" placeholder="Enter Student Number.." required>
            <div class="no-dept">
              <select name="yrlvl">
                <option>1st Year</option>
                <option>2nd Year</option>
                <option>3rd Year</option>
                <option>4th Year</option>
              </select>
              <select name="course">
                <option>Accountancy</option>
                <option>Economics</option>
                <option>English</option>
                <option>Entrepreneurship</option>
                <option>Financial</option>
                <option>Human Biology</option>
                <option>Human Resource</option>
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
            <div class="check">
              <input id="checky" name="nocourse" type="checkbox">
              <label>If your department is not in the list, if possible, type the complete title of your department"</label>
            </div>
            <input id="just-in-case" name="nc" type="text" placeholder="Enter Department..">

            <div class="regis-clear">
              <input id="regis" type="submit" value="Register">
              <!-- <input id="clear" type="reset" value="clear"> -->
            </div>
          </form>
        </div>

      </div>
      <!-- End of Right Container -->
      <div class="terms">
          <label>By registering, you are agreeing to the <a href="#">terms and conditions</a></label>
      </div>

    </div>
    <!-- End of Main Box Container -->

  </div>
  <!-- End of Main Container -->
</body>

</html>