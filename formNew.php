<!DOCTYPE html>
<html>
<head>
	<title>Immunotherapy Form Predictor</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="data4.php">
				<h2 class="title">Immunotherapy Predictor</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Age</h5>
           		   		<input id="age" name="age" type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Number of Warts</h5>
           		    	<input id="warts" name="warts" type="text" class="input">
            	   </div>
            	</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Induration Diameter</h5>
           		    	<input id="induration" name="induration" type="text" class="input">
            	   </div>
            	</div>
            	<input type="submit" name="submit" class="btn" value="Predict" style="margin-top: 30px;">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>