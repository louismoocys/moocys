<?php 
	
	include '../menu/prelogin_header_menu.php';
	
$form_no= 1;
if(isset($_POST['form_no'])){
	$form_no = $_POST['form_no'];
}
$form_1_answers=  array("C", "B", "A","A","C","B", "A", "D","A","C","D", "A", "A","D","D");
$no_questions = 15;
$no_correct = 0;

	for($counter = 1; $counter <= $no_questions; $counter++){
		
			if($form_no==1){
				
				if(isset($_POST['prereg-q'.$counter])){
					
					$answer = $_POST['prereg-q'.$counter];
					echo $answer . " " . $form_1_answers[$counter-1];
					if(strtolower($form_1_answers[$counter-1])==strtolower($answer)){
						$no_correct++;
					}
					
					
				}else{
					
				}
				
				
			}
		 ;
	}
	$prereg_score = $no_correct/2+1;


	
?>
    <div class="prereg-container">
	<div class="question-container">
	<br><br>
	<center>
		<h2 class="bold">Results!</h2>
		<h2 class="">慕克雅思评估测试结果</h2>
		<br>
		<div class="seperator-white"></div>
		Congratulations, your overall level is approxmately <br><br>
		<h1><?php echo $prereg_score; ?></h1>
		<br><br>
		Please note that the total score is 9 in IELTS examination<br>
		This test is merely an approximate measure and does not represent an official score of any kind

	<?php
		if (!isset($_SESSION['username'])) {
		$_SESSION["prereg_score"] = $prereg_score;
	?>
	<br><br>
		We can see you have not logged in<br>
		If you log in now you can have this score as your estimated overall score<br>
		<form action="../main_login.php" method="post" >
			<input type="hidden" id="prereg_score" name="prereg_score" value="<?php echo $prereg_score ?>" />
			 <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top:20px;width:100px;">Login</button>
		</form><br>
		Or if you are not yet registered, you can register here and have this score recorded too <br>
		<form action="../signup.php" method="post" >
			<input type="hidden" id="prereg_score" name="prereg_score" value="<?php echo $prereg_score ?>" />
			 <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top:20px;width:100px;">Register</button>
		</form>
		
			<?php
}else{
	 $username = "root"; 
	 $password = ""; 
    $host = "localhost"; 
    $dbname = "moocys"; 
	
	$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

	$sql = "SELECT Count(user) as count FROM member_scores where user = '".$_SESSION['username']."'";
				$result = mysqli_query($conn, $sql);
				
			if ((mysqli_fetch_array($result)['count']> 0)) {
					echo "<br><br>It seems like you already taken this test so your scores will not be updated<br>";
					 echo '<form action="../student/student_home.php"><button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top:20px;width:150px;">Dashboard</button></form>';
	
				}
				else{
						$sql = "INSERT INTO member_scores (user, reading, writing, speaking, listening, vocab) VALUES ('".$_SESSION['username']."', '".$prereg_score."', '".$prereg_score."', '".$prereg_score."', '".$prereg_score."', '0')";
						$result = mysqli_query($conn, $sql);
					echo "<br><br>We have updated your score into your dashboard, you can check it out with the link below!";
					 echo '<form action="../student/student_home.php"><button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top:20px;width:150px;">Dashboard</button></form>';
	
					}
}
	?>
		</center>
	</div>
	</div>

    
	<?php 
include '../menu/prelogin_footer_menu.php';
	
?>