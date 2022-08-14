<!DOCTYPE html>
<?php 

require 'bubblesort_algo.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado</title>
	<link rel="stylesheet" href="css/mystyle.css">

<!-- DEPENDÊNCIAS EXTERNAS - GOOGLE ICONS + MATERIALIZE CSS -->

	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


</head>

<body style="background-color: #fafafa;">

<!-- NAV BAR -->
<nav>
    <div class="nav-wrapper grey darken-4">
      <a href="#" class="brand-logo center">Bubble Sort com PHP</a> 
    </div>
  </nav>


<!-- CARD -->
<div class="container" id="container">

		 <div class='col s12 m7'>
		    <h3 class='header' style='color:#00acc1;'>Resultado da Ordenação Bolha</h3>
		    <div class='card horizontal'>
		      <div class='card-image'>
		        <i class='material-icons right'>search</i>
		      </div>
		      <div class='card-stacked' id="card">
		        <div class='card-content'>
		          <p class="text">
		          	
<?php 

if(isset($_GET['sequencia']) && !empty($_GET['sequencia'])) {

	$numeros = explode(',', filter_var($_GET['sequencia']));

	for ($x = 0; $x < count($numeros); $x++){
		
		$numeros[$x] = filter_var($numeros[$x],FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
 		}

		
} else{

	
	echo "<span style='color: red;'>Informe uma sequencia numérica.</span>

		</p>
		        </div>
		        <div id='botao' class='card-action'>
		          		        	<strong>
		        		<a href='index.php' class='waves-effect waves-light btn cyan darken-1'><i class='material-icons left'>first_page</i>Voltar</a>
		      		</strong>
		        </div>
		      </div>
		    </div>
		  </div>

		";

	die;
}



$sortedArray = new BubleSorte();



foreach($sortedArray->sorteArray($numeros) as $value) {
		
		echo "$value ";	
	};

?>	

		          </p>

		        </div>
		        <div class='card-action'>
		        	<strong>
		        		<a href='index.php' class="waves-effect waves-light btn cyan darken-1"><i class="material-icons left">first_page</i>Voltar</a>
		      		</strong>
		        </div>
		      </div>
		    </div>
		  </div>    
</div>


</body>
</html>