<?php
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5 pt-5">
            <div class="col-md-5 offset-md-3 bg-info rounded p-3">
                <?php
                include "users.php";
                 $user = new Users;
                    if (isset($_POST["register"])){
                       echo $user->insertUser($_POST);
                    }
                ?>
                <h4>User Registration Form</h4>
                
                <form method="POST">
                    <div class="form-group mt-3">
                     <label for="userName"> User Name</label> 
                     <input type="text" name="userName" id="userName" class="form-control">  
                    </div>
                    <div class="form-group mt-3">
                     <label for="email"> Email</label> 
                     <input type="text" name="email" id="email" class="form-control">  
                    </div>
                    <div class="form-group mt-3">
                     <label for="role"> Role</label> 
                     <select name="role" id="role" class="form-control">
                        <option value="User">User</option>
                        <option value="Vendor">Vendor</option>
                     </select>  
                    </div>
                    <div class="form-group mt-3">
                     <label for="password"> Password</label> 
                     <input type="password" name="password" id="password" class="form-control">  
                    </div>
                    <div class="form-group mt-3">
                     <label for="cpassword"> Confirm Password</label> 
                     <input type="password" name="cpassword" id="cpassword" class="form-control">  
                    </div>
                    <button class="btn btn-primary mt-3" name="register">Register</button>
                    <p>Already a member? <a  href="login.php">LogIn here</a></p>
                </form>
            </div>
        </div>
    </div>
    <!-- bootstrap script --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>