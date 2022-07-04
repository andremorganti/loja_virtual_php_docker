<?php
  require("config/connection_db.php");
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

  <div class="container">
    <?php
      switch(@$_REQUEST['page']) {
        case 'login':
          include("views/users/login.php");
        break;
        case 'listar_todos':
          include("views/todos/listar_todos.php");
        break;
        case 'novo_todo':
          include("views/todos/novo_todo.php");
        break;
        case 'editar_todo':
          include("views/todos/editar_todo.php");
        break;
        case 'remover_todo':
          include("views/todos/remover_todo.php");
        break;
        default:
          print "<h1>Seja bem vindo!</h1>";
      }
    ?>
  </div>

  <?php require_once('views/shared/footer.php'); ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>
