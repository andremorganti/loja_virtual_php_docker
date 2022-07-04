<?php
  require_once("config/connection_db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cadastro de Usuários</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

  <?php require_once("views/shared/header.php"); ?>

  <div class="container-md d-flex justify-content-center align-self-center">
    <div class="col-4 login p-4">
      <form method="post" actions="create.php">
        <label for="">Login:</label> <input type="text" name="login" id="login" class="form-control"><br>
        <label for="">Senha:</label><input type="password" name="senha" id="senha" class="form-control"><br>
        <input type="submit" name="cadastrar" value="Cadastrar" id="cadastrar" class="btn btn-success">
      </form>
    </div>
  </div>

  <?php require_once('views/shared/footer.php'); ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>
