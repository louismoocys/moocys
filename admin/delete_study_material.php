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
	if((isset($_GET['subject']))AND(isset($_GET['page']))){
	$subject = $_GET['subject'];
			$page = $_GET['page'];
			
	if((isset($_GET['Sub_number']))){
			
			$sub_number = $_GET['Sub_number'];
				$sql = "SELECT Count(Page_number) as count FROM study_materials where Subject = '".$subject."' and  Page_number = '".$page."'";
				$result = mysqli_query($conn, $sql);
				
				if ((mysqli_num_rows($result) > 0)) {
						$row = mysqli_fetch_array($result); 
						if($row["count"]==1){
						
						$sql = "Delete FROM study_materials where Subject = '".$subject."' and  Page_number = '".$page."'";
							$result = mysqli_query($conn, $sql);
						
						$sql = "Update study_materials Set Page_number = Page_number - 1 where Subject = '".$subject."' and  Page_number > '".$page."'";
							$result = mysqli_query($conn, $sql);
						
							}
						else{
							$sql = "Delete FROM study_materials where Subject = '".$subject."' and  Page_number = '".$page."' and Sub_number = '".$sub_number."'  ";
							$result = mysqli_query($conn, $sql);
						
							$sql = "Update study_materials Set Sub_number = Sub_number - 1 where Subject = '".$subject."' and  Page_number = '".$page."' and Sub_number > '".$sub_number."'  ";
							$result = mysqli_query($conn, $sql);
							
							}
						
						
						
						
						
						
						
						
						
						
				header('location:create_study.php?subject='.$subject.'&page='.$page)	;
				} else {
					echo "0 results";
				}
				
			
			
	
		}ELSE{
		
			echo "deleting page";
			
		$sql = "Delete FROM study_materials where Subject = '".$subject."' and  Page_number = '".$page."'";
							$result = mysqli_query($conn, $sql);
						
						$sql = "Update study_materials Set Page_number = Page_number - 1 where Subject = '".$subject."' and  Page_number > '".$page."'";
							$result = mysqli_query($conn, $sql);
							
							
							
							header('location:create_study.php?subject='.$subject.'&page='.$page)	;
							
							
							
							
							
		}
		
	}
	

?>