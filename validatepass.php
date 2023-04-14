<?php
error_reporting(0);
if(isset($_POST['us_pass'])==true && empty($_POST['us_pass'])==true){
    $us_pass="not empty";
}
if(isset($_POST['us_pass'])==true && empty($_POST['us_pass'])==false){
    $pass=$_POST['us_pass'];
    if(strlen($pass)<6){
        $error="not small than 6";
    }else{

    }
}
?>
<form method="post">

<input type="text" name="us_pass">
<br>
<small style="color: red;"><?php echo $us_pass?></small>
<small style="color:red"><?php echo $error?></small><br>
<input type="submit">
</form>