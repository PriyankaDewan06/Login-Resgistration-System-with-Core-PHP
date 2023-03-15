<?php
    
    class Users{

        function insertUser($allData){
            $con = new mysqli("localhost","root","","day30");
            $userName = $allData["userName"];
            $email= $allData["email"];
            $role = $allData["role"];
            $password=$allData["password"];
            $cpassword=$allData["cpassword"];
            if($password != $cpassword){
                return '<div class="alert alert-danger"><strong>Error:</strong>Password Not match</div>';
            }
            else{
                $password = md5($password);
                $sql = $con->query("INSERT INTO tbl_users(userName,email,role,password,status)VALUES('$userName','$email','$role','$password','2')");
            if($sql){
                return '<div class="alert alert-success"><strong>Success:</strong>Registration Completed</div>';
            }
            else{
                return '<div class="alert alert-danger"><strong>Error:</strong>Registration not Completed Not match</div>'; 
            }
            }
        }
    
    function login($allData){
        $con = new mysqli("localhost","root","","day30");
        $userName = $allData["userName"];
        $password = $allData["password"];
        $password = md5($password);
        $sql = $con->query("SELECT * FROM tbl_users WHERE(userName='$userName' OR email='$userName') AND password='$password' AND status ='1'");
    
        if($sql->num_rows>0){
            $data = $sql->fetch_assoc();
            session_start();
            $_SESSION["userName"] = $data["userName"];
            $_SESSION["email"] = $data["email"];
            $_SESSION["role"] = $data["role"];
            header("location:dashboard.php");
        } 
        else{
            return '<div class="alert alert-danger"><strong>Error:</strong>User name/Email or Password is Incorrect</div>'; 
        }
   
    }
}