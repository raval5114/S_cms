<?php 
    session_start();
    include("database_config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form action="" class="form-control-stud" method="post">
    <table class="table" style="margin: auto; padding:auto;">
        <tr>
           <th>
                <label class="label">Enter Student Name:</label>
            </th>
            <td>
                <input type="text" name="name" id="" required>
            </td>
        </tr>
        <tr>
            <th>
                <label class="label">Email:</label>            
            </th>
            <td>
            <input type="email" name="email" id="" required>
            </td>
        </tr>
        <tr>
            <th><label class="label">Enter Password:</label></th>
            <td><input type="password" name="password" id="" required></td>
        </tr>
        <tr>
            <th><label class="label">Enrollment no:</label></th>
            <td><input type="text" name="enroll" id="" required></td>
        </tr>
        <tr>
            <th><label class="label">Enter name of faculty:</label></th>
            <td><input type="text" name="faculty" id="" required></td>
        </tr>
        <tr>
            <th><label class="label">Enter Name of Department:</label></th>
            <td><input type="text" name="dept" id="" required></td>
        </tr>
        <tr>
        <th><label class="label">Enter Name of the Program</label></th>
        <td><input type="text" name="program" id="" required></td>
        </tr>
    </table>
    <tr>
        <input type="submit" value="Submit" name="submit" style="margin:12px; margin-left:120px" required>
    </tr>
</form>
</body>
</html>

<?php
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $enroll=$_POST["enroll"];
        $faculty=$_POST["faculty"];
        $dept=$_POST["dept"];
        $program=$_POST["program"];
        $que="INSERT INTO `stud`(`name`, `email`, `password`, `enrollment`, `faculty`, `dept`, `programe`) VALUES ('$name','$email','$password','$enroll','$faculty','$dept','$program')";
       if($name!=null && $email!=null && $password != null && $enroll!= null && $faculty != null && $dept != null && $program != null)
       {
            if(mysqli_query($con,$que))
            {
                echo "One student added!!";
            }
        } 
    }
?>