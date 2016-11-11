<?php 
	 $username = "root"; 
	 $password = ""; 
    $host = "localhost"; 
    $dbname = "moocys"; 
	
	$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	
	
	$subject = '';
	if((isset($_GET['subject']))AND(isset($_GET['page']))AND(isset($_GET['subject']))){
	
					$subject=$_GET['subject'];		
					$page=$_GET['page'];
					$title=$_GET['title'];
							
							
		
				$sql = "UPDATE study_materials SET Title = '".$title."'  where Subject = '".$subject."' AND Page_number = '".$page."' ";
		echo $sql;
				$result = mysqli_query($conn, $sql);
	header('location:create_study.php?subject='.$subject.'&page='.$page)	;
	}
	

?>