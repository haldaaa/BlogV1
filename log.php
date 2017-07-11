<?php

// Traitement formulaire connexion

$email = "aa@aa.fr";
$password= "123456";


// Traitement formulaire LOG

try{
   $bdd = new PDO('mysql:host=localhost;dbname=myBdd;charset=utf8','root','demange');
}catch(PDOException $e){
   die('Erreur : '.$e->getMessage());
}

$description = $_POST['description'];
$auteur = "Fares";

if (isset($_POST['description']))
{
	$requete = 'INSERT INTO Log(Auteur,Texte) VALUES ("'.$auteur. '" , " ' .$description.' ")' ;
	$bdd -> exec($requete);
	print_r($requete); 
	 echo "A été save" ;
}
else 
	echo "Rien d'enrengistré !" ;

// Traitement affichage log 

$affichage = $bdd -> query('SELECT * FROM Log');
$affichage_resultat = $affichage -> fetchAll();



?>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    	<link rel="stylesheet" href="css/myCss.css" >
	</head>

	<body>
		<div class="content">
			<div class ="menu">

				<ul class="nav nav-pills">
				  <li role="presentation" class="active"><a href="#">Home</a></li>
				  <li role="presentation"><a href="#"> Article</a></li>
				  <li role="presentation"><a href="#">Page 2</a></li>
				  <li role="presentation"><a href="#">Admin</a></li>
				</ul>

			</div> <!-- div menu -->

			<div class="formulaire_log">
				<form name="formulaire_log" class="form-group" id="formulaire_log" method="post" action="#">

			       <label for="auteur"> Auteur :</label>
			       <input type="text" class="" placeholder="YourName" name="auteur">  

			       <label for="description"> Description  :</label>
			       <textarea class="form-control" rows="3" name="description"> Pas plus de 3 lignes</textarea>

			       <!-- <input type="text" class="form" name="description"> -->  

			       <button type="submit" class="btn btn-default center">Envoyez</button>
			       
		    	</form>


			</div> <!-- journal log -->

		    <div class="log_affichage jumbotron"> Journal de log
		    	<?php  

		    	
		    	foreach ($affichage_resultat as $key) 
		    	{
		    		echo  "  <i>   &nbsp;  </br> " . $key['Date'] . "</i> : </br>" . "-" . $key['Texte']     ;
		    		
		    	}


		    	 ?>

		    </div>


		    <div class="centre">


		    		<p> Choses a faire :
						<ul>
							<li> Regler soucis affichage texte dans le journal de log (quand texte trop grand, + bien mettre date a la fin) </li>
							<li> Possibilité de rajouter un article directement sur la page + affichage des articles </li>
							<li> Trouver comment appliquer une hauteur automatique au journal de log </li>
							<li> Améliorer design</li>

						</ul>
					</p>


		    </div> <!-- fin div centre-->



		</div> <!-- div content -->


	</body>



</html>
