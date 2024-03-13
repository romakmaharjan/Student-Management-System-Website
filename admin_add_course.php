<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_course'])){
    $c_name = $_POST['name'];
    $c_description = $_POST['course_description'];
    $c_image = $_FILES['image']['name'];

    $dst ="./image/".$c_image;

    $dst_db= "image/".$c_image;

    move_uploaded_file($_FILES['image']['tmp_name'], $dst);

    $sql = "INSERT INTO course (name,course_description,image)VALUES ('$c_name','$c_description','$dst_db')";

    $result= mysqli_query($data,$sql);

    if($result){
        header('location:admin_add_course.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
    .dev_deg {
        background-color: skyblue;
        padding-top: 70px;
        padding-bottom: 70px;
        width: 500px;
    }
    </style>
    <?php
    include 'admin_css.php';

    ?>
</head>

<body>
    <?php
    include 'admin_sidebar.php';
    ?>
    <div class="content">
        <center>
            <h1>Add Course</h1>
            <div class="dev_deg">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div>
                        <label>Course Name:</label>
                        <input type="text" name="name">
                    </div>
                    <br>
                    <div>
                        <label>Course Description:</label>
                        <textarea name="course_description"></textarea>
                    </div>
                    <br>
                    <div>
                        <label>Image:</label>
                        <input type="file" name="image">
                    </div>
                    <br>
                    <div>
                        <input type="submit" name="add_course" value="Add Course" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </center>

    </div>
</body>

</html>