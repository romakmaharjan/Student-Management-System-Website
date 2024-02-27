<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>Login </title>
</head>
<style>
.form_design {
    padding-top: 200px;
}

.label_design {
    display: inline-block;
    color: skyblue;
    width: 100px;
    text-align: right;
    padding-top: 10px;
    padding-bottom: 10px;
}

.login_form {
    background-color: black;
    width: 400px;
    padding-top: 70px;
    padding-bottom: 70px;
}

.title_design {
    width: 400px;
    background-color: skyblue;
    color: white;
    text-align: center;
    font-weight: bold;
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 20px;
}

.body_design {
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-attachment: fixed;

}
</style>

<body background="./project_Image/school2.jpg" class="body_design">
    <center>
        <div class=" form_design">
            <center class="title_design">
                Login Form
                <h4>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    
                    echo $_SESSION['loginMessage'];
                    ?>
                </h4>
            </center>
            <form action="login_check.php" method="post" class="login_form">
                <div>
                    <label class="label_design">Username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label class="label_design">Password</label>
                    <input type="password" name="password">
                </div>
                <div>

                    <input class="btn btn-primary" type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </center>
</body>

</html>