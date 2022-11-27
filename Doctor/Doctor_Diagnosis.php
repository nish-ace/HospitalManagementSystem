<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Diagnosis Report</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #080710;
            background-image: url("https://png.pngtree.com/thumb_back/fw800/back_our/20190617/ourmid/pngtree-creative-medical-poster-background-material-image_125786.jpg");
            background-size: cover;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(#1845ad,
                    #23a2f6);
            left: -80px;
            top: -80px;
        }

        .shape:last-child {
            background: linear-gradient(to right,
                    #ff512f,
                    #f09819);
            right: -30px;
            bottom: -80px;
        }

        form {
            height: 700px;
            width: 650px;
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

        form h4 {
            margin-top: -15px;
            font-size: 25px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
            font-size: 16px;
            font-weight: 500;
        }

        input {
            font-family: 'Poppins', sans-serif;
            display: block;
            height: 40px;
            width: 100%;
            background-color: rgba(158, 155, 155, 0.07);
            border-radius: 3px;
            padding: 5px 10px;
            font-size: 14px;
            font-weight: 300;
            text-align: center;
        }

        ::placeholder {
            color: #828080;
        }

        button {
            margin-top: 10px;
            width: 100%;
            background-color: rgba(158, 155, 155, 0.07);
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 400;
            border-radius: 5px;
            cursor: pointer;
        }

        select {
            width: 100%;
            background-color: rgba(158, 155, 155, 0.07);
            padding: 15px 0;
            color: #545454;
            font-size: 15px;
            font-weight: 400;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }

        table {
            margin-top: 10px;
            font-family: "Poppins", sans-serif;
            color: black;
            font-size: 11pt;
            font-style: normal;
            font-weight: bold;
            /* background-color: rgba(255, 255, 255, 0.13); */
            backdrop-filter: blur(0px);
            /* border-collapse: collapse; */
            border-spacing: 0cm;
            padding: 10px;
        }

        table.inner {
            border: 0px solid rgba(255, 255, 255, 0);
        }

        textarea {
            height: 55px;
        }

        .error {
            background: #F2DEDE;
            color: #0c0101;
            padding: 10px;
            width: 30%;
            border-radius: 5px;
            margin: 20px auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div> -->
    <?php
    $pid = $_POST['pp'];
    // $date = strrev($_POST['date']);
    echo <<<qq
    <form action="" method="POST">
        <h4>Diagnosis Report</h4>

        <table style="width: 100%;">
            <tr>
                <td>
                    <label for="name">Patient ID</label>
                </td>
                <td style="width: 2px;"> </td>
                <td>
                    <input type="text" id="id" name="p_id" placeholder="Patient Id" required="required" value = "$pid">
                </td>
                <td style="width: 15px;"></td>
                <td>
                    <label for="date">Date</label>
                </td>
                <td style="width: 5px;"> </td>
                <td>
                    <input type="date" id="date" name="date" required="required">
                </td>
            </tr>
        </table>
        <table style="width: 575px;">
            <tr>
                <td>
                    <label for="illness"> Illness </label>
                </td>
                <td style="width: 50px;"> </td>
                <td style="width: 600px;">
                    <input type="text" id="text" name="illness" placeholder="Problem of the patient" required="required">
                </td>
            </tr>
        </table>
        <table style="height: 250px;">
            <tr>
                <td style="width: 45%;">
                    <label for="medicine" style="text-align: center;margin-top: -1px;margin-bottom:5px;">Medicine </label>
                    <input type="text" id="medicine" name="medicine1" placeholder="Medicine 1"><br>
                    <input type="text" id="medicine" name="medicine2" placeholder="Medicine 2"><br>
                    <input type="text" id="medicine" name="medicine3" placeholder="Medicine 3"><br>
                    <input type="text" id="medicine" name="medicine4" placeholder="Medicine 4">
                </td>
                <td style="width: 5px;"></td>
                <td style="width: 25%;">
                    <label for="dosage" style="text-align: center;margin-top: -1px;margin-bottom:5px;">Dosage </label>
                    <input type="number" id="dosage" name="dosage1" placeholder="times/day"><br>
                    <input type="number" id="dosage" name="dosage2" placeholder="times/day"><br>
                    <input type="number" id="dosage" name="dosage3" placeholder="times/day"><br>
                    <input type="number" id="dosage" name="dosage4" placeholder="times/day">
                </td>
                <td style="width: 5px;"></td>
                <td style="width: 25%;">
                    <label for="duration" style="text-align: center;margin-top: -1px;margin-bottom:5px;">Duration </label>
                    <input type="number" id="duration" name="duration1" placeholder="no. of days"><br>
                    <input type="number" id="duration" name="duration2" placeholder="no. of days"><br>
                    <input type="number" id="duration" name="duration3" placeholder="no. of days"><br>
                    <input type="number" id="duration" name="duration4" placeholder="no. of days">
                </td>
            </tr>

        </table>
        <table style="width: 575px; margin-top: 30px">
            <tr>
                <td>
                    <label for="advice"> Advice </label>
                </td>
                <td style="width: 50px; margin-top: 13px;"> </td>
                <td style="width: 600px;">
                    <input type="text" id="text" name="advice" placeholder="Things to keep in mind" required="required">
                </td>
            </tr>
        </table>
        </table>
        <table style="width: 100%;">
            <tr>
                <td>
                    <button type="submit" value="Submit" name="submit">Make Report</button>
                </td>
            </tr>
        </table>
    </form>
    qq;
    ?>
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
    // print_r($_SESSION);
    // print_r($_POST);
    if (isset($_POST['p_id']) && isset($_POST['date']) && isset($_POST['illness']) && isset($_POST['advice']) && isset($_POST['medicine1']) && isset($_POST['dosage1']) && isset($_POST['duration1'])) {
        $p_id = $_POST['p_id'];
        $d_id = $_SESSION['d_id'];
        $date = $_POST['date'];
        $illness = $_POST['illness'];
        $medicine1 = $_POST['medicine1'];
        $medicine2 = $_POST['medicine2'];
        $medicine3 = $_POST['medicine3'];
        $medicine4 = $_POST['medicine4'];
        $dosage1 = $_POST['dosage1'];
        $dosage2 = $_POST['dosage2'];
        $dosage3 = $_POST['dosage3'];
        $dosage4 = $_POST['dosage4'];
        $duration1 = $_POST['duration1'];
        $duration2 = $_POST['duration2'];
        $duration3 = $_POST['duration3'];
        $duration4 = $_POST['duration4'];
        $advice = $_POST['advice'];

        $query = "INSERT INTO diagnosis VALUES('','$d_id','$p_id','$date','$illness','$medicine1','$medicine2','$medicine3','$medicine4','$dosage1','$dosage2','$dosage3','$dosage4','$duration1','$duration2','$duration3','$duration4','$advice')";
        $stmt = $conn->prepare($query);
        $stmt->execute();
    }
    ?>
</body>

</html>