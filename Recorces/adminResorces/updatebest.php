<?php
$fbest ='';
$sbest ='';
$mysqli = mysqli_connect("localhost","root","","fornowupload");
if(isset($_GET['updatebest'])){
    $id = $_GET['updatebest'];
    $result = $mysqli->query("SELECT * FROM `best` WHERE id=$id") or die($mysqli->error);
    $bestRow = $result->fetch_array();
    $fbest = $bestRow['fbest'];
    $sbest = $bestRow['sbest'];

}

?>

<?php

$mysqli = mysqli_connect("localhost","root","","fornowupload");
if(isset($_POST['updatebest'])){
    $idbest = $_POST['idbest'];
    $fbest = $_POST['fbest'];
    $sbest = $_POST['sbest'];
    $mysqli->query("UPDATE `best` SET fbest='$fbest',sbest='$sbest' WHERE id='$idbest'") or die($mysqli->error);
}
?>
