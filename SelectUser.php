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
        top: 160px;
        bottom: 265px;
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
        opacity: 10;
}

</style>
<title>Select User</title>
</head>

<body>
    <div class="bg-img">
        <form method="post" action="" class="box2">
          <h3>Select User</h3>

          <label for="role"></label>

          <input type="radio" id="user" name="user" value="1">
          <label for="html">Doctor</label><br><br>

          <input type="radio" id="user" name="user" value="2">
          <label for="html">Patient</label><br><br>

          <input type="radio" id="user" name="user" value="3">
          <label for="html">Staff</label><br><br>
      
          <button type="submit" value="submit" class="btn">Continue</button>
        </form>
      </div>
</body>

<?php
$user = $_POST['user'];
 
switch ($user) {
   case 1:
      header("Location: Doctor/DoctorLogin.php");
      exit;
   break;
 
   case 2:
      header("Location: Patient/PatientLogin.php");
      exit;
   break;
 
   case 3:
      header("Location: Staff/StaffLogin.php");
      exit;
   break;
}
?>
</html>