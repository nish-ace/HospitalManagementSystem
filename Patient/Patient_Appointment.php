<?php
    error_reporting(0);
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Book Appointment</title>

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
            height: 550px;
            width: 450px;
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
            font-family: 'Poppins', sans-serif;
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(158, 155, 155, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            font-size: 14px;
            font-weight: 300;
            text-align: center;
        }

        ::placeholder {
            color: #828080;
        }

        button {
            margin-top: 40px;
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
            font-family: "Poppins", sans-serif;
            color: black;
            font-size: 11pt;
            font-style: normal;
            font-weight: bold;
            background-color: rgba(255, 255, 255, 0.13);
            backdrop-filter: blur(0px);
            border-collapse: collapse;
            border-spacing: 10cm;
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
    <form method="POST">
        <h3>Book Appointment</h3>

        <table>
            <tr>
                <label for="sp"> Specialization Required </label>
                <div>
                    <select id="sp" name="sp">
                        <option value=""> --Select--</option>
                        <option value="cardiologist"> Cardiologist</option>
                        <option value="dentist"> Dentist</option>
                        <option value="diabetologist">Diabetologist</option>
                        <option value="ent">ENT Specialist</option>
                        <option value="gastroenterologist">Gastroenterologist</option>
                        <option value="generalphysician">General Physician</option>
                        <option value="pediatrician">Pediatrician</option>
                        <option value="physiotherapist">Physiotherapist</option>
                        <option value="psychiatrist">Psychiatrist</option>
                </div>
            </tr>
        </table>
        <label for="date"> Date </label>
        <input type="date" id="date" name="date">
        <table>
            <tr>
                <label for="slot"> Slot </label>             
                <div>
                    <select id="slot" name="slot" class="form-control">
                        <option value=""> --Select--</option>
                        <option value="1">Slot 1 (0800 HRS to 1600 HRS)</option>
                        <option value="2">Slot 2 (1600 HRS to 0000 HRS)</option>
                        <option value="3">Slot 3 (0000 HRS to 0800 HRS)</option>
                </div>
            </tr>
        </table>

        <div>
            <table style="width: 100%;">
                <tr style="height: 100%;">
                    <td>
                        <button type="submit" value="Submit">Book</button>
                    </td>
            </table>
        </div>
    </form>
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
        $specialization = $_POST['sp'];
        $date = $_POST['date'];
        $slot = $_POST['slot'];
        $uname = $_SESSION['uname'];
        // print_r($_POST);
        if(isset($_POST['date']) && isset($_POST['slot'])){
          $query = "UPDATE patient SET sp_required = '$specialization', appointment_date = '$date', appointment_slot = $slot WHERE Email = '$uname' OR RollNumber = '$uname'";
          $stmt = $conn->prepare($query);
          $stmt->execute();
        }
    
    ?>
</body>

</html>