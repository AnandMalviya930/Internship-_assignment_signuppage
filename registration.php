<?php 
require_once ('config.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registration form</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">      
    </head>
    <body>
        <div>
            <?php 
            if(isset($_POST['submit'])){
                $name        = $_POST['name'];
                $email       = $_POST['email'];
                $password    = $_POST['password'];
                $contact     = $_POST['contact'];
                $City        = $_POST['City'];
                
                $sql="INSERT INTO users (name,email,password,contact,City) VALUES(?,?,?,?,?)";
                $stmtinsert = $db->prepare($sql);
                $result = $stmtinsert->execute([$name,$email,$password,$contact,$City]);
                if($result){
                    echo 'Successfully registered';
                }else{
                    echo 'Check the data once again';
                }
                     
            }
            ?>
        </div>
        
        <div>
            <form action="registration.php" method="post">
                <div class="container">
                    <h1>Signup Form</h1>
                    <p>Fill up the signup form</p>
                    <hr class="mb-3">
                    <label for="Name"><b>Enter Name</b></label>
                    <input class="form-control" type="text" id="name" name="name" required>.
                    
                    <label for="email"><b>Enter Email</b></label>
                    <input class="form-control" type="email" id="email" name="email" required>
                    
                    <label for="password"><b>Enter password</b></label>
                    <input class="form-control" type="password" id="password" name="password" required>
                    
                    <label for="contact"><b>Enter Contact number</b></label>
                    <input class="form-control" type="number" id="contact" name="contact" required>
                    
                    <label for="City"><b>Enter City</b></label>
                    <input class="form-control" type="text" id="City" name="City" required>
                
                     <hr class="mb-3">
                     
                     <input class="btn btn-danger"type="submit" id="register" name="submit" value="Sign-Up">                    
                </div>
            </form>
        </div>

</body>
</html>