<?php include('C:\xampp\htdocs\ForNowUpload\Recorces\adminResorces\updateNum.php') ?>
<?php include('C:\xampp\htdocs\ForNowUpload\Recorces\adminResorces\updatebest.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\ForNowUpload\Recorces\style\adminStyle.css">
    <title>adminPage</title>
</head>
<body>

    <div class="main">
        
<div class="onechain">
        <?php
        function myfunction(){
        $conn = mysqli_connect("localhost","root","","fornowupload");
        $result = "SELECT * FROM `choice`";
        $numSql = mysqli_query($conn,$result);
        $num = '';
        while($numArr = $numSql->fetch_assoc()){
        $num .= '
        <h1>Update Number    <a href="admin41043171.php?update='.$numArr['id'].'">Change Now</a></h1>
        ';}return $num;}echo myfunction(); ?>
            <form action="#" method="POST">
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <input type="text" placeholder="Update-Number" name="num" value="<?php echo $num?>" class="value">
            <input type="submit" value="Update" class="sub" name="update">
            </form><br>
        </div>
            <div class="best">
                <?php 
                function ourbest(){
                    $conn = mysqli_connect("localhost","root","","fornowupload");
                    $result = "SELECT * FROM `best`";
                    $numSql = mysqli_query($conn,$result);
                    $best = '';
                    while($bestArr=$numSql->fetch_assoc()){
                        $best .= '
                        <h1>Update Best    <a href="admin41043171.php?updatebest='.$bestArr['id'].'">Change Now</a></h1>
 
                        ';
                    };
                    return $best;
                }
                echo ourbest();
                
                ?>
                        <form action="#" method="POST">
                        <input type="hidden" value="<?php echo $id ?>" name="idbest">
                        <input type="text" placeholder="Update-Number" name="fbest" value="<?php echo $fbest?>" class="value">
                        <input type="text" placeholder="Update-Number" name="sbest" value="<?php echo $sbest?>" class="value">
                        <input type="submit" value="Update" class="sub" name="updatebest">
                        </form>
            </div>


    </div>
</body>
</html>