<?php 
require('Incluir/header.html');

?>
<body>
<script src="script.js"></script>
<header id="header" class="header">
        <a href="index.html"><img id="gato" class="gato" src="Estaticos/LogoMobile.svg" alt="LogoMobile"></a>
        <h1>CADASTRO</h1>
        <div class="nav-img">
            <div class="menu" id="menu">
                <img src="Estaticos/LogoMobile.svg" alt="" id="gato-menu" class="gato-menu"><br>
        <nav>
            <ul>
                <li><a href="index.html">Início</a></li>
                <li><a href="comunidade.php">Comunidade</a></li>
                <li><a href="">Adotar</a></li>
                <li><a href="">Perfil</a></li>
                <li><a href="doacoes.php">Doações</a></li>
                <li><a href="">Guia</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>
        <img id="imagem" src="Estaticos/pata-de-gato.png" alt="" onclick="toggleMenu()">
    </div>
    </header>
   
    <form action="cadastro.php" method="post" class="Login" id="cadastro">
          <h1>CADASTRO</h1>
          <br>
          <input type="text" placeholder="Nome completo" name="nome" required>
          <br><br>
          <input type="email" placeholder="Email" name="email" required>
          <br><br>
          <input type="text" placeholder="Telefone" name="tel" required>
          <br><br>
          <input type="date" placeholder="Data de nascimento" name="datanasc" required>
          <br><br>
          <input type="text" placeholder="Nome de usuário" name="usuario" required>
          <br><br>
          <input type="password" placeholder="Senha" name="senha" required>
          <br><br>
          <div class="ec">
          <input type="submit" value="CADASTRAR" id="acesso" name="submit">
          <a href="login.php">LOGAR</a>
        <!--ajustar isso aq-->
          </div>
        </form>
        
        <footer class="footer" id="footer-cadastro">
        <div class="redes">
        <a href="https://twitter.com">
            <div class="icon" id="tt">
              <i class="fab fa-twitter"></i>
            </div></a>
            <a href="https://instagram.com">
                <div class="icon"id="ig">
                  <i class="fab fa-instagram"></i>
                </div></a></div>
        <p>Copyright. PetConect, 2023. Todos os direitos reservados.</p>
    </footer>
    
</body>
</html>