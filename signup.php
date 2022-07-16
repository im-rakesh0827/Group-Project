<html>

<head>
    <style type="text/css">
        .menu {
            height: 270px;
            width: 400px;
            background-color: #dcdcdc;
            color: red;
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
</head>

<body bgcolor=green>
    <b>Already a Customer?</b><br><button onclick="signin()">Sign In</button>
    <h3 align=right><a href="index.php">
            << Go Back To Homepage </a>
    </h3>
    <script type="text/javascript">
        function register() {
            q = document.ict.name.value;
            r = document.ict.email.value;
            s = document.ict.pass.value;
            t = document.ict.cnfpass.value;
            if (q.length == 0) {
                alert("Name must Be Filled");
                document.ict.name.focus();
            } else if (r.length == 0) {
                alert("Email id should be filled");
                document.ict.email.focus();
            } else if (s.length < 8) {
                alert('Password should contain atleast 8 character');
                document.ict.pass.focus();
            } else if (s != t) {
                alert("password should be same");
                document.ict.cnfpass.focus();
            }
        }

        function signin() {
            window.location = "signin.php";
        }
    </script>

    <form name="ict" action="php_post.php" method="post">
        <div class="menu">Sign Up<br>
            <input type="text" placeholder="Enter Your Name" name="name"><br>
            <input type="text" placeholder="Enter Email id" name="email"><br>
            <input type="password" placeholder="Enter Password" name="pass"><bR>
            <input type="password" placeholder="Enter Conform Password" name="cnfpass"><br>
            <input type="submit" value="Sign Up" onclick="register()"><br>
        </div>
    </form>
</body>

</html>