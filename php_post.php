<?php
$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$cnfpass = $_POST["cnfpass"];
if ($pass == $cnfpass) {
    $con = mysqli_connect("localhost", "root", "", "ict");
    if (!$con)
        die("server not connected");
    $insert = "insert into proj (Name,Email,Password,CnfPassword) values ('" . $name . "','" . $email . "','" . $pass . "','" . $cnfpass . "')";
    $check = mysqli_query($con, $insert);
    if ($check != 0) {
        echo "<font color='green'>Registered Succesfully</font>";
        echo "<br>";
        echo "<hr>";
        echo "<a href='signin.php'><h3>Go Back To Sign In</h3></a>";
    } else {
        echo "<font color='red'>Unable To Store</font>";
    }
}
