<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Carnes do Bom</title>
		<link rel="stylesheet" type="text/css" href="css/css.css">
	</head>

	<body>
		<header>
		
			<nav class="navbar navbar-expand-lg navbar-dark	 bg-danger">
			  	<a class="navbar-brand" href="index.html">Carnes do Bom</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
					  <li class="nav-item">
					    <a class="nav-link" href="novousu.html">Logar</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Carrinho</a>
					  </li>
					</ul>
				</div>
			  	<form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar Açougue" aria-label="Search">
			      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Pesquisar</button>
			    </form>   
			</nav>
			<div id="base-carrinho">
				<h2 class="fundo-azul"> <img src="imagens/barra-carrinho01.png"> </h2>
				<h3> <img src="imagens/meu-carrinho.png"> </h3>
					<div class="dados-carrinho">
						<form name="frmCarrinho" action="op_carrinho.php">
							<table cellpadding="0" cellspacing="0" border="1">
								<thead>
									<tr>
										<th>Descrição do produto </th>
										<th>Quantidade </th>
										<th>Preço unitário </th>
										<th>Subtotal </th>
										<th>Remover </th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>
											<strong>Acém</strong>
										</td>
										<td> <input type="text" name=""> </td>
										<td>R$ 37,90 </td>
										<td>R$ 30,00</td>
										<td><input type="submit" name="Remover" value="Remover"> </td>
									</tr>
									<tr>
										<td><input type="submit" name="Atualizar" value="Atualizar"></td>
										<td colspan="5">Valor total</td>
									</tr>

								</tbody>			
							</table>
						</form>
					</div>
					<div id="linha">
						<img src="imagens/finalizar-compra.png"><img src="imagens/continuar-comprando.png">
					</div>
			</div>
			
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