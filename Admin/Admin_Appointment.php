<?php
session_start();
error_reporting(0);
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

    table {
      font-family: "Poppins", sans-serif;
      color: black;
      font-size: 10pt;
      font-style: normal;
      font-weight: bold;
      /* background-color: rgba(255, 255, 255, 0.13); */
      /* backdrop-filter: blur(0px); */
      /* border-collapse: collapse; */
      /* border-spacing: 0.3cm; */
      border-color: #000;
      border: 1px solid rgba(255, 255, 255, 0);
      /* padding: 10px; */
      border-radius: 10px;
      position: absolute;
      top: 3cm;
      left: 10cm;
      right: 1cm;
    }

    thead {
      background-color: #6fb5de;
      font-size: 15px;
    }

    tbody {
      width: 50%;
    }
    
    tr {
      height: 40px;
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
          <li><a href="AdminPage.php">Home</a></li>
          <li><a href="Admin_Appointment.php" class="active">Appointments</a></li>
          <li><a href="Admin_Patient.php">Patient details</a></li>
          <li><a href="Admin_Doctor.php">Doctor details</a></li>
          <li><a href="Admin_Staff.php">Staff details</a></li>
          <li><a href="AdminLogin.php">Log Out</a></li>
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
          <?php
          // echo "<br> Patient </br>";
          $id = $_REQUEST['ss'];
          $sql = "SELECT Fname, Lname, appointment_date, appointment_slot, sp_required FROM patient WHERE p_id = '$id'";
          // echo "<select name=d_id value=''>Patient Name</option>";
          // $uname = $_SESSION['uname'];
          $stm = $conn->prepare($sql);
          $stm->execute();
          $res = $stm->fetch(PDO::FETCH_ASSOC);
          $fname = $res['Fname'];
          $lname = $res['Lname'];
          $date = $res['appointment_date'];
          $slot = $res['appointment_slot'];
          $sp = $res['sp_required'];

          echo "<p style='position: absolute; top:1.5cm; left:10.5cm; font-size: 20px; font-weight: 700'>Patient</p>";
          echo <<<qq
            <table style = "width: 50%; border: 1px solid black;">
            <thead>
              <tr>
                <th>
                  Patient_ID
                </th>
                <th>
                  Name
                </th>
                <th>
                  Appointment Date
                </th>
                <th>
                  Appointment Slot
                </th>
                <th>
                  Specialization Required
                </th>
              </tr>
              </thead>
              <tbody style="text-align: center;">
                <tr>
                  <td>
                    $id
                  </td>
                  <td>
                    $fname $lname
                  </td>
                  <td>
                    $date
                  </td>
                  <td>
                    $slot
                  </td>
                  <td>
                    $sp
                  </td>
                </tr>
              </tbody>
            </table>
          qq;
          ?>

          <!-- <p style="position: absolute; top:9cm; left:14cm; font-size: 20px; font-weight: 700">Available Doctors</p> -->
          <table style="position: relative; top:0cm; left: -5cm;border: 1px solid black;border-radius: 10px;width: 900px">
            <thead>
              <tr>
                <th>
                  Doctor ID
                </th>
                <th>
                  Name
                </th>
                <th>
                  Contact
                </th>
                <th>
                  Alternate Contact
                </th>
                <th>
                  Email
                </th>
                <th>
                  Specialization
                </th>
                <th>
                  Appointment
                </th>
              </tr>
            </thead>
            <tbody style="text-align: center;">
              <?php
              $query1;
              if ($slot === '1') {
                $query1 = "SELECT * FROM doctor d WHERE (d.Specialization = '$sp') AND (d.availability_date = '$date') AND (d.availability_slot1 = 'Yes')";
              }
              if ($slot === '2') {
                $query1 = "SELECT * FROM doctor d WHERE (d.Specialization = '$sp') AND (d.availability_date = '$date') AND (d.availability_slot2 = 'Yes')";
              }
              if ($slot === '3') {
                $query1 = "SELECT * FROM doctor d WHERE (d.Specialization = '$sp') AND (d.availability_date = '$date') AND (d.availability_slot3 = 'Yes')";
              }

              $stmt = $conn->prepare($query1);
              $stmt->execute();
              $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
              $k = sizeof($result);
              for ($i = 1; $i <= $k; $i++) {
                $Did = $result[$i - 1]['d_id'];
                $fname = $result[$i - 1]['Fname'];
                $lname = $result[$i - 1]['Lname'];
                $mobile1 = $result[$i - 1]['Mobile'];
                $mobile2 = $result[$i - 1]['AlternateContact'];
                $specialization = $result[$i - 1]['Specialization'];
                $email =  $result[$i - 1]['Email'];

                echo <<<qq
                        <tr style="border: 1px solid black;">
                          <td>
                             $Did
                          </td>
                          <td>
                             $fname $lname
                          </td>
                          <td>
                             $mobile1
                          </td>
                          <td>
                             $mobile2
                          </td>
                          <td>
                             $email
                          </td>
                          <td>
                             $specialization
                          </td>
                          <td>
                            <form action = "Redirect.php" method = "GET">
                              <input type = "hidden" name = "pp" value = $Did>
                              <input type = "submit" name = "p" value = Schedule>
                            </form>
                          </td>                    
                        </tr>
                        qq;
              }
              $_SESSION['p_id'] = $id;
              ?>
            </tbody>
          </table>
        </form>
        <!-- <small><strong>NB!</strong> Use a browser that supports :focus-within</small> -->
      </div>
    </main>
  </div>
</body>
</html>