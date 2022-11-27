<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doctor Login</title>

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

        ::placeholder {
            color: #828080;
        }

        button {
            width: 100%;
            background-color: rgba(158, 155, 155, 0.07);
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        a{
            
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
        
        }

        .social {
            margin-top: 30px;
            display: flex;
        }

        .social div {
            background: red;
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255, 255, 255, 0.27);
            color: #eaf0fb;
            text-align: center;
        }

        .social div:hover {
            background-color: rgba(255, 255, 255, 0.47);
        }

        .social .fb {
            margin-left: 25px;
        }

        .social i {
            margin-right: 4px;
        }

        table {
            font-family: 'Poppins', sans-serif;
            color: black;
            font-size: 11pt;
            font-style: normal;
            font-weight: bold;
            border-spacing: 5px;
        }
    </style>
</head>

<body>
    <!-- <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div> -->
    <form method="GET">
        <h3>Doctor Login</h3>

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

        <label for="username">Username</label>
        <input type="text" placeholder="Email or DoctorID" id="username" name="uname">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <table style="width: 180%; margin-top: 55px;">
            <tr>
                <td>
                    <button>Log In</button>
                </td>
                <td></td>
                <td>
                    <a style="text-decoration: none; background-color: rgba(158, 155, 155, 0.07);
                    color: #080710; padding: 15px 45px;border-radius: 5px;cursor: pointer;" href="http://localhost:90/Project/Doctor/DoctorRegistration.php">Sign Up</a>
                </td>
            </tr>
        </table>
    </form>

    <?php
        $uname = $_GET['uname'];
        $password = $_GET['password'];
        // print_r($_GET);
        $query = "SELECT * FROM doctor WHERE (Email = '$uname' OR d_id = '$uname') AND Passwrd = '$password'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (isset($_GET['uname']) && isset($_GET['password'])){
            if((($_GET['uname'] === $result[0]['Email']) || ($_GET['uname'] === $result[0]['d_id'])) && ($_GET['password'] === $result[0]['Passwrd'])){
                print_r($result['Passwrd']);
                echo '<p class="error">Login Successful!</p>';
                echo '<meta http-equiv="refresh" content="0;url=http://localhost:90/Project/Doctor/DoctorPage.php">';
                $_SESSION['uname'] = $uname;
                $_SESSION['d_id'] = $result[0]['d_id'];
            }
            else{
                echo '<p class="error">Invalid username or password</p>';
            }
        }
    ?>
</body>

</html>