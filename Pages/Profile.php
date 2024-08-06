<?php
include("database_config.php");
session_start();
$name=$_SESSION["name"];
$que="SELECT `name`, `email`, `password`, `enrollment`, `faculty`, `dept`, `programe` FROM `stud` WHERE name = '$name'";
$res=mysqli_query($con,$que);
$dis_res=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        .profile
        {
            margin-top:220px;
            
            background-color: white;
        }
    </style>
</head>
<body class="bg-primary">
<?php include("navbar_Hp.php"); ?>
<div class="profile ">
    <div class="profile-control container">
        <div class="title "><h1 class="heading display-1 text-center">Profile</h1></div>
        <div class="profile-info text-center">
            <table class="table">
                <tr scope="col">
                    <th scope="row gap column-gap-3"><h3 class="">Name:</h3></th>
                    <td scope="row"><h3><?php echo $dis_res["name"];?><h3></td>
                </tr>
                
                <tr scope="col">
                    <th scope="row gap column-gap-3"><h3>E-mail:</h3></th>
                    <td scope="row"><h3><?php echo $dis_res["email"];?><h3></td>
                </tr>
                
                <tr scope="col">
                    <th scope="row gap column-gap-3"><h3>Password:</h3></th>
                    <td scope="row"><h3><?php echo $dis_res["password"];?><h3></td>
                </tr>
                
                <tr scope="col">
                    <th scope="row gap column-gap-3"><h3>Enrollment:</h3></th>
                    <td scope="row"><h3><?php echo $dis_res["enrollment"];?><h3></td>
                </tr>
                
                <tr scope="col">
                    <th scope="row gap column-gap-3"><h3>Faculty:</h3></th>
                    <td scope="row"><h3><?php echo "Faculty of ".$dis_res["faculty"];?><h3></td>
                </tr>
                <tr scope="col">
                    <th scope="row gap column-gap-3"><h3>Department:</h3></th>
                    <td scope="row"><h3><?php echo $dis_res["dept"];?><h3></td>
                </tr>
                <tr scope="col">
                    <th scope="row gap column-gap-3"><h3>Programe:</h3></th>
                    <td scope="row"><h3><?php echo $dis_res["programe"];?><h3></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php include("Footer.php");?>
</body>
</html>