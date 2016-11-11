
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moocys Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="IELTS" />
	<link rel="stylesheet" type="text/css" href="../css/simple-sidebar.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
<script type="text/javascript">
function AlertIt(page,subject) {
var answer = confirm ("Please click on OK to continue to delete page " + page + " of subject " + subject )
if (answer)
window.location="delete_study_material.php?subject="+subject+"&page="+page;
}
</script>

    <script type="text/javascript">
      
    </script>
</head>
<div class="admin-reading-button admin-subject-button col-md-3" onclick="location.href='create_study.php?subject=r';"><center>
	Reading

</center></div>
<div class="admin-writing-button admin-subject-button col-md-3" onclick="location.href='create_study.php?subject=w';"><center>
	Writing

</center></div>
<div class="admin-speaking-button admin-subject-button col-md-3" onclick="location.href='create_study.php?subject=s';"><center>
	Speaking

</center></div>
<div class="admin-listening-button admin-subject-button col-md-3" onclick="location.href='create_study.php?subject=l';"><center>
	Listening

</center>


</div>


	<div class="subject-list col-md-4">
	
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
	if(isset($_GET['subject'])){
			$subject = $_GET['subject'];
			echo 	$subject . " "?>
			  <form class="" name="add_page" method="get" action="addpage_study_material.php">
     
		
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top:20px;">Add a page at the end</button>
      </form>
					
			
			<?php
			echo "<br><hr><br>";
			
			
			
			
			
		
				$sql = "SELECT Page_number, Title FROM study_materials where Subject = '".$subject."' group by Page_number, Title ";
		
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while ($row = mysqli_fetch_array($result)) {
						echo "Pg: " . $row["Page_number"]. " Title: " .                  "   ";
						?>
						<form class="" name="change_title" method="get" action="title_change_study_material.php">
     <input name="title" id="title" type="text" class="form-control" value="<?php echo $row["Title"] ?>" >
		  <input name="subject" id="subject" type="hidden" class="form-control" value="<?php echo $subject ?>" >
		    <input name="page" id="page" type="hidden" class="form-control" value="<?php echo $row["Page_number"] ?>" >
	
		
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top:20px;">Change Title</button>
      </form>
						
						<?php
						echo "  
						<a href='create_study.php?subject=".$subject."&page=".$row["Page_number"]."' class='hyperlink-button'>Edit this Page</a>
						<a onclick='AlertIt(\"".$row["Page_number"]."\",\"".$subject."\")' class='hyperlink-button' style='cursor:pointer'>Delete Page</a>
						<br><br>
						<a href='addpage_study_material.php?subject=".$subject."&page=".$row["Page_number"]."' class='hyperlink-button'>Add a page after page ".$row["Page_number"]."</a>
				
						<br><br><br><br>" ;
					}
				} else {
					echo "0 results";
				}
	}
	

?>
</div>
	<div class="subject-list col-md-8">
	
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
	if(isset($_GET['subject'])AND(isset($_GET['page']))){
			$subject = $_GET['subject'];
			$page = $_GET['page'];
			echo "Content on Page <hr>" ; 
				$sql = "SELECT Sub_type, Sub_number, Content FROM study_materials where Subject = '".$subject."' AND Page_number = '".$page."'  ";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while ($row = mysqli_fetch_array($result)) {
						echo " SubNo: ".$row["Sub_number"]."  Entry Type: " . $row["Sub_type"]. " - Content: " . $row["Content"]. "
						<a href='delete_study_material.php?subject=".$subject."&page=".$page."&Sub_number=".$row["Sub_number"]."' class='hyperlink-button'>delete</a>
						
						<br><br>" ;
					}
				} else {
					echo "0 results";
				}
	}
	

?>
</div>


</html>