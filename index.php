<!DOCTYPE html>

<!--
capstone
index.php
-->

<html lang="en">
  	
  <head>
	<!-- establish correct base based on URI -->
	<?php
		if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
		{
			echo '<base href="http://localhost/CIS-440/capstone-project/">';
			include('connect/local-connect.php');
		}
		else
			echo '<base href="http://worduprede.apbdp5e3g7.us-west-2.elasticbeanstalk.com/">';
	?>
  
  
  
    <!-- Meta tag -->
    <meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />

    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="stylesheets/postFormSS.css" />
	
	<!-- favicon link -->
	<link type="image/gif" rel="icon" href="images/cs.ico" />

    <!-- Web Page Title -->
    <title>CAPSTONE MOCKUP</title>

  </head>

  <body>
	<div id="question">
		<center>
		  <p>Please leave your feedback....</p>
		</center>
	</div>
  
	<div id="wrapper">
		
		<form id="postform" action="process/confirm.php" method="post">
			<center>
				<label for="name">Name:</label>
					<input type="text" id="name" name="name" 
					autofocus
					placeholder="optional..."
					/>
				<br />
				<br />
				<textarea type="text" id="post" name="post" 
					autofocus
					required
				></textarea>
				
				
				
				<p class="submit">
					<input type="submit" value="SUBMIT" />
						<span class="reset">
							<input type="reset" value="CLEAR" onclick="history.go(0)" />
						</span>	
					</p>
			</center>
		</form>	
		
		
		<div id="prefooter"></div>
	</div>
  </body>

</html>