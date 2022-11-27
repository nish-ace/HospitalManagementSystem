<?php
  error_reporting(0);
  session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <style>
    /* body,
    html {
      height: 100%;
      margin: 0;
    }

    .bg-img {
      background-image: url("https://png.pngtree.com/thumb_back/fw800/back_our/20190617/ourmid/pngtree-creative-medical-poster-background-material-image_125786.jpg");
      height: 99.7%;

      background-position: center;
      background-size: cover;

    } */

    @import url('https://fonts.googleapis.com/css?family=Encode+Sans+Condensed:400,600');

    * {
      outline: none;
    }

    strong {
      font-weight: 600;
    }

    .page {
      width: 100%;
      height: 100%;
      background: #fdfdfd;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      letter-spacing: .03em;
      color: #212121;
      /* background-image: url("https://png.pngtree.com/thumb_back/fw800/back_our/20190617/ourmid/pngtree-creative-medical-poster-background-material-image_125786.jpg"); */
    }

    header {
      display: flex;
      position: fixed;
      width: 100%;
      font-family: 'Poppins', sans-serif;
      height: 70px;
      background: #6fb5de;
      color: rgb(24, 21, 21);
      justify-content: center;
      align-items: center;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    main {
      padding: 70px 20px 0;
      display: flex;
      flex-direction: column;
      height: 100%;
    }

    main>div {
      margin: auto;
      max-width: 600px;
    }

    main h2 span {
      color: #BF7497;
    }

    main p {
      line-height: 1.5;
      font-weight: 200;
      margin: 20px 0;
    }

    main small {
      font-weight: 300;
      color: #888;
    }

    #nav-container {
      position: fixed;
      height: 100vh;
      width: 100%;
      pointer-events: none;
    }

    #nav-container .bg {
      position: absolute;
      top: 70px;
      left: 0;
      width: 100%;
      height: calc(100% - 70px);
      visibility: hidden;
      opacity: 0;
      transition: .3s;
      background: #000;
    }

    #nav-container:focus-within .bg {
      visibility: visible;
      opacity: .6;
    }

    #nav-container * {
      visibility: visible;
    }

    .button {
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      z-index: 1;
      -webkit-appearance: none;
      border: 0;
      background: transparent;
      border-radius: 0;
      height: 70px;
      width: 30px;
      cursor: pointer;
      pointer-events: auto;
      margin-left: 25px;
      touch-action: manipulation;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .icon-bar {
      display: block;
      width: 100%;
      height: 3px;
      background: rgb(0, 0, 0);
      transition: .3s;
    }

    .icon-bar+.icon-bar {
      margin-top: 5px;
    }

    #nav-container:focus-within .button {
      pointer-events: none;
    }

    #nav-container:focus-within .icon-bar:nth-of-type(1) {
      transform: translate3d(0, 8px, 0) rotate(45deg);
    }

    #nav-container:focus-within .icon-bar:nth-of-type(2) {
      opacity: 0;
    }

    #nav-container:focus-within .icon-bar:nth-of-type(3) {
      transform: translate3d(0, -8px, 0) rotate(-45deg);
    }

    #nav-content {
      margin-top: 70px;
      padding: 20px;
      width: 90%;
      max-width: 300px;
      position: absolute;
      top: 0;
      left: 0;
      height: calc(100% - 70px);
      background: #ececec;
      pointer-events: auto;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      transform: translateX(-100%);
      transition: transform .3s;
      will-change: transform;
      contain: paint;
    }

    #nav-content ul {
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    #nav-content li a {
      padding: 10px 5px;
      display: block;
      text-transform: uppercase;
      transition: color .1s;
    }

    #nav-content li a:hover {
      color: #BF7497;
    }

    #nav-content li:not(.small)+.small {
      margin-top: auto;
    }

    .small {
      display: flex;
      align-self: center;
    }

    .small a {
      font-size: 12px;
      font-weight: 400;
      color: #888;
    }

    .small a+a {
      margin-left: 15px;
    }

    #nav-container:focus-within #nav-content {
      transform: none;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html,
    body {
      height: 100%;
    }

    a,
    a:visited,
    a:focus,
    a:active,
    a:link {
      text-decoration: none;
      outline: 0;
    }

    a {
      color: currentColor;
      transition: .2s ease-in-out;
    }

    h1,
    h2,
    h3,
    h4 {
      margin: 0;
    }

    ul {
      padding: 0;
      list-style: none;
    }

    img {
      vertical-align: middle;
      height: auto;
      width: 100%;
    }

    .active {
      background-color: #6fb5de;
      color: white;
    }

    table {
      font-family: Calibri;
      color: black;
      font-size: 11pt;
      font-style: normal;
      font-weight: bold;
      border-spacing: 5px;
    }

    form {
      height: 490px;
      width: 400px;
      background-color: rgba(255, 255, 255, 0.13);
      position: absolute;
      transform: translate(-50%, -50%);
      top: 50%;
      left: 50%;
      border-radius: 10px;
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
      padding: 50px 35px;
    }

    form * {
      font-family: 'Poppins', sans-serif;
      color: #000000;
      letter-spacing: 0.5px;
      outline: none;
      border: none;
    }

    form h3 {
      font-size: 32px;
      font-weight: 500;
      line-height: 42px;
      text-align: center;
    }

    label {
      display: block;
      margin-top: 30px;
      font-size: 16px;
      font-weight: 500;
    }

    input {
      display: block;
      height: 50px;
      width: 100%;
      background-color: rgba(158, 155, 155, 0.07);
      border-radius: 3px;
      padding: 0 10px;
      margin-top: 8px;
      font-size: 14px;
      font-weight: 300;
    }

    select {
      display: block;
      height: 50px;
      width: 100%;
      background-color: rgba(158, 155, 155, 0.07);
      border-radius: 3px;
      padding: 0 10px;
      margin-top: 8px;
      font-size: 14px;
      font-weight: 300;
    }

    ::placeholder {
      color: #828080;
    }

    button {
      margin-top: 60px;
      width: 100%;
      background-color: rgba(158, 155, 155, 0.07);
      color: #080710;
      padding: 15px 0;
      font-size: 18px;
      font-weight: 600;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>

<body>

  <div class="page">
    <header tabindex="0" style="font-size: 35px;">Appointment Details</header>
    <div id="nav-container">
      <div class="bg"></div>
      <div class="button" tabindex="0">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </div>

      <div id="nav-content" tabindex="0">
        <ul>
          <li><a href="DoctorPage.php">Home</a></li>
          <li><a href="Doctor_Patient.php">Patient detail</a></li>
          <li><a href="Doctor_Appointment.php" class="active">Appointments</a></li>
          <li><a href="Project/Doctor/DoctorLogin.php">Log Out</a></li>
          <!-- <li class="small"><a href="#0">Facebook</a><a href="#0">Instagram</a></li> -->
        </ul>
      </div>
    </div>
    <main>
      <div class="content">
        <!-- <h2>Off-screen navigation using <span>:focus-within</span></h2>
        <p>Adding yet another pure CSS technique to the list of off-screen navigation by "hacking" the :focus-within pseudo-class. Have a look at the code to see how it works.</p> -->
        <?php
        $sname = "127.0.0.1:3307";
        $uname = "root";
        $password = "";
        $db_name = "hospital";

        $conn = new PDO("mysql:host=$sname;dbname=$db_name", $uname, $password);
        if (!$conn) {
          echo "Connection failed!";
        }
        ?>

        <form method="POST">
          <h3>Availability</h3>
          <label for="select">Date: </label>
          <input type="date" id="" name="date">
          <table>
            <tr>
              <label for="slot">Slot: </label>
              <div>
                <select id="slot" name="slot" class="form-control">
                  <option value="">--Select--</option>
                  <option value="1">Slot 1 (0800 HRS to 1600 HRS)</option>
                  <option value="2">Slot 2 (1600 HRS to 0000 HRS)</option>
                  <option value="3">Slot 3 (0000 HRS to 0800 HRS)</option>
              </div>
            </tr>
          </table>

          <div>
            <table style="width: 100%;">
              <tr>
                <td>
                  <button type="submit" value="submit">Save</button>
                </td>
              </tr>
            </table>
          </div>
        </form>
        <?php
          $date = $_POST['date'];
          $slot = $_POST['slot'];
          $query;
          $uname = $_SESSION['uname'];
          //UPDATE bike SET full_day = 10 WHERE bike_type = 'mens_hybrid';
          if(isset($_POST['date']) && isset($_POST['slot'])){
            if ($slot === "1")
            {
              $query = "UPDATE doctor SET availability_date = '$date', availability_slot1 = 'Yes', availability_slot2 = NULL, availability_slot3 = NULL WHERE Email = '$uname' OR d_id = '$uname'";
            }
            if ($slot === "2")
            {
              $query = "UPDATE doctor SET availability_date = '$date', availability_slot1 = NULL, availability_slot2 = 'Yes', availability_slot3 = NULL WHERE Email = '$uname' OR d_id = '$uname'";
            }
            if ($slot === "3")
            {
              $query = "UPDATE doctor SET availability_date = '$date', availability_slot1 = NULL, availability_slot2 = NULL, availability_slot3 = 'Yes' WHERE Email = '$uname' OR d_id = '$uname'";
            }
            $stmt = $conn->prepare($query);
            $stmt->execute();
          }
        ?>
        <!-- <small><strong>NB!</strong> Use a browser that supports :focus-within</small> -->
      </div>
    </main>
  </div>
</body>
</html>