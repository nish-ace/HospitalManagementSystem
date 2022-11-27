<?php
    session_start();
    header("refresh:1;url=Admin_Patient.php");
?>
<!DOCTYPE html>



<body>
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
        $p_id = $_SESSION['p_id'];
        $d_id = $_SESSION['d_id'];
        $slot = $_SESSION['slot'];
        $date = $_SESSION['date'];
        $query = "INSERT INTO appointment VALUES ('$d_id', '$p_id', '$date', '$slot')";
        $stmt = $conn->prepare($query);
        $stmt->execute();
    ?>
</body>