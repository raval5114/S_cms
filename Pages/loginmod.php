<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .login-control
        {
            margin: auto;
            /* padding: auto; */
            margin-top: 30px;
            padding-bottom: 60px;
            width:auto;
            height: 320px;
            width: 420px;
        }
        .login
        {
            margin-top: 40px;
            padding: auto;
            margin: auto;
            display: flex;
            width: 420px;
            height:520px;
            flex-direction: column;
            background-color: gray;
            border-radius: 20px;
        }
        
        .title  
        {
            margin: 30px;
            display: flex;
            justify-content: center;
        }
        form
        {
         
            margin: auto;
            padding: auto;
            width: 220px;
        }
    </style>
</head>
<body>
       <div class="login-control"> 
            <div class="login">
                <div class="title">
                    <h1>Login-Page</h1>
                </div>
                <form action="" class="form" method="get">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name"id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <br>
                    <div class="mx-auto p-auto">
                        <input class="btn btn-primary" style="margin-left:100px;" type="submit" name="submit" value="Login">
                    </div>
                </form>   
                <?php
                session_start();
        include("database_config.php");
        if(isset($_GET["submit"]))
        {
            $name=$_GET["name"];
            $password=$_GET["password"];
            $que="select 'name', 'password' from stud
            where name='$name' and password='$password'";
            $result=mysqli_query($con,$que);
            $matched_rows=mysqli_num_rows($result);
            if($name==null && $password==null)
            {
                echo"Enter Name and Password";
            }
            elseif($matched_rows > 0)
            {
                $_SESSION["name"]=$name;
                header("location:Hompage.php");
            }
            else
            {
                echo"invalid username or password";
                echo"if you forget your password contact the lead faculty";
            }
        }
        ?> 
        </div>
        </div>

</body>
</html>