<?php include('C:\xampp\htdocs\ForNowUpload\Recorces\indexResorces\choice.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Recorces/style/style.css">
    <title>OneChange</title>
</head>
<body>
<div class="main-box">

<div id="home">


<div class="header-main">
    <div class="header">
        <div class="logo">
            <h2>
                One<span>Chain</span> 
            </h2>
        </div>

        <div class="categories">
            <ul>
                <li> <a href="#home">Home</a> </li>
                <li> <a href="#makemoney">MakeMoney</a> </li>
                <li> <a href="#contact">contact</a> </li>
                <li> <a href="#about">about</a> </li>
            </ul>
        </div>
    </div>
    </div>

    <div class="content">
        <div class="ad-one">
            <div class="ad-banner">
                    This is Ads banner
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi illum fugit, at deserunt eum ratione doloremque sed temporibus quis exercitationem, aliquid ipsam ea? Sed aperiam corrupti accusantium maiores vero nobis.</p>
            </div>
        </div>

        <div class="main">
            <div class="num">
                <h1>
                   <span>To</span>day <span>Se</span>lect<span>ion</span>
                </h1>
                <p style="color: green ; font-weight:900;">Our Best Choice</p>
              <?php echo choiced() ?>
            </div>

            <div class="best-choice" style="background: gold; width:200px;font-weight:bold ;padding: 10px;"  >
                <p>Our Best Choice</p>
                <!-- <p>AM- <span>01,50,60</span></p>
                <p>PM- <span>23,25,27</span></p> -->
                <?php
                function best(){
                    $mysqli = mysqli_connect("localhost","root","","fornowupload");
                    $selection = "SELECT * FROM `best`";
                    $getresult = mysqli_query($mysqli,$selection);
                    $best = '';
                    while($bestArr = $getresult->fetch_assoc()){
                        $best .= '<p>AM- <span>'.$bestArr['fbest'].'</span></p>
                        <p>PM- <span>'.$bestArr['sbest'].'</span></p>';
                    }
                    return $best;
                }
                echo best();
                ?>
            </div>
        </div>

        <div class="ad-two">
        <div class="ad-banner">
                    This is Ads banner
                    <p>Lorem, ipsum dolor.lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptatem magnam quos eum! Cupiditate, numquam fugit! Reprehenderit doloremque, neque alias perferendis ratione eveniet architecto, consequatur eum necessitatibus eaque voluptatem obcaecati!</p>
            </div>
        </div>

    </div>
    </div>

    <div class="footer">
                <div class="footer-inbox">
                        <div class="first-box">
                            <h2>One <span>Chain</span>  </h2>
                            <h3>Contact us on</h3>
                            <ul>
                                <li><a href="">Messenger</a></li>
                                <li><a href="">Viber</a></li>
                                <li><a href="">Instagram</a></li>
                                <li><a href="">WeChat</a></li>
                            </ul>
                        </div>

                        <div class="second-box">
                            <h2>You can find us on</h2>
                            <ul>
                                <li> <a href="">Facebook</a></li>
                                <li><a href="">Instagram</a></li>
                                <li><a href="">Youtube</a></li>
                                <li><a href="">SnapChat</a></li>
                            </ul>
                        </div>
                </div>
    </div>


</div>
</body>
</html>