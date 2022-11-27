<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<title>Patient Page</title>

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
      top: 5cm;
      left: 9cm;
      right: 1cm;
    }

    thead {
      background-color: #6fb5de;
      font-size: 15px;
    }

    tr {
      height: 40px;
    }
  </style>
</head>

<body>
  <div>
    <header tabindex="0" style="font-size: 35px;">Welcome</header>
    <div id="nav-container">
      <div class="bg"></div>
      <div class="button" tabindex="0">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </div>
      <div id="nav-content" tabindex="0">
        <ul>
          <li><a href="http://localhost:90/Project/Patient/PatientPage.php">Home</a></li>
          <li><a href="http://localhost:90/Project/Patient/Patient_Appointment.php">Book Appointments</a></li>
          <li><a href="http://localhost:90/Project/Patient/PatientPrescription.php" class="active">Diagnosis Report</a></li>
          <li><a href="http://localhost:90/Project/Patient/PatientLogin.php">Log Out</a></li>
          <!-- <li class="small"><a href="#0">Facebook</a><a href="#0">Instagram</a></li> -->
        </ul>
      </div>
    </div>
    <main>
      <div class="content">
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

        <?php
        $stmt = $conn->prepare("SELECT * FROM diagnosis");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_NUM);
        // print_r(sizeof($result[0]));
        ?>

        <table style="border: 1px solid black;margin-left: 0px; width: 1000px;">
          <thead>
            <tr>
              <th>
                Prescription ID
              </th>
              <th>
                Patient ID
              </th>
              <th>
                Date
              </th>
              <th>
                Illness
              </th>
              <th>
                Medicine
              </th>
              <th>
                Dosage(times/day)
              </th>
              <th>
                Duration(no. of days)
              </th>
              <th>
                Advice
              </th>
            </tr>
          </thead>
          <tbody style="text-align: center;">
            <?php
            $pid = $_SESSION['p_id'];
            $query = "SELECT * From diagnosis WHERE diagnosis.p_id='$pid'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $k = sizeof($result);
            for ($i = 1; $i <= $k; $i++) {
              $id = $result[$i - 1]['diag_id'];
              $p_id = $result[$i - 1]['p_id'];
              $date = $result[$i-1]['Date'];
              $illness = $result[$i - 1]['illness'];
              $medicine1 = $result[$i - 1]['Medicine1'];
              $medicine2 = $result[$i - 1]['Medicine2'];
              $medicine3 = $result[$i - 1]['Medicine3'];
              $medicine4 = $result[$i - 1]['Medicine4'];
              $dosage1 = $result[$i - 1]['Dosage1'];
              $dosage2 = $result[$i - 1]['Dosage2'];
              $dosage3 = $result[$i - 1]['Dosage3'];
              $dosage4 = $result[$i - 1]['Dosage4'];
              $duration1 = $result[$i - 1]['Duration1'];
              $duration2 = $result[$i - 1]['Duration2'];
              $duration3 = $result[$i - 1]['Duration3'];
              $duration4 = $result[$i - 1]['Duration4'];
              $advice = $result[$i-1]['Advice'];
              if ($dosage2 === '0'){
                echo <<<qq
              <tr style = "border: 1px solid black;">
              <td>$id</td><td>$p_id</td><td>$date</td><td>$illness</td><td>$medicine1</td><td>$dosage1</td><td>$duration1</td><td>$advice</td>
              </tr>
              qq;
              }
              elseif($dosage3 ==='0'){
              echo <<<qq
              <tr style = "border: 1px solid black;">
              <td>$id</td><td>$p_id</td><td>$date</td><td>$illness</td><td>$medicine1</td><td>$dosage1</td><td>$duration1</td><td>$advice</td>
              </tr>
              <tr style = "border: 1px solid black;">
              <td>$id</td><td>$p_id</td><td>$date</td><td>$illness</td><td>$medicine2</td><td>$dosage2</td><td>$duration2</td><td>$advice</td>
              </tr>
              qq;
              }
              elseif($dosage4 ==='0'){
                echo <<<qq
                <tr style = "border: 1px solid black;">
                <td>$id</td><td>$p_id</td><td>$date</td><td>$illness</td><td>$medicine1</td><td>$dosage1</td><td>$duration1</td><td>$advice</td>
                </tr>
                <tr style = "border: 1px solid black;">
                <td>$id</td><td>$p_id</td><td>$date</td><td>$illness</td><td>$medicine2</td><td>$dosage2</td><td>$duration2</td><td>$advice</td>
                </tr>
                <tr style = "border: 1px solid black;">
                <td>$id</td><td>$p_id</td><td>$date</td><td>$illness</td><td>$medicine3</td><td>$dosage3</td><td>$duration3</td><td>$advice</td>
                </tr>
                qq;
                }
                else {
                  echo <<<qq
                <tr style = "border: 1px solid black;">
                <td>$id</td><td>$p_id</td><td>$date</td><td>$illness</td><td>$medicine1</td><td>$dosage1</td><td>$duration1</td><td>$advice</td>
                </tr>
                <tr style = "border: 1px solid black;">
                <td>$id</td><td>$p_id</td><td>$date</td><td>$illness</td><td>$medicine2</td><td>$dosage2</td><td>$duration2</td><td>$advice</td>
                </tr>
                <tr style = "border: 1px solid black;">
                <td>$id</td><td>$p_id</td><td>$date</td><td>$illness</td><td>$medicine3</td><td>$dosage3</td><td>$duration3</td><td>$advice</td>
                </tr>
                <tr style = "border: 1px solid black;">
                <td>$id</td><td>$p_id</td><td>$date</td><td>$illness</td><td>$medicine4</td><td>$dosage4</td><td>$duration4</td><td>$advice</td>
                </tr>
                qq;
                }

            }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>

</html>