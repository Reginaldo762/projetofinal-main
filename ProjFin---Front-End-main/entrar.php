<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/index.css" />
  <title>Entrar</title>


</head>

<body>

  <section class="header" style="
        background-image: linear-gradient(
            rgba(4, 9, 30, 0.7),
            rgba(4, 9, 30, 0.7)
          ),
          url(assets/img/ImgFundo-Index1.jpg);
      ">
    <nav>
      <img class="logo" src="assets/img/LogoCuidadoso.jpeg" alt="">
      <a href="index.html"></a>
      <div class="nav-links" id="navLinks">
        <span class="fa material-symbols-outlined" onclick="hideMenu()">
          close
        </span>
        <ul>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="sobreNos.html">Sobre nós</a></li>
          <li><a href="loja.html">Nossa loja</a></li>
          <li><a href="login.php">Cadastre-se</a></li>
          <li><a href="entrar.php">Entrar</a></li>

        </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
  </section>


  <div class="form-login">
    <h1>Entrar</h1>
    <form action="testelogin.php" method="post">
      <input type="text" name="email" placeholder="Email">
      <br>
      <input type="password" name="Senha" placeholder="Senha">
      <br>
      <input class="btn-enviar" type="submit" name="submit"
        value="Enviar">
        <img src="assets/img/undraw_love_it_xkc2.svg" alt="">
    </form>
  </div>

  </section>
  <script src="assets/js/app.js"></script>
</body>

</html>