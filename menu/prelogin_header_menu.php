
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About MOOCYS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="IELTS" />
	
	<link rel="stylesheet" type="text/css" href="../css/simple-sidebar.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../js/bindicator.js"></script>
<script type="text/javascript" src="../js/circle-progress.js"></script>
<script type="text/javascript" src="../js/radar-chart.js"></script>
<script type="text/javascript" src="../js/homepage.js"></script>
<script type="text/javascript" src="../js/nivo-lightbox.min.js"></script>
<script type="text/javascript" src="../js/ani.js"></script>
    <script type="text/javascript">
       
    </script>
</head>
<body>
    <header class="navg-strip">
        <div class="upperbar">
            <div class="navg-sub">
                <ul class="navg-sub-list">

                                
                <?php
session_start();
if (isset($_SESSION['username'])) {
    ?>
			  <li>
            <a  href="/moocys/student/student_home.php"><?php echo $_SESSION['username'] ?></a>
        </li>
        <li><a href="../login/logout.php">退出</a></li>
	<?php
}else{
?>
 <a  href="../main_login.php"><img src="../icons/login.png" height="20px" width="20px" style="margin-right:5px" ></a><li> <a href="../main_login.php" id="loginLink">登陆</a></li> 
    <li><a class="enroll" href="../signup.php">现在报名</a></li>
<?php
}?>

                </ul>
            </div>
        </div>
        <img src="../icons/title_icon.png" class="main-logo" alt="moocys icon" height="80" width="80" style="margin-left:10px;position: absolute;top: 33px;">
        <div class="menu-block">

            <a href="../home/about.php" class="active">
                <div class="menu-block-slice">
                    <span class="menu-block-link">
                        关于我们
                    </span>
                </div>
            </a>

            <a href="/forum" class="active">
                <div class="menu-block-slice">
                    <span class="menu-block-link">
                        论坛
                    </span>
                </div>
            </a>

            <a href="../home/moocys.php" class="active">
                <div class="menu-block-slice">
                    <span class="menu-block-link">
                        穆课教育
						</span>
                </div>
            </a>

            <a href="../home/subscription.php" class="active">
                <div class="menu-block-slice">
                    <span class="menu-block-link">
                        雅思课程
                    </span>
                </div>
            </a>

            <a href="../index.php" class="active">
                <div class="menu-block-slice">
                    <span class="menu-block-link">
                        主页
                    </span>
                </div>
            </a>
        </div>
        <div class="container">
            <div class="navg-main">
                <div class="top-nav">
                    <center><span class="menu"><img src="../images/icon.png" alt="" style="right:30px;" /></span></center>
                    <span class="menu res2" style="white-space:nowrap;display:none;position:fixed">
                        <center>
                            <div class="responsive-menu">
                                <div class="menu-title"><a href="../index.php" class="active">主页</a></div>
                                <div class="menu-title"> <a href="subscription.php">雅思课程</a></div>
                                <div class="menu-title"><a href="moocys.php">穆课教育</a></div>
                                <div class="menu-title"><a href="about.php">关于我们</a></div>
                            </div>
                        </center>
                        
                    </span>
                </div>


                <div class="clearfix"> </div>

            </div>
        </div>

    </header>