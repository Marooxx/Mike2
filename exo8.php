<?php


	if(!empty($_POST))
		{	

	$mike= explode(" ",rtrim($_POST["Mike"]));
		// rtrim() permet de supprimer les espaces à la fin de la chaîne de caractère
		// trim() permet de supprimer les espaces au début et la fin de la chaîne caractére

	if(count($mike)<4)// sans crochet , c'est qu'il y a qu'une seule instruction
		{
		echo " Nombre de paramètre(s) pas assez important";
		}
	elseif(count($mike)>4)
		{
		echo "Nombre de paramètre(s) sont trop importants";
		}
	elseif($mike[0] !="Mike")
		{
		echo "Premier valeur incorrect";
		}	
	elseif(!ctype_digit($mike[1]))
		{
			echo "Votre paramètre $mike[1] n'est pas correct";
		}
	elseif(!ctype_digit($mike[2]))
		{
			echo "votre paramètre $mike[2] n'est pas correct";
		}
	
		
		else
		{
			unset($mike[0]);// unset() permet de détruire une variable
			asort($mike);// asort() permet de trier les éléments dans un tableau
			foreach($mike as $key=>$val)
				{
					 echo " $val\n <br>";
		
				}



			

			
   	}


}


		







?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title> Piscine </title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form method="post">
					<div class="form-group">
						<label for="text">Entre votre valeur:</label>
						<input type="text" class="form-control" id="Mike" name="Mike">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</body>
</html>