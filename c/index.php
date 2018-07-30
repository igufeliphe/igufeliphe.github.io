<html>
  <head>
    <meta charset="utf-8">
  
	      <title>Igor Feliphe</title>
    
    	  <link href="http://getbootstrap.com.br/dist/css/bootstrap.min.css" rel="stylesheet">
          <link href="http://getbootstrap.com.br/docs/4.1/examples/cover/cover.css" rel="stylesheet">
  
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Igor</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="../">Inicio</a>
            <a class="nav-link active" href="">Contato</a>
            <a class="nav-link" href="http://twitter.com/igufeliphe" target="_ablank">Twitter</a>
            <a class="nav-link" href="https://linkedin.com/in/igufeliphe" target="_ablank">LinkedIn</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        
<?php 

if (isset($_GET['local'])){ 

  $local = $_GET['local']; 

  switch ($local) {
    case 'email': include 'tipo/email.php'; break;
    
    case 'linkedin': include 'tipo/linkedin'; break;

    default:
      // code...
      break;
  }









} else{ ?>

<div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Selecione
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="?local=email">E-mail</a>
      <a class="dropdown-item" href="?local=linkedin">LinkedIn</a>
    </div>
  </div>
</div>

<?php } ?>



        




      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Igor Feliphe.</p>
        </div>
      </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="http://getbootstrap.com.br/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="http://getbootstrap.com.br/assets/js/vendor/popper.min.js"></script>
    <script src="http://getbootstrap.com.br/dist/js/bootstrap.min.js"></script>
  </body>
</html>