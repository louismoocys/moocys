<?php require "../login/loginheader.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student home - moocys</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="IELTS" />
	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../js/bindicator.js"></script>
<script type="text/javascript" src="../js/circle-progress.js"></script>
<script type="text/javascript" src="../js/radar-chart.js"></script>
<script type="text/javascript" src="../js/homepage.js"></script>
<script type="text/javascript" src="../js/nivo-lightbox.min.js"></script>
<script type="text/javascript" src="../js/ani.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/simple-sidebar.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript">
       
    </script>
</head>
<body class="student_home_body">
    <div class="upperbar" style="position:fixed;z-index:999">
        <div class="navg-sub">
            <ul class="navg-sub-list">

                            
                <?php
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
    <div class="navg-strip logged-menu" style="">
        <img src="../icons/title_icon.png" class="main-logo" alt="moocys icon" height="80" width="80" style="margin-left:10px">

        <a href="#menu-toggle" class="menu-toggle " id="menu-toggle"><img class="student-home-toggle-menu" src="../images/icon.png"></a>
                    <div class="menu-block" style="top:0px">
                        <a href="Forum" class="active">
                            <div class="menu-block-slice" style="">
                                <span class="menu-block-link">
                                    论坛
                                </span>
                            </div>
                        </a>
                        <a href="../student/student_home.php" class="active">
                            <div class="menu-block-slice">
                                <span class="menu-block-link">
                                    个人主页
                                </span>
                            </div>
                        </a>
                        <a href="../" class="active">
                            <div class="menu-block-slice" style="width:150px;">
                                <span class="menu-block-link">
                                    MOOCYS主页
                                </span>
                            </div>
                        </a>
                       
                    </div>
        <span class="menu res2" style="white-space:nowrap;display:none;position:fixed">
            <center>
                <div class="responsive-menu">
                    <div class="menu-title"><a href="../index.php" class="active">MOOCYS主页</a></div>
                    <div class="menu-title"> <a href="student_home.php">个人主页</a></div>                  
                </div>
            </center>
           
        </span>
                  
                    
                <div class="header-right">
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
</div>
 