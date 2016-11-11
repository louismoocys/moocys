<?php
  session_start();
  if (isset($_SESSION['username'])) {
      session_destroy();
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
 <link rel="stylesheet" type="text/css" href="css/simple-sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>
     <div class="fullwidthlayout" style="margin-top: 15vh;">
  
   <div class="col-md-6 col-md-offset-3">
     <div class="mainlogonform">
	 <center>    
      <form class="form-signup logon-input" id="usersignup" name="usersignup" method="post" action="login/createuser.php? <?php 
	if(isset($_POST['prereg_score'])){
		echo "prereg_score=".$_POST['prereg_score'];
		
		}
	  
	  ?>">
	  
        <center>       <h3 class="logon_title"><img width="50px" height="50px" style="margin:0 10px 5px -10px" src="images/small-icon-blue-round.png" />Register</h3>     </center>   
		
       <label for="newuser">用户名</label>
        <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username" autofocus>
		
       <label for="email">电子邮件地址</label>
		<input name="email" id="email" type="text" class="form-control" placeholder="Email">

<label for="password1">密码</label>
        <input name="password1" id="password1" type="password" class="form-control" placeholder="Password">

		<label for="password2">确认密码</label>
        <input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">
	<br>
	
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">注册</button>

        <div id="message"></div>
      </form>
</center>    
    </div> <!-- /container -->
   </div>    </div> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script src="js/signup.js"></script>


    <script src="js/validate.js"></script>
<script src="js/additional-methods.js"></script>
<script>

$( "#usersignup" ).validate({
  rules: {
	email: {
		email: true,
		required: true
	},
    password1: {
      required: true,
      minlength: 8
	},
    password2: {
      equalTo: "#password1"
    }
  }
});
</script>

  </body>
</html>
