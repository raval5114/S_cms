<div class="bg-primary d-flex flex-column p-5 " style="margin:auto;margin-top: 220px; padding:auto; width:620px;border-radius: 13px;">
    <div class="Heading text-center">
        <h1>Login</h1>
    </div>    
    <div class="login-control " style="margin:auto; padding:auto; width: 430px;">
        <form action="" class="Container-md" method="get" >
        <div class="form-floating mb-3">
            <input type="type" class="form-control" name="name" id="floatingInput" placeholder="Enter Username">
            <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="submit" name="submit" class="btn btn-info" value="Submit" style="margin:auto; margin-top:20px; margin-left:150px; padding:auto;">
            </div>
            <?php
                session_start();
        include("Modules/database_config.php");
        if(isset($_GET["submit"]))
        {
            $name=$_GET["name"];
            $password=$_GET["password"];
            $que="select 'name', 'password' from faculty
            where name='$name' and password='$password'";
            $result=mysqli_query($con,$que);
            $matched_rows=mysqli_num_rows($result);
            if($name==null && $password==null)
            {
                echo"Enter Name and Password";
            }
            elseif($matched_rows > 0)
            {
                $_SESSION["fac_name"]=$name;
                header("location:Pages/Faculty/fac_Hompage.php");
            }
            else
            {
                echo"invalid username or password";
                echo"if you forget your password contact the lead faculty";
            }
        }
        ?> 
        </form>
    </div>
</div>