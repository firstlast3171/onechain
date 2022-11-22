<?php
if(isset($_POST['login'])){
    $conn = mysqli_connect("localhost","root","","fornowupload");
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $sqli = "SELECT * FROM `users` WHERE name='$name' and password ='$pass'";
    $result=mysqli_query($conn,$sqli);
     $main_result = $result->fetch_assoc();
     if($main_result){
        setcookie("userID",$main_result['id'],time()+10000000000,"/");
        header("location: admin41043171.php");
     }else{
        echo '<h1>Something is Wrong!! Please check your password or email</h1>';
     }

}

?>