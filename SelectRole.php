<?php
    error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>

<style>
    body,html{
        height: 100%;
        margin: 0;
    }
    .bg-img {
        background-image:url("https://png.pngtree.com/thumb_back/fw800/back_our/20190617/ourmid/pngtree-creative-medical-poster-background-material-image_125786.jpg");
        height: 100%; 
        width: 100%;
        background-position: center;
        background-size: cover;
        }

    .box2 {
        position:fixed;
        right: 100px;
        left: 620px;
        top: 220px;
        bottom: 250px;
        margin: 50px;
        max-width: 300px;
        background-color: white;
        border-radius: 10px;
        padding: 10px;
        font-size: 15pt;
    }

    h3 {
        font-family: Calibri;
        font-size: 18pt;
        font-style: normal;
        font-weight: bold;
        color: black;
        text-align: center;
    }

    .btn {
        background-color: #23a2f6;
        color: black;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.7;
}

    .btn:hover {
        opacity: 50;
}

.centered{
  position: absolute;
  top: 60px;
  left: 23%;
  /* transform: translate(-50%, -50%); */
  font-family: 'Poppins', sans-serif;
  font-size: 60px;
  text-decoration: double;
}

</style>
<title>Select a Role</title>
</head>

<body>
    <div class="bg-img">
    <div class="centered">Healthcare Management System</div>
        <form method="post" action="" class="box2">
          <h3>Select a Role</h3>

          <label for="role"></label>

          <input type="radio" id="role" name="role" value='1'>
          <label for="html">Adminstrator</label><br><br>
      
          <input type="radio" id="role" name="role" value='2'>
          <label for="html">User</label><br><br>
      
          <button type="submit" value = "submit" class="btn">Continue</button>
        </form>
      </div>
</body>

<?php

$role = $_POST['role'];
 
switch ($role) {
   case 1:
      header("Location: Admin/AdminLogin.php");
      exit;
   break;
 
   case 2:
      header("Location: SelectUser.php");
      exit;
   break;
}
 
?>
</html>