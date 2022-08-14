<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bubble Sort (ordenação bolha) Algoritmo com PHP</title>

	<link rel="stylesheet" href="css/mystyle.css">

<!-- DEPENDÊNCIAS EXTERNAS - GOOGLE ICONS + MATERIALIZE CSS -->

	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

           
</head>

<body>


<!-- NAV BAR -->
<nav>
    <div class="nav-wrapper grey darken-4">
      <a href="#" class="brand-logo center">Bubble Sort com PHP</a>
      
    </div>
  </nav>


<!-- CARD -->
<div class="container" id="container">

	<div class='col s12 m7'>
	    <h3 class='header'>Digite uma sequência numérica</h3>
	
	    <div class='card horizontal'>
		      <div class='card-image'>
		      	<i class='material-icons right'>edit_note</i>
	      </div>
	
	      <div class='card-stacked' id="card">
	        <div class='card-content' >
	          <form method="get" action="bubblesort_output.php">
	
					<label for="sequencia">&nbspdigite apenas números, separados por vígula </label>
					<br>

					<input type="text" name="sequencia">
			</div>

					<div class='card-action'>
	       				<button class="btn waves-effect waves-light cyan darken-1" type="submit" name="action">
							Ordenar
					       	<i class="material-icons right">sort</i>
					    </button>			     	
			      	</div>
				</form>
		     </div>
		   </div>

	 	</div>
	</div>

</body>
</html>