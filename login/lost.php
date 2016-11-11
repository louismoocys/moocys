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
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

	<link rel="stylesheet" type="text/css" href="../css/simple-sidebar.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>

  <body>
  <div class="fullwidthlayout">
  
   <div class="col-md-6 col-md-offset-3">
     <div class="mainlogonform">
	 
     <center>       <h3 class="logon_title"><img width="50px" height="50px" style="margin:0 10px 5px -10px;font-weight:100" src="../images/small-icon-blue-round.png" />Reset Password</h3>     </center>   
<center>
      <form class="form-signin logon-input" name="form1" method="post" action="change.php">
       
       <label for="email">电子邮件</label>
	   
        <input name="email" id="email" type="text" class="form-control" autofocus>
		
		 
        <button name="ForgotPassword" id="submit" class="btn btn-lg btn-primary btn-block" type="submit" value=" Request Reset " style="margin-top:20px;">发送</button>

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
