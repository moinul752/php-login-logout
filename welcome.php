<?php
 $uname = "admin";
 $pwd = "admin";

 session_start();

 if(isset($_SESSION['uname'])){
    echo "<h1>Wellcome ".$_SESSION['uname']."</h1>";
    echo "<a href='product.php'>Product</a><br>";
    echo "<br><a href='login.php'><input type=button value=logout name=logout></a>";
 }
 else{
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
        $_SESSION['uname']=$uname;
        echo "<script>location.href='welcome.php'</script>";
    }
    else{
        echo "<script>alert('username or password is incorrect!')</script>";
        echo "<script>location.href='login.php'</script>";
    }
 }

?>