<!DOCTYPE html>
<html lang="en">
<head>
<?php if ($check): ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

  <title>Attendance</title>
</head>
<body>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Student ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Middle Initial</th>
        <th scope="col">Year</th>
        <th scope="col">Section</th>
        <th scope="col">Course</th>
        <th scope="col">Time In</th>
      </tr>
    </thead>
    <tbody>
    <?php if(is_array($attendance) || is_object($attendance)): ?>
      <?php $counter = 1; ?>
      <?php foreach($attendance as $student):?>
        <tr>
          <th scope="row"><?=$counter++?></th>
          <td><?=$student->Student_ID?></td>
          <td><?=$student->First_Name?></td>
          <td><?=$student->Last_Name?></td>
          <td><?=$student->Middle_Initial?></td>
          <td><?=$student->Year?></td>
          <td><?=$student->Section?></td>
          <td><?=$student->Course?></td>
          <td><?=$student->Time_In?></td>
        </tr>
      <?php endforeach ?>
    <?php endif ?>
    </tbody>
  </table>
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

</body>

<?php else: ?>
  <h1> This page has either been removed or you are not authorized to view</h1>
<?php endif ?>
</html>