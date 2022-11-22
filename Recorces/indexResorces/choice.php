<?php
function choiced(){
        $conn = mysqli_connect("localhost","root","","fornowupload");
        $result = "SELECT * FROM `choice`";
        $numSql = mysqli_query($conn,$result);
        $num = '';

        while($numArr = $numSql->fetch_assoc()){
            $num = '<h1 class="choosed">'.$numArr['num'].'</h1>';
        }
        return $num;
}


?>