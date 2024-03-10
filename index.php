<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
  $message=$_SESSION['message'];

  echo "<script type='text/javascript'>
  alert('$message');
  </script>";
}

$host = "localhost";
$username = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host,$username,$password,$db);

$sql = "SELECT * FROM teacher";

$result = mysqli_query($data,$sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Management System</title>
    <link rel="stylesheet" href="design.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav>
        <label class="logo">Adinath-School</label>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Admision</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <div class="section1">
        <label class="img_text">We Teach and Care Student</label>
        <img class="main_img" src="project_Image/school_management.jpg" alt="management school" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="project_Image/school2.jpg" alt="school" />
            </div>
            <div class="col-md-8">
                <h1>Welcome to Adinath School</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos error
                    iste porro consectetur officiis odit similique, eius voluptatibus
                    omnis dolor nobis earum ea libero? Voluptate id aut libero aliquid
                    esse! Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Illum sunt ut architecto rem assumenda. Incidunt explicabo
                    perferendis maxime? Labore officia doloremque quam odio quod
                    suscipit eius dolor repudiandae dicta aliquid.
                </p>
            </div>
        </div>
    </div>
    <center>
        <h1>Our Teachers</h1>
    </center>
    <div class="container">
        <div class="row">
            <?php  
            while($info=$result->fetch_assoc())
            {

            
            ?>
            <div class="col-md-4">
                <img class="teacher" src="<?php echo "{$info['image']}" ?>" alt="math teacher" />
                <h3><?php echo "{$info['name']}" ?></h3>
                <h5><?php echo "{$info['description']}" ?></h5>
            </div>
            <?php } ?>

        </div>
    </div>
    <center>
        <h1>Our Courses</h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="project_Image/web.jpg" alt="web course" />
                <h3>Web Developement</h3>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="project_Image/graphic.jpg" alt="graphics course" />
                <h3>Graphics Design</h3>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="project_Image/marketing.png" alt="maketing course" />
                <h3>Digital Marketing</h3>
            </div>
        </div>
    </div>
    <center>
        <h1 class="adm">Admission Form</h1>
    </center>
    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_design" type="text" name="name" placeholder="Enter Name" />
            </div>
            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_design" type="text" name="email" placeholder="Enter Email" />
            </div>
            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_design" type="number" name="phone" placeholder="Enter Phone Number" />
            </div>
            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>
            <div class="adm_int">
                <input class="btn btn-primary" id="submit" type="submit" name="apply" value="apply" />
            </div>
        </form>
    </div>
    <footer>
        <h4 class="footer_txt">All @copyright reserved by Romak Web Developer</h4>
    </footer>
</body>

</html>