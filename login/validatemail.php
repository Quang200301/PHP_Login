<?php
error_reporting(0);
if(isset($_POST['us_email'])==true && empty($_POST['us_email'])==true){
    echo"not empty";
}

if(isset($_POST['us_email'])==true && empty($_POST['us_email'])==false){
    $email=$_POST['us_email'];
    if(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
        $error= 'that\'s not a valid email address';
    }else{
    }
}
?>




<form method="post">
    <input type="text" name="us_email" /><br>
    <small style="color:red"><?php echo $error ?></small><br>
    <input type="submit" />

</form>

