<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Carnes do Bom</title>
		<style type="text/css">
			/*Link não visitado */
			a:link {
			  color: black;
			  text-decoration: none;
			}
			 
			/*Link já visitado*/
			a:visited {
			  color: black;
			  text-decoration: none;
			}
			 
			/*Quando o mouse passa por cima*/
			a:hover {
			  color: black;
			  text-decoration: none;
			}
			 
			/*Link ativo/selecionado*/
			a:active {
			  color: black;
			  text-decoration: none;
			}
		</style>
	</head>

	<body>
		<header>
		
			<nav class="navbar navbar-expand-lg navbar-dark	 bg-danger">
			  	<a class="navbar-brand" href="index-logado.php">Carnes do Bom</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
					  <li class="nav-item">
					    <a class="nav-link" href="novousu.html">Cadastre-se</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="login.html">Logar</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Carrinho</a>
					  </li>
					  <li>
					  	<?php
	                        session_start();
	                        include ("conecta.php");
	                        $user =  $_SESSION["user"];
	                        $logado = mysqli_query($conn,"SELECT * FROM vendedor WHERE emailvend = '$user'") or die("Erro ao selecionar!");
	                        $dado = mysqli_fetch_assoc($logado);
	                        echo $dado['emailvend'];
	                        echo "&nbsp;|&nbsp;";
                    	?>
					  </li>
					</ul>
				</div>
			  	<form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar Açougue" aria-label="Search">
			      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Pesquisar</button>
			    </form>   
			</nav>


			<div class="jumbotron">			  
			    <h1 class="display-4">Carnes do Bom</h1>
			    <p class="lead">Precisando de carnes para um churrasco de ultima hora? Ou deseja comer uma ótima carne? Peça no Carnes do Bom!!</p>
			</div>
		</header>
<hr class="border-danger">
				

		<main>

			<div class="container">
			  <div class="row">

			    <div class="col-sm">
			      	<div class="card border-danger mb-3" style="max-width: 545px;">
			  			<div class="row no-gutters">
			    			<div class="col-md-4">
			      				<img src="imagens/carne1.jpg" class="card-img" alt="..." width="164" height="149">
			    			</div>
			    			<div class="col-md-8">
			      				<div class="card-body">
			        				<a href="#" style="font-size: 20px; font-weight: bold;">Casa de Carnes Tuíuti</a>
			        				<!--<p class="card-text">• 43-53 min • 2.73 km • $ •</p>-->
			        				<br>
			         				<p style="color: green;" class="card-text">• Entrega grátis</p>
			         				<button class="btn btn-outline-danger my-2 my-sm-0" style="width: 90px; height: 35px;" type="submit">Visitar</button>
			         			</div>
			    			</div>
			  			</div>
					</div>
			    </div>

			    <div class="col-sm">
			      	<div class="card border-danger mb-3" style="max-width: 545px;">
			  			<div class="row no-gutters">
			    			<div class="col-md-4">
			      				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTJDjq6tF_h7vbhzYLWVsRXgWmZIb4wUS4xZUqLxUuDaUg-sH1o&usqp=CAU" class="card-img" alt="..." width="164" height="149">
			    			</div>
			      			<div class="col-md-8">
			       				<div class="card-body">
			         				<a href="#" style="font-size: 20px; font-weight: bold;">Carnes Ribeiro</a>
			         				<!--<p class="card-text">• 43-53 min • 2.73 km • $ •</p>-->
			         				<br>
			         				<p class="card-text">• 43-53 min • Entrega R$ 6.99</p>
			         				<button class="btn btn-outline-danger my-2 my-sm-0" style="width: 90px; height: 35px;" type="submit">Visitar</button>
			         			</div>
			      			</div>
			  	 		</div>
					</div>
			   	</div>
			  </div>

			  <div class="row">
			    <div class="col-sm">
			      	<div class="card border-danger mb-3" style="max-width: 545px;">
			  			<div class="row no-gutters">
			    			<div class="col-md-4">
			      				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQX_CeLJVL731EpbMcWFRNmcbCkHrjuF5fiiS6gEk3FsnGNQjx9&usqp=CAU" class="card-img" alt="..." width="164" height="152">
			    			</div>
			    			<div class="col-md-8">
			      				<div class="card-body">
			        				<a href="#" style="font-size: 20px; font-weight: bold;">Casa de Carnes</a>
			        				<!--<p class="card-text">• 43-53 min • 2.73 km • $ •</p>-->			        				
			         				<p class="card-text">• 43-53 min • Entrega R$ 6.99</p>
			         				<button class="btn btn-outline-danger my-2 my-sm-0" style="width: 90px; height: 35px;" type="submit">Visitar</button>
			      				</div>
			    			</div>
			  			</div>
					</div>
			    </div>

			    <div class="col-sm">
			      	<div class="card border-danger mb-3" style="max-width: 545px;">
			  			<div class="row no-gutters">
			    			<div class="col-md-4">
			      				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTgZ65M-YCRWBrk7-n9OScq2xMNwQ2vir8fEcnGxHe6OlZb0JcK&usqp=CAU" class="card-img" alt="..." width="164" height="149">
			    			</div>
			      			<div class="col-md-8">
			       				<div class="card-body">
			         				<a href="#" style="font-size: 20px; font-weight: bold;">Açougue Belas Carnes</a>
			         				<!--<p class="card-text">• 43-53 min • 2.73 km • $ •</p>-->
			         				<br>
			         				<p style="color: green;" class="card-text">• Entrega grátis</p>
			         				<button class="btn btn-outline-danger my-2 my-sm-0" style="width: 90px; height: 35px;" type="submit">Visitar</button>
			       				</div>
			      			</div>
			  	 		</div>
					</div>
			   	</div>
			  </div>
			</div>

		</main>
	<hr class="border-danger">

		<footer class="text-muted">
		  <div class="container">
		    <p class="float-right">
		      <a href="#">Voltar ao topo</a>
		    </p>
		    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
		    <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.4/getting-started/introduction/">getting started guide</a>.</p>
		  </div>
		</footer>



		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>