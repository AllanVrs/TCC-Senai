<?php   
  require_once "functions/product.php";
  $pdoConnection = require_once "connection.php";
  $products = getProducts($pdoConnection);
?>
<!DOCTYPE html>
<html>
  <head>
    <m,eta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="theme-color" content="#563d7c">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <style type="text/css">
      .relative{
        position: relative;
        top: 0px;
        left: -9px;
      }
      .font{
        font-size: 14px
      }
    </style>
    <title>Carnes do Bom</title>
  </head>

  <body>
    <header>
    
      <nav class="navbar navbar-expand-lg navbar-dark  bg-danger">
          <a class="navbar-brand" href="index-logado.php">Carnes do Bom</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="novousu.html">Cadastrar-se</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Logar</a>
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
    </header>       

<main role="main" class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-danger rounded shadow-sm">
    <img class="mr-3" src="imagens/icone1.jpg" alt="" width="48" height="48">
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">Açougue Ribeiro</h6>
      <small>Since 2011</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0" id="ListaCortes">Cortes Bovinos</h6>
    <div class="media text-muted pt-1">
      <div class="container">
        <div class="row">
          <?php foreach($products as $product) : ?>
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                 <h4 class="card-title"><?php echo $product['nome']?></h4>
                 <h6 class="card-subtitle mb-2 text-muted">
                    R$<?php echo number_format($product['preco'], 2, ',', '.')?>
                 </h6>
                 <a href="carrinho.php?acao=add&id=<?php echo $product['id']?>"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Comprar</button> </a>
              </div>
            </div>
          </div>

          <?php endforeach;?> 
        </div>
      </div>
    </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0" id="ListaCortes">Cortes Suínos</h6>
    <div class="media text-muted pt-1">
      <div class="container">
        <div class="row">
          
        </div>
      </div>
    </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0" id="ListaCortes">Frios</h6>
    <div class="media text-muted pt-1">
      <div class="container">
        <div class="row">
          
        </div>
      </div>
    </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Outros Açougues</h6>
    <div class="container">
        <div class="row">

          <div class="col-sm">
              <div class="card border-danger mb-3" style="max-width: 350px; height: 110px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="imagens/icone2.png" class="card-img" alt="..." width="104" height="109">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                      <a href="#" style="font-size: 20px; font-weight: bold;">Casa de Carnes Ville</a>
                      <!--<p class="card-text">• 43-53 min • 2.73 km • $ •</p>-->
                      <br>
                      <p style="color: green; " class="card-text">• Entrega grátis</p>
                    </div>
                </div>
              </div>
          </div>
          </div>

          <div class="col-sm">
              <div class="card border-danger mb-3" style="max-width: 350px; height: 110px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="imagens/icone1.jpg" class="card-img" alt="..." width="104" height="107">
                </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="#" style="font-size: 20px; font-weight: bold;">Carnes Ribeiro</a>
                      <!--<p class="card-text">• 43-53 min • 2.73 km • $ •</p>-->
                      <br>
                      <p class="font" class="card-text">• 43-53 min • Entrega R$ 6.99</p>
                    </div>
                  </div>
              </div>
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm">
              <div class="card border-danger mb-3" style="max-width: 350px; height: 110px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="imagens/icone3.jpg" class="card-img" alt="..." width="104" height="109">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                      <a href="#" style="font-size: 20px; font-weight: bold;">Açougue União</a>
                      <!--<p class="card-text">• 43-53 min • 2.73 km • $ •</p>-->                     
                      <p class="font" class="card-text">• 43-53 min • Entrega R$ 6.99</p>
                    </div>
                </div>
              </div>
          </div>
          </div>

          <div class="col-sm">
              <div class="card border-danger mb-3" style="max-width: 350px; height: 110px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTgZ65M-YCRWBrk7-n9OScq2xMNwQ2vir8fEcnGxHe6OlZb0JcK&usqp=CAU" class="card-img" alt="..." width="104" height="109">
                </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="#" style="font-size: 20px; font-weight: bold;">Açougue</a>
                      <!--<p class="card-text">• 43-53 min • 2.73 km • $ •</p>-->
                      <br>
                      <p style="color: green;" class="card-text">• Entrega grátis</p>
                    </div>
                  </div>
              </div>
          </div>
          </div>
        </div>
      </div>
    
    <small class="d-block text-right mt-3">
      <a href="index-logado.php">Ver todos</a>
    </small>
  </div>
</main>





    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Voltar ao topo</a>
        </p>
        <h4>Menu</h4>
        <p><a href="" class="text-muted">Trabalhe Conosco</a></p>
        <p>Email: carnesdobom@gmail.com</p>
        <p><a href="" class="text-muted">Duvidas</a></p>
      </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>