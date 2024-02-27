<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='admin')
{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <header class="header">
        <a href="">Student Dashboard</a>
        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </header>
    <aside>
        <ul>
            <li>
                <a href="">My Courses</a>
            </li>
            <li>
                <a href="">My Results</a>
            </li>

        </ul>
    </aside>
    <div class="content">
        <h1>Sidebar Accordian</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, quia assumenda animi repudiandae quas
            corrupti quibusdam nihil deserunt maiores at rem aspernatur quis pariatur debitis facilis id natus aperiam
            ipsa!</p>
        <input type="text" name="">
    </div>
</body>

</html>