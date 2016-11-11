<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:student/student_home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

	<link rel="stylesheet" type="text/css" href="css/simple-sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>
  <div class="fullwidthlayout">
  
   <div class="col-md-6 col-md-offset-3">
     <div class="mainlogonform">
	 
     <center>       <h3 class="logon_title"><img width="50px" height="50px" style="margin:0 10px 5px -10px" src="images/small-icon-blue-round.png" />Log in</h3>     </center>   
<center>
      <form class="form-signin logon-input" name="form1" method="post" action="login/checklogin.php">
       
       <label for="myusername">用户名</label>
	   
        <input name="myusername" id="myusername" type="text" class="form-control" placeholder="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} else{echo 'Username';} ?>" autofocus>
		
		 <label for="mypassword">密码</label>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
 
        <input type="checkbox" id="remember_me" name="remember_me" value="1" /> <label for="remember_me" style="float:none;width:auto;margin:0px;padding: 0px 0px 10px 0px;">记住我</label>
		
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top:20px;">登陆</button>
<a href="signup.php">注册</a> 或者 <a href="login/lost.php">忘记密码了吗？</a>
<br><br>
        <div id="message"></div>
      </form>
</center>
    </div>
    </div> <!-- /container -->
 </div> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>

  </body>
</html>
