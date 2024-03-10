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

$sql = "SELECT * FROM teacher";
$result=mysqli_query($data,$sql);
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
            <h1>View All Teacher Data</h1>
            <table>
                <tr>
                    <th class="table_th">Teacher Name</th>
                    <th class="table_th">About Teacher</th>
                    <th class="table_th">Image</th>
                </tr>
                <?php
                while($info=$result->fetch_assoc())
                { ?>
                <tr>
                    <td class="table_td">
                        <?php echo "{$info['name']}" ?>
                    </td>
                    <td class="table_td">
                        <?php echo "{$info['description']}" ?>
                    </td>
                    <td class="table_td">
                        <img src="<?php echo "{$info['image']}" ?>" alt="" width="100px">
                    </td>
                </tr>
                <?php } ?>
            </table>
        </center>

    </div>
</body>

</html>