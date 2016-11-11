<?php
require 'includes/functions.php';
include_once 'config.php';

//Pull username, generate new ID and hash password
$newid = uniqid(rand(), false);
$newuser = $_POST['newuser'];
$newpw = password_hash($_POST['password1'], PASSWORD_DEFAULT);
$pw1 = $_POST['password1'];
$pw2 = $_POST['password2'];

    //Enables moderator verification (overrides user self-verification emails)
if (isset($admin_email)) {

    $newemail = $admin_email;

} else {

    $newemail = $_POST['email'];

}
//Validation rules



if ($pw1 != $pw2) {

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>确认密码不相同</div><div id="returnVal" style="display:none;">false</div>';

} elseif (strlen($pw1) < 8) {

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>密码至少8位数</div><div id="returnVal" style="display:none;">false</div>';

} elseif (!filter_var($newemail, FILTER_VALIDATE_EMAIL) == true) {

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>电子邮箱地址无效</div><div id="returnVal" style="display:none;">false</div>';

} else {
    //Validation passed
    if (isset($_POST['newuser']) && !empty(str_replace(' ', '', $_POST['newuser'])) && isset($_POST['password1']) && !empty(str_replace(' ', '', $_POST['password1']))) {

        //Tries inserting into database and add response to variable

        $a = new NewUserForm;

        $response = $a->createUser($newuser, $newid, $newemail, $newpw);

        //Success
        if ($response == 'true') {
		
            echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'. $signupthanks .'</div><div id="returnVal" style="display:none;">true</div>';

            //Send verification email
            $m = new MailSender;
            $m->sendMail($newemail, $newuser, $newid, 'Verify');
			session_start();
			
			if(isset($_SESSION["prereg_score"])){
			$username = "root"; 
	 $password = ""; 
    $host = "localhost"; 
    $dbname = "moocys"; 
	
	$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

			$prereg_score = $_SESSION["prereg_score"];
									$sql = "INSERT INTO member_scores (user, reading, writing, speaking, listening, vocab) VALUES ('".$newuser."', '".$prereg_score."', '".$prereg_score."', '".$prereg_score."', '".$prereg_score."', '0')";
						$result = mysqli_query($conn, $sql);
						
			}
			  echo '<script type="text/javascript">';
        echo 'window.location.href="thankyou.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=thankyou.php" />';
        echo '</noscript>';
        exit;
		
			
			 
        } else {
            //Failure
            mySqlErrors($response);

        }
    } else {
        //Validation error from empty form variables
        echo 'An error occurred on the form... try again';
    }
};
