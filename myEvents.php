<?php include 'php/connection.php';?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'pages/head.php';?>
		<title>My Events</title>
	</head>
	<body>
	
	<?php include 'pages/navbar.php';?>

<!-- Begin Body -->
<div class="container">
	<div class="row">
	
  			<div class="col-md-2" id="leftCol" >
              	<?php include 'pages/sidebar.php';?>
      		</div>  
			
      		<div class="col-md-10">
			
				<?php include 'pages/myEventsContent.php';?>
              	                            
              	<hr>             
              	<hr>
      		</div> 
  	</div>
</div>
	<!-- script references -->
		<?php include 'pages/js.php';?>
	</body>
</html>