<?php
$error = 0;
$con = mysqli_connect("localhost", "root", "", "ict");
if (!$con)
    die("server not connected");
if (isset($_POST["btn"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $s = "select * from proj where Email='" . $email . "'";
    $q = mysqli_query($con, $s);
    $rows = mysqli_fetch_assoc($q);
    if ($pass == $rows["Password"])
        header("location:index.php");
    else
        $error = 1;
}
?>
<html>

<head>
    <style type="text/css">
        .menu {
            height: 300px;
            width: 400px;
            background-color: #dcdcdc;
            color: rgb(10, 170, 200);
            position: absolute;
            left: 470px;
            text-align: center;
            margin-top: 15px;
            border: 1px solid blue;
            border-radius: 10px;
            font-size: 30px;
            font-style: italic;
        }

        input {
            height: 30px;
            width: 280px;
            margin-left: -10px;
            margin-top: 10px;
    </style>
    <script type="text/javascript">
        function goto() {
            x = document.txt.email.value;
            y = document.txt.pass.value;
            if (x.length == 0) {
                alert("Login id must be filled");
                document.txt.email.focus();
            } else if (y.length == 0) {
                alert("Password must be filled");
                document.txt.pass.focus();
            }
        }
    </script>
</head>

<body bgcolor=pink>
    <h3 align=right><a href="index.php">
            << Go Back To Homepage </a>
    </h3>
    <div class="menu">Sign In<br>
        <form name="txt" action="<?php $_PHP_SELF ?>" method="post">
            <input type="text" placeholder="Enter Email id" name="email"><br>
            <input type="password" placeholder="Enter Password" name="pass"><bR>
            <input type="submit" value="Sign In" onclick="goto()" name="btn"><br>
            <?php
            if ($error == 1)
                echo "<font color='red'>User Name or Password Is Incorrect</font>";
?>
            <button style="height:30px;width:100px;margin-top:20px;border:2px solid blue;"><a href="signup.php" style="text-decoration:none">Sign Up</a></button>
    </div>
    </form>
</body>

</html>