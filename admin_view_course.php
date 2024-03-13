<?php
session_start();
error_reporting(0);

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

$sql = "SELECT * FROM course";
$result=mysqli_query($data,$sql);

if($_GET['course_id'])
{
    $c_id=$_GET['course_id'];
    $sql2="DELETE FROM course WHERE id='$c_id'";
    $result2=mysqli_query($data,$sql2);

    if($result2)
    {
        header('location:admin_view_course.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php
    include 'admin_css.php';

    ?>
    <style>
    /* table {
        border: 1px solid black;
    } */

    .table_th {
        padding: 20px;
        font-size: 20px;
        border: 1px solid black;
    }

    .table_td {
        padding: 20px;
        background-color: skyblue;
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <?php
    include 'admin_sidebar.php';
    ?>
    <div class="content">
        <center>
            <h1>View All Courses Data</h1>
            <table>
                <tr>
                    <th class="table_th">Course Name</th>
                    <th class="table_th">Course Description</th>
                    <th class="table_th">Image</th>
                    <th class="table_th">Delete</th>
                    <th class="table_th">Update</th>
                </tr>
                <?php
                while($info=$result->fetch_assoc())
                { ?>
                <tr>
                    <td class="table_td">
                        <?php echo "{$info['name']}" ?>
                    </td>
                    <td class="table_td">
                        <?php echo "{$info['course_description']}" ?>
                    </td>
                    <td class="table_td">
                        <img src="<?php echo "{$info['image']}" ?>" alt="" width="100px">
                    </td>
                    <td class="table_td">
                        <?php
                        echo "
                        <a onClick= \"javascript:return confirm('are you sure to delete this');\" class='btn btn-danger' href='admin_view_course.php?course_id={$info['id']}'>
                        Delete
                        </a>";
                        ?>
                    </td>
                    <td class="table_td">
                        <?php
                        echo "
                        <a class='btn btn-success' href='admin_update_course.php?course_id={$info['id']}'>Edit</a>
                        ";
                        ?>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </center>

    </div>
</body>

</html>