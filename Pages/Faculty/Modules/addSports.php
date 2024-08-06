<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Sports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="Container md" style="margin: 100px;">
        <h2 class="text-center" style="font-size: 120px;">Adding Sports</h2>
    </div>
    <div class="form-control" class="Container bg-Info" style="margin:auto;margin-top:120px;padding:auto;width:fit-content;">
        <form action="" method="GET">
            <table class="table">
                <tr>
                    <th><label for="Sports-name">Sports Name:</label></th>
                    <td><input type="text" name="sportsname" required></td>
                </tr>
                <tr>
                    <th><label for="Sports-name">Date of registration:</label></th>
                    <td><input type="text" name="d_o_r" required></td>
                </tr>
                <tr>
                    <th><label for="Sports-name">Last Date of Registration:</label></th>
                    <td><input type="text" name="ld_or" required></td>
                </tr>
                <tr>
                    <th><label for="Sports-name">Department:</label></th>
                    <td><input type="text" name="dept" required></td>
                </tr>
                <tr>
                    <th><label for="Sports-name">For:</label></th>
                    <td><select name="gender" id="" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Both" selected>Both</option>
                    </select></td>
                </tr>
                <tr>
                    <td><input type="submit" class="btn btn-primary" value="Submit" style="margin-left:120px"/></td>
                </tr>
            </table>
        </form>
        <?php
            include("database_config.php");
            
                $sportsname = $_GET["sportsname"];
                $dor = $_GET["d_o_r"];
                $l_dor=$_GET["ld_or"];
                $dept = $_GET["dept"];
                $gender = $_GET["gender"];     
                $que = "INSERT INTO `sports`(`s_name`, `date of registration`, `last date of registration`, `department`, `Gender`) VALUES ('$sportsname','$dor','$l_dor','$dept','$gender')";
                mysqli_query($con,$que);
        ?>
    </div> 
</body>
</html>
<?php
    
?>