<?php 
    include("database_config.php");
    $que="select * from sports";
    $res=mysqli_query($con,$que);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Announcement </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include("navbar_Hp.php");?>
    <div class="new_anouncement Container">
        <table class="table">
            <tr class="col">
                <th class="row"><h3>Sport Name</h3></th>
                <th><h3>Date of Registration</h3></th>
                <th><h3>Last Date of Registration</h3></th>
                <th><h3>Department</h3></th>
                <td><h3>Gender</h3></td>
                <td> </td>
            </tr>
            <?php 
                $style = "\"btn btn-primary\"";
               if(mysqli_num_rows($res)>0)
               {
                   while($rows=mysqli_fetch_assoc($res))
                   {
                    echo "<tr>
                    <th><h3>".$rows["s_name"]."</h3></th>
                    <th><h3>".$rows["date of registration"]."</h3></th>
                    <th><h3>".$rows["last date of registration"]."</h3></th>
                    <th><h3>".$rows["department"]."</h3></th>
                    <td><h3>".$rows["Gender"]."</h3></td>
                    <td><button class=".$style.">Apply</button </td>
                    </tr>
                    "
                    ;             
                   }
               }               
            ?>
        </table>
    </div>
</body>
</html>