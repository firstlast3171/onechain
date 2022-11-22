<?php
$num='';
$mysqli = mysqli_connect("localhost","root","","fornowupload");
if(isset($_GET['update'])){
    $id=$_GET['update'];
    $result=$mysqli->query("SELECT * FROM `choice` WHERE id=$id") or die($mysqli->error);
            $updateRow = $result->fetch_array();
            $num= $updateRow['num'];
}

?>

<?php

$mysqli = mysqli_connect("localhost","root","","fornowupload");
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $num = $_POST['num'];
    $mysqli->query("UPDATE `choice` SET num='$num' WHERE id='$id'") or die($mysqli->error);
}
?>







