
<!DOCTYPE>
<html>
<?php if ($this->session->userdata('account_id') == $generate->Account_ID): ?>
<head>
  <title><?=$generate->Title?> Timeout</title>
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
        <label><?=$generate->Title?> Timeout</label>
        <form id="ajax_form">
          <input type="text" name="snum" id="txt_snum" placeholder="Enter Student Number..." required>
          <input type="submit" value="Login">
        </form>

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
<?php else: ?>
  <head>
    <title>404 Not Found </title>
  </head>
  <?= "<h1>404 ERROR: The registration might have been removed or closed by the moderator</h1>"?>
<?php endif?>
</html>