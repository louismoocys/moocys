<html>
    <title>letao</title>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb18030"/>

	<link rel="stylesheet" type="text/css" href="css/simple-sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body style="font-family: Tahoma, Arial, Helvetica, 'Microsoft YaHei New', 'Microsoft Yahei', '寰蒋闆呴粦', 瀹嬩綋, SimSun, STXihei, '鍗庢枃缁嗛粦', sans-serif;font-size:10px"> 
		<center>	
			<table style="border-collapse:collapse;border-spacing: 0;">
				
				
				<tr>
					<script> 
					$(function(){
					  $(".mainPanel").load("menu.html"); 
					});
					</script> 
					<td class="mainPanel"></td>
				</tr>
				<tr>
					<td>
						<br><br><br>
					</td>
				</tr>
				<tr>
					<td style="color:#808080;font-size:13px">
						<center>
							 <center>       <h3 class="logon_title"><img width="50px" height="50px" style="margin:0 10px 5px -10px" src="images/small-icon-blue-round.png" />Thank You</h3>     </center>   
						</center>
					</td>
				</tr>
				<tr>
					<td>
						<br><br>
						<div><center>
							<?php
								echo "<p style='color:#808080;font-size:25px'>Thanks for your registration, Please check your email to Verify</p><br><p style='color:black;font-size:13px'>You will now be redirected to the home page</p>";
							
							?>
							<br><br>You will be redirected in <strong id="countdown">10</strong> seconds.
						</center></div>
					</td>
				</tr>
						
				<tr>
					<td>
			
						<table style="width:100%">
							<tr>
								<td id="formBlock">
									
								</td>
							</tr>
						</table>
					</td>
				</tr>
			
			
			
			</table>
		</center>
		
		<script type="text/javascript">
		var start = new Date();
		start = Date.parse(start)/1000;
		var seconds = 10;
		function CountDown(){
			var now = new Date();
			now = Date.parse(now)/1000;
			var counter = parseInt(seconds-(now-start),10);
			document.getElementById('countdown').innerHTML = counter;
			if(counter > 0){
				timerID = setTimeout("CountDown()", 100)
			}else{
				location.href = "index.php";
			}
		}
		window.setTimeout('CountDown()',100);
</script>
	</body>
</html>