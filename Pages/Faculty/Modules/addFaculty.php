<?php
    include("database_config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Faculty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="Container" style="margin: auto; padding:auto; width:520px;">

        <div class="Heading">
            <h1>Adding Faculty</h1>
        </div>
        <div class="Container">
        <form class="form-control" method="post">
        <table class="table">
            <tr>
                <th>
                <label for="" class="label">Enter Name:</label>
                </th>
                <td>
                <input type="text" name="name" id="" required>
                </td>
            </tr>
            <tr>
                <th>
                <label for="" class="label">Enter Email:</label>
                </th>
                <td>
                <input type="email" name="email" id="" required>
                </td>
            </tr>
            <tr>
                <th>
                <label for=""> Enter Password:</label>
                </th>
                <td>
                <input type="password" name="password" id="" required>
                </td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-primary" value="submit" name="submit" required></td>  
            </tr>
        </table>
        
    
    
</form>

        </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $que="INSERT INTO `faculty`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        if(mysqli_query($con,$que))
        {
            echo" Faculty Added";
        }
    }

?>