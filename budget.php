<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    	<link rel="stylesheet" href="css/myCss.css" >
	</head>

	<body>
		<div class="content">
			<div class ="menu">

				<ul class="nav nav-pills">
				  <li role="presentation" class="active"><a href="log.php">Home</a></li>
				  <li role="presentation"><a href="#"> Article</a></li>
				  <li role="presentation"><a href="#">Page 2</a></li>
				  <li role="presentation"><a href="#">Admin</a></li>
				</ul>

			</div> <!-- div menu -->


		    <div class="log_affichage jumbotron"> Journal de log
		    	<?php  

		    	
		    	foreach ($affichage_resultat as $key) 
		    	{
		    		echo  "  <i>   &nbsp;  </br> " . $key['Date'] . "</i> : </br>" . "-" . $key['Texte']     ;
		    		
		    	}


		    	 ?>

		    </div>


		</div> <!-- div content -->


	</body>



</html>
