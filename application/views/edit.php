<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create</title>
</head>

<body>
  <form method="POST" action="generate.php" enctype="multipart/form-data">
    Title:
    <input type="text" name="title" class="textbox" id="title_txtbox" required />
    <br> Logo:
    <input type="file" accept="image/jpeg" name="logo1" class="upload_box" id="logo1_uploadbox" required />
    <br> Logo Name:
    <input type="text" name="logo_name1" class="textbox" id="logo1_txtbox" required />
    <br> Logo 2:
    <input type="file" accept="image/jpeg" name="logo2" class="upload_box" id="logo2_uploadbox" required />
    <br> Logo Name 2:
    <input type="text" name="logo_name2" class="textbox" id="logo2_txtbox" required />
    <br>
    <input type="submit" name="submit_btn" id="submit_btn" />
  </form>

</body>

</html>