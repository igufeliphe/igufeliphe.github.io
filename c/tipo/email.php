<form action="" method="POST" id="form">

  <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="nome" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="nome.." required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">E-mail</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">O que deseja?</label>
    <select class="form-control" id="exampleFormControlSelect1" name="assunto" required>
      <option>..</option>
      <option value="Informacoes">Informações</option>
      <option value="Suporte">Suporte</option>
      <option value="Servico">Serviços</option>
      <option value="Outros">Outro</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descreva</label>
    <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="3" id="mensagem" required></textarea>
  </div>

<button type="submit" name="email" class="btn btn-default">Confirmar</button>

</form>

<?php 

if (isset($_POST['email'])) {
  
extract($_POST);
print_r($_POST);

$nome     = utf8_decode (strip_tags(trim($_POST['nome'])));
$email    = $_POST['email'];
$assunto  = utf8_decode (strip_tags(trim($_POST['assunto'])));
$mensagem   = utf8_decode (strip_tags(trim($_POST['mensagem'])));

require 'email/envia.php';

/*if(!$mail->Send()) {
  echo "ERROR: " . $mail->ErrorInfo;
} else {
  echo '
  <div class="alert alert-success alert-dismissible fade show" role="alert">
   Mensagem enviada..
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>


       ';
}*/

}





 ?>

