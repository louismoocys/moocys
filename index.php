
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moocys Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="IELTS" />
	<link rel="stylesheet" type="text/css" href="css/simple-sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/circle-progress.js"></script>
<script type="text/javascript" src="js/radar-chart.js"></script>
<script type="text/javascript" src="js/homepage.js"></script>
<script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
    <script type="text/javascript">
      
    </script>
</head>
<body class="index">
        <header class="navg-strip">
            <div class="upperbar">
                    <div class="navg-sub">
                        <ul class="navg-sub-list">
                            
                <?php
session_start();
if (isset($_SESSION['username'])) {
    ?>
			  <li>
            <a  href="student/student_home.php"><?php echo $_SESSION['username'] ?></a>
        </li>
        <li><a href="login/logout.php">退出</a></li>
	<?php
}else{
?>
 <a  href="main_login.php"><img src="icons/login.png" height="20px" width="20px" style="margin-right:5px" ></a><li> <a href="main_login.php" id="loginLink">登陆</a></li> 
    <li><a class="enroll" href="signup.php">现在报名</a></li>
<?php
}?>
              
                        </ul>
                        </div>
            </div>
            <img src="icons/title_icon.png" class="main-logo" alt="moocys icon" height="80" width="80" style="margin-left:10px;position: absolute;top: 33px;">
            <div class="menu-block">
               
                <a href="home/about.php" class="active">
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

                <a href="home/moocys.php" class="active">
                    <div class="menu-block-slice">
                        <span class="menu-block-link">
                            慕课教育
                        </span>
                    </div>
                </a>

                <a href="Home/subscription.php" class="active">
                    <div class="menu-block-slice">
                        <span class="menu-block-link">
                            雅思课程
                        </span>
                    </div>
                </a>

                <a href="index.php" class="active">
                    <div class="menu-block-slice">
                        <span class="menu-block-link">
                            主页
                        </span>
                    </div>
                </a>
            </div>
            <div class="container">
                <div class="navg-main">
                    <center><span class="menu"><img src="images/icon.png" alt="" style="right:30px;" /></span></center>
                    <div class="top-nav">

                       <span class="menu res2" style="white-space:nowrap;display:none;position:fixed">
        <center>
        <div class="responsive-menu">
        <div class="menu-title"><a href="index.php" class="active">主页</a></div>
        <div class="menu-title"> <a href="home/subscription.php">雅思课程</a></div>
        <div class="menu-title"><a href="home/moocys.php">慕课教育</a></div>
        <div class="menu-title"><a href="home/about.php">关于我们</a></div>
        </center>
   
</span>
  
