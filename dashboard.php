<?php
    session_start();
    if(!isset($_SESSION["email"])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row mt-5 pt-5">
            <div class="col-md-4 bg-info rounded p-3">
                <h4>Dashboard</h4>
                <h6>You Are : <?php echo $_SESSION["email"];?></h6>
                <ul class="list-unstyled">
                    <li class="py-2"><a href="#">Home</a></li>
                    <?php
                        
                        if($_SESSION["role"] == "admin"){ 
                            ?>
                        <li class="py-2"><a href="usercontrol.php">Users Info</a></li>
                    <?php
                        }
                    ?>
                    
                    <li class="py-2"><a href="#">Product Add</a></li>
                    <li class="py-2"><a href="#">Product Manage</a></li>
                    <li class="py-2"><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
  <!-- bootstrap script --> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
</body>
</html>