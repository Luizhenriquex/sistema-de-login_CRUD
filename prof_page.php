<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['prof_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Professor</title>

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Oi, <span>professor!</span></h3>
      <h1>Bem vindo ;)<span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Essa é a página do professor</p>
      <a href="login_form.php" class="btn">Entrar</a>
      <a href="register_form.php" class="btn">Cadastrar</a>
      <a href="logout.php" class="btn">Sair</a>
   </div>

</div>

</body>
</html>