</div>


                    <div class="clearfix"> </div>

                </div>
            </div>

        </header>

        <header class="navg-strip2 dis">
            <div class="container">
                <div class="navg-main">
                    <div class="top-nav">
                        <ul class="res2" style="white-space:nowrap;padding-left:0;">

                            <li><a href="@Url.Action("","Home")" class="active">主页</a></li>
                            <li><a class="scroll" href="#about">雅思课程</a></li>
                            <li><a class="scroll" href="#courses">慕课教育</a></li>
                            <li><a href="/forum">论坛</a></li>
                            <li><a class="scroll" href="#admission">报名</a></li>
                            <li><a class="scroll" href="#contact">联系我们</a></li>
                        </ul>
                    </div>
                    <div class="header-right">
                        <a href="/forum/members/register/" class="enroll-now">现在报名</a>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="clearfix"> </div>

                </div>
            </div>

        </header>
    <div class="banner" id="banner">

        <div class="courses-main">
            <center>
                <div class="">
                    <h2 style="color:white;font-size:40px;font-family:'raleway';font-weight:normal">Don’t just try to pass IELTS.</h2>
                    <p class="banner-title">Master it!</p>
                    <center>
                        <div style="height:2px;width:100px;margin-top:15px;background-color:white;margin-bottom:80px">
                        </div>
                    </center>
                    <p class="banner-p">欢迎来到MOOCYS雅思慕课教育平台。<br><br>想知道我们如何为您量身订制国际化的成才之路，先从15分钟的线上英语评估开始吧！</p>

                </div>
            </center>
            <center>
                <div class="col-md-3 banner-grid"></div>
                <div class="col-md-3 banner-grid">
                    <p></p>
                    <br>
                    <button style="margin:0;" class="course-button" type="button" onclick="window.location.href = 'home/prereg.php'">家长通道</button>
                    <br>
                </div>
                <div class="col-md-3 banner-grid">
                    <p></p>
                    <br>
                    <button style="margin:0;"  class="course-button" type="button" onclick="window.location.href = 'home/prereg.php'">学生通道</button>
                    <br>
                </div>
                <div class="col-md-3 banner-grid"></div>
            </center>
        </div>
    </div>
        <!--banner start here-->

        <!--banner end here-->
        <!--about start here-->
    <br><br>
        <div class="about" id="about">
            <div class="container">
                <div class="about-main">
                    <div class="about-bottom">
                        <center>
                            <div class="col-md-12 ">
                                <div class="main-page-title main-page-title-intro">
                                    <chinese style="font-weight:bold">欢迎来到慕课雅思网</chinese><br>
                                    Welcome to Moocys website<br>
                                    <center>
                                        <div style="height:2px;width:100px;margin-top:15px;background-color:#00749D;">
                                        </div>
                                    </center>
                                </div>
                            
                                <a href="home/about">
                                    <div class="col-lg-6 pallet-img">
                                        <img src="images/front-page/teacher.jpg" alt="" height="350" width="350" style="" class="img-responsive">
                                    </div>

                                    <div class="col-lg-6 pallet-title" style="">
                                        <div class="intro-pallet-titles">
                                            <h1>前考官阵容 </h1><br>
                                            <h2>指点迷津，直捣要害</h2><br>
                                            <p>教授级澳洲雅思前考官团队提供最为权威精简的线上教材，并为每位考生量身定制改进方向，使他们能够迅速抓住学习要领，找出自己的问题。</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="col-lg-6 pallet-title responsive-hide" style="">
                                    <div class="intro-pallet-titles">
                                        <h1>超前教育理念 </h1><br>
                                        <h2>实现数倍于传统教育的效果</h2><br>
                                        <p>MOOCYS引进了全球最先进的慕课理念，中英文对照教材，纯英语同步讲解，闯关式学习模式，带你领略未来教育的高效率！</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 pallet-img">
                                    <img src="images/front-page/innovation.jpg" alt="" height="350" width="350" style="" class="img-responsive">
                                </div>
                                <div class="col-lg-6 pallet-title responsive-show" style="">
                                    <div class="intro-pallet-titles">
                                        <h1>超前教育理念 </h1><br>
                                        <h2>实现数倍于传统教育的效果</h2><br>
                                        <p>MOOCYS引进了全球最先进的慕课理念，中英文对照教材，纯英语同步讲解，闯关式学习模式，带你领略未来教育的高效率！</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 pallet-img">
                                    <img src="images/front-page/clouder.jpg" alt="" height="350" width="350" style="" class="img-responsive">
                                </div>

                                <div class="col-lg-6 pallet-title" style="">
                                    <div class="intro-pallet-titles">
                                        <h1>超级云系统</h1><br>
                                        <h2>随时随地急速传输</h2><br>
                                        <p>利用云技术存储每位学生的学习进度，让你轻松突破空间限制，制定适合自己的学习计划，并建立起属于自己的单词短语库。</p>
                                    </div>
                                </div>

                                    <div class="col-lg-6 pallet-title responsive-hide" style="">
                                        <div class="intro-pallet-titles">
                                            <h1>雅思模拟题库 </h1><br>
                                            <h2>实战演练，学以致用</h2><br>
                                            <p>有针对性的雅思模拟题库，配合前考官教材中的指导，为考生提供无限次练习与尝试的机会，从而达到举一反三以不变应万变的效果。</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pallet-img">
                                        <img src="images/front-page/warehouse.jpg" alt="" height="350" width="350" style="" class="img-responsive">
                                    </div>
                                    <div class="col-lg-6 pallet-title responsive-show" style="">
                                        <div class="intro-pallet-titles">
                                            <h1>雅思模拟题库 </h1><br>
                                            <h2>实战演练，学以致用</h2><br>
                                            <p>有针对性的雅思模拟题库，配合前考官教材中的指导，为考生提供无限次练习与尝试的机会，从而达到举一反三以不变应万变的效果。</p>
                                        </div>
                                    </div>

 </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
                                    


        <!--ab-info end here-->
        <!--services start here-->
   
    <div class="courses" id="courses">

        <div class="courses-main">
            <center>
                <div class="ser-top">
                    <h2 style="color:white;font-size:45px;font-family:'Microsoft JhengHei';font-weight:bold">我们的课程</h2>
                    <p style="color:white;">Below are descriptions of our courses that we offer</p>
                    <center>
                        <div style="height:2px;width:100px;margin-top:15px;background-color:white;margin-bottom:80px">
                        </div>
                    </center>
                </div>
            </center>
            <center>
                <div class="hex_container">
                    <div class="ih-item circle effect2 left_to_right colored hex-left-top">
                        <a href="#">
                            <div class="img"><img src="images/front-page/hex/reading.png" alt="img"></div>
                            <div class="info">
                                <h3>阅读</h3>
                                <p>
                                    高效模块化的阅读教材
                                    Highly effective reading study material
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="ih-item circle effect2 right_to_left">
                        <a href="#">
                            <div class="img"><img src="images/front-page/hex/writing.png" alt="img"></div>
                            <div class="info">
                                <h3>写作</h3>
                                <p>
                                    私人专属考官写作精批
                                    Personalise your reading practice
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="hex_mid">
                        <div class="ih-item circle effect2 left_to_right colored hex-left">
                            <a href="#">
                                <div class="img"><img src="images/front-page/hex/grammar.png" alt="img"></div>
                                <div class="info">
                                    <h3>语法</h3>
                                    <p>
                                        自适应语法学习系统
                                        Adaptive grammar learning system
                                    </p>
                                </div>
                            </a>
                        </div>
                        <img src="images/moocys/hex3.png" width="" height="">
                        <div class="ih-item circle effect2 right_to_left colored hex-right">
                            <a href="#">
                                <div class="img"><img src="images/front-page/hex/listening.png" alt="img"></div>
                                <div class="info">
                                    <h3>听力</h3>
                                    <p>
                                        私人订制式题型练习
                                        Personalise your listening practice
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ih-item circle effect2 left_to_right colored hex-left-bottom">
                        <a href="#">
                            <div class="img"><img src="images/front-page/hex/speaking.png" alt="img"></div>
                            <div class="info">
                                <h3>口语</h3>
                                <p>
                                    考官点拨如何备考口语
                                    Examiner's tips for speaking preparation
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="ih-item circle effect2 right_to_left colored hex-right-bottom">
                        <a href="#">
                            <div class="img"><img src="images/front-page/hex/vocab.png" alt="img"></div>
                            <div class="info">
                                <h3>词汇</h3>
                                <p>
                                    私人专属词库
                                    Personalised vocabulary bank
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
              
                <!-- end normal -->
        

        <div class="hex_container2">
            <img src="images/moocys/hex.png" width="360px" height="320px" class="img-responsive"><br>
            <img src="images/moocys/reading.png" width="50px" height="50px" class=""><br><hex_title>READING</hex_title><br>
            <div class="hex_reading hex">
                解密最为高效地阅读步骤<br>
                点出阅读题中的常见陷阱<br>
                手把手教你如何快速地找答案<br>
                不断更新的权威模拟题库
            </div>
            <br>
            <br>
            <img src="images/moocys/writing.png" width="50px" height="50px" class=""><br><hex_title>WRITING</hex_title><br>
            <div class="hex_writing hex">
                点出最合理有效的文章结构<br>
                教你跳出中国学生的写作怪圈<br>
                帮你找到属于真正自己的改进方向<br>
                前考官线上批改作文
            </div>
            <br>
            <br>
            <img src="images/moocys/speaking.png" width="50px" height="50px" class=""><br><hex_title>SPEAKING</hex_title><br>
            <div class="hex_speaking hex">
                点出最合理有效的文章结构<br>
                教你跳出中国学生的写作怪圈<br>
                帮你找到属于真正自己的改进方向<br>
                前考官线上批改作文
            </div>
            <br>
            <br>
            <img src="images/moocys/listening.png" width="50px" height="50px" class=""><br><hex_title>LISTENING</hex_title><br>
            <div class="hex_listening hex">
                点出最合理有效的文章结构<br>
                教你跳出中国学生的写作怪圈<br>
                帮你找到属于真正自己的改进方向<br>
                前考官线上批改作文
            </div>
            <br>
            <br>
            <img src="images/moocys/vocab.png" width="50px" height="50px" class=""><br><hex_title>VOCABULARY</hex_title><br>
            <div class="hex_vocab hex">
                点出最合理有效的文章结构<br>
                教你跳出中国学生的写作怪圈<br>
                帮你找到属于真正自己的改进方向<br>
                前考官线上批改作文
            </div>
            <br>
            <br>
            <img src="images/moocys/grammar.png" width="50px" height="50px" class=""><br><hex_title>GRAMMAR</hex_title><br>
            <div class="hex_grammar hex">
                点出最合理有效的文章结构<br>
                教你跳出中国学生的写作怪圈<br>
                帮你找到属于真正自己的改进方向<br>
                前考官线上批改作文
            </div>
            <br>
            <br>

        </div>
        </center>
       
    </div>
        </div>
        <!--courses end here-->
        <!--admission start here-->
       <div class="admissions" id="admission">
            <div class="container">
                <div class="admission-main">
                    <div class="admission-top">
                        <h3>一站式提升为国际性人才</h3>
                        <p>Gain a global perspective</p>
                        <center>
                            <div style="height:2px;width:100px;margin-top:5px;background-color:#F0AD1E;">
                            </div>
                        </center>
                    </div>
                    <div class="admission-bottom">
                        <div class="col-md-4 admission-grid">
                            <h3>留学直通车</h3><br>
                            <h4>100%</h4><br>
                            <p>来自澳美英加等地世界名校的Offer以及签证通过率，MOOCYS为每位学员提供最坚实的留学保障！</p>
                        </div>
                        <div class="col-md-4 admission-grid">
                            <h3>国际名企就业</h3><br>
                            <h4>1000</h4><br>
                            <p>个跨国投行以及国际名企就业岗位为MOOCYS年度独享，我们在这里静候每位志向远大的学员来此获取职位一展身手！</p>
                        </div>
                        <div class="col-md-4 admission-grid">
                            <h3>未来发展基金</h3><br>
                            <h4>10000</h4><br>
                            <p>元人民币的最高奖学金发放给每位完成学习任务的年度学员，为他们未来的留学、移民以及就业发展提供第一桶金！</p>
                             </div>
                        <div class="clearfix"> </div>
                    </div>
                    <center>
                    <button class="course-button" type="button" onclick="window.location.href = 'forum/members/register'">立刻报名</button>
                    </center>
                </div>
            </div>
        </div>
        <!--admission end here-->
        <!--testimonal strat here-->
        
        <!--testimonal end here-->
        <!--gallery start here-->
        <div class="gallery" id="gallery">
            <div class="container">
                <div class="gallery-top">
                    <h3>
                        <chinese style="font-size:35px">名人堂</chinese>
                        <br>
                        Hall of Fame
                    </h3>
                    <center>
                        <div style="height:2px;max-width:100px;margin-top:15px;margin-bottom:15px;;background-color:white;">
                        </div>
                    </center>
                </div>
                <div class="gallery-bottom">
                    <div class="col-md-4 gallery-grid">
                        <div class="project-eff">
                            <div id="nivo-lightbox-demo"> <p> <a href="images/front-page/exam_results.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>
                            <img class="img-responsive" src="images/front-page/exam_results.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 gallery-grid">
                        <div class="project-eff">
                            <div id="nivo-lightbox-demo"> <p> <a href="images/front-page/exam_results.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>
                            <img class="img-responsive" src="images/front-page/exam_results.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 gallery-grid">
                        <div class="project-eff">
                            <div id="nivo-lightbox-demo"> <p> <a href="images/front-page/exam_results.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>
                            <img class="img-responsive" src="images/front-page/exam_results.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 gallery-grid">
                        <div class="project-eff">
                            <div id="nivo-lightbox-demo"> <p> <a href="images/front-page/exam_results.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>
                            <img class="img-responsive" src="images/front-page/exam_results.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 gallery-grid">
                        <div class="project-eff">
                            <div id="nivo-lightbox-demo"> <p> <a href="images/front-page/exam_results.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>
                            <img class="img-responsive" src="images/front-page/exam_results.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 gallery-grid">
                        <div class="project-eff">
                            <div id="nivo-lightbox-demo"> <p> <a href="images/front-page/exam_results.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>
                            <img class="img-responsive" src="images/front-page/exam_results.jpg" alt="">
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <br>
            <br>
            <center>
                <img src="icons/home/moocys-symbol.png" height="100px" width="100px">
            </center>
        </div>
        <link rel="stylesheet" type="text/css" href="Content/magnific-popup.css">


        <!--gallery end here-->
        <!--map start here-->

 
        <!--map end here-->
        <!--contaact start here-->
        <div class="contact" id="contact">
            <div class="container">
                <div class="contact-main">
                    <div class="contact-top">
                        <h3>联系我们</h3>
                        <h2>Contact Us</h2>
                        <center>
                            <div style="height:2px;width:100px;margin-top:25px;background-color:#00749D;">
                            </div>
                        </center>
                    </div>
                    <div class="contact-bottom">
                        <div class="col-md-6 contact-left">
                            姓名:
                            <input class="contact-input" type="text" placeholder="姓名" required="">
                            电子邮件:
                            <input class="contact-input" type="text" placeholder="电子邮件" required="">
                            电话:
                            <input class="contact-input" type="text" placeholder="电话" required="">
                        </div>
                        <div class="col-md-6 contact-right">
                            信息:
                            <textarea class="contact-input" placeholder="信息" required=""></textarea>

                        </div>

                        <div class="clearfix"> </div>
                    </div><br>
                    <center><input type="submit" value="发送"></center>
                </div><br>

            </div>
        </div>
        <div class="contact-us-banner">
            <center>
                <div class="contact-button">
                    <a href="home/contact.php">
                        另外联系方式<br>
                        <english>Other Contact Methods</english>
                        <center>
                            <div style="height:2px;width:100px;margin-top:10px;background-color:white;">
                            </div>
                        </center>
                    </a>
                </div>
            </center>
        </div>
        <!--contact end here-->
        <!--footer start here-->
        <div class="footer">
            <div class="container">
                <div class="footer-main">
                    <div class="col-md-2 footer-class">
                        <chinese>
                            <a><h2>主页</h2></a><br>
                            <a><h3>介绍视屏</h3></a><br>
                            <a><h3>高分学生</h3></a><br>
                            <a><h3>联系我们</h3></a><br>
                        </chinese>
                        <br><br>
                        <english>
                            <a><h2>Home</h2></a><br>
                            <a><h3>Introduction Video</h3></a><br>
                            <a><h3>Gallery</h3></a><br>
                            <a><h3>Contact Us</h3></a><br>
                        </english>
                    </div>
                    <div class="col-md-2  footer-class">
                        <chinese>
                            <a><h2>我们的团队</h2></a><br>
                            <a><h3>慕克团队</h3></a><br>
                        </chinese>
                        <br><br>
                        <english>
                            <a><h2>Our Team</h2></a><br>
                            <a><h3>Moocys</h3></a><br>
                        </english>
                    </div>
                    <div class="col-md-2 footer-class">
                        <chinese>
                            <a><h2>我们的课程</h2></a><br>
                            <a><h3>课程比较</h3></a><br>
                            <a><h3>快攻课程</h3></a><br>
                            <a><h3>职业课程</h3></a><br>
                            <a><h3>贵宾课程</h3></a><br>
                        </chinese>
                        <br><br>
                        <english>
                            <a><h2>Courses</h2></a><br>
                            <a><h3>Compare Subscriptions</h3></a><br>
                            <a><h3>Express Course</h3></a><br>
                            <a><h3>Pro Course</h3></a><br>
                            <a><h3>VIP Course</h3></a><br>
                        </english>
                    </div>
                    <div class="col-md-2  footer-class">
                        <chinese>
                            <a><h2>论坛</h2></a><br>
                            <a><h3>最新</h3></a><br>
                        </chinese>
                        <br><br>
                        <english>
                            <a><h2>Forum</h2></a><br>
                            <a><h3>Latest Discussion</h3></a><br>
                        </english>
                    </div>
                    <div class="col-md-2 footer-class">
                        <chinese>
                            <a><h2>联系我们</h2></a><br>
                            <a><h3>悉尼地址</h3></a><br>
                            <a><h3>中国地址</h3></a><br>
                        </chinese>
                        <br><br>
                        <english>
                            <a><h2>Contact Us</h2></a><br>
                            <a><h3>Sydney Address</h3></a><br>
                            <a><h3>China Address</h3></a><br>
                            <a><h3>VIP Course</h3></a><br>
                        </english>
                    </div>
                    <div class="col-md-2 footer-class">
                        <button class="footer-button" type="button" onclick="window.location.href = 'home/subscription'"><img src="icons/home/footer-courses.png" height="20px" width="20px"> <span> 报名 Courses</span></button>
                        <button class="footer-button" type="button" onclick="window.location.href = 'home/about'"><img src="icons/MOOCYS_logo_white_transparent.png" height="20px" width="25px"> <span> 关于我们 Moocys</span></button>
                        <button class="footer-button" type="button" onclick="window.location.href = 'forum'"><img src="icons/home/footer-forum.png" height="20px" width="20px"> <span> 论坛 Forum</span></button>
                        <button class="footer-button" type="button" onclick="window.location.href = 'forum/members/logon'"><img src="icons/home/footer-login.png" height="20px" width="20px"> <span> 登陆 Login</span></button>
                        <button class="footer-button" type="button" onclick="window.location.href = 'home/contact'"><img src="icons/about/earth-icon.png" height="20px" width="20px"> <span> 联系我们 Contact</span></button>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--footer end here-->
        <!--copyright start here-->
        <div class="copyright">
            <div class="container">
                <div class="copy-main">
                    <p>© 2015 MOOCYS. All rights reserved | Design by Michael "Exault" Eselgroth and Louis "The Chosen" Zhang</p>
                </div>
                <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

            </div>
        </div>

        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


        <script>
         

        </script>
</body>
</html>
