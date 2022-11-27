<?php
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

    .box1 {
      position: absolute;
      background-color: blue;
      top: 10cm;
      left: 5cm;
      right: 5cm;
      height: 5cm;
      text-align: center;
    }
  </style>
</head>

<body>

  <div class="page">
    <header tabindex="0" style="font-size: 35px;">Homepage</header>
    <div id="nav-container">
      <div class="bg"></div>
      <div class="button" tabindex="0">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </div>

      <div id="nav-content" tabindex="0">
        <ul>
          <li><a href="DoctorPage.php" class = "active">Home</a></li>
          <li><a href="Doctor_Appointment.php">Appointments</a></li>
          <li><a href="Doctor_Patient.php">Patient details</a></li>
          <li><a href="http://localhost:90/Project/Doctor/DoctorLogin.php">Log Out</a></li>
          <!-- <li><a href="Admin_Doctor.php">Doctor details</a></li>
          <li><a href="Admin_Staff.php">Staff details</a></li> -->
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
        if (!$conn) 
        {
            echo "Connection failed!";
        }
      ?>
      <?php
        $uname = $_SESSION['uname'];
        $query = "SELECT * FROM doctor WHERE (Email = '$uname' OR d_id = '$uname')";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        echo "Welcome ".$result[0]['Fname']." ".$result[0]['Lname'];

      ?>
        <!-- <small><strong>NB!</strong> Use a browser that supports :focus-within</small> -->
      </div>
    </main>
  </div>
</body>

</html>