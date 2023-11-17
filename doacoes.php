<?php 
require('Incluir/header.html');
?>
<body>
<script src="script.js"></script>
<header id="header" class="header">
        <a href="index.html"><img id="gato" class="gato" src="Estaticos/LogoMobile.svg" alt="LogoMobile"></a>
        <h1>DOAÇÕES</h1>
        <div class="nav-img">
            <div class="menu" id="menu">
                <img src="Estaticos/LogoMobile.svg" alt="" id="gato-menu" class="gato-menu"><br>
        <nav>
            <ul>
                <li><a href="index.html">Início</a></li>
                <li><a href="comunidade.php">Comunidade</a></li>
                <li><a href="">Adotar</a></li>
                <li><a href="">Perfil</a></li>
                <li><a href="">Doações</a></li>
                <li><a href="">Guia</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>
        <img id="imagem" src="Estaticos/pata-de-gato.png" alt="" onclick="toggleMenu()">
    </div>
    </header>

    <div class="doacoes-texto">
    <h3>A nossa ONG precisa da sua ajuda para se manter firme 
        e em funcionamento, além de ajudar aos pets com alimentação. 
        Caso possa, doe a quatidade que desejar e seremos imensamente gratos.</h3>
    </div>

    <center>
    <div class="cartao-doacao">
        <div class="cartoes">
    <div class="cartao-mini"><img id="paypal-img" src="Estaticos/paypal.png" alt="">PayPal</div>
    <div class="cartao-mini"><img id="pix-img" src="Estaticos/pix.png" alt="">PIX</div>
    </div>
    <p>Ou doe usando cartão de crédito</p>
    <form action="" class="form-doacoes">
        <br>
        <input type="text" placeholder="Número do cartão" name="numcartao" required>
        <br><br>
        <input type="text" placeholder="Nome completo" name="nome" required>
        <br><br>
        <div class="datacod">
        <input id="datavenc" type="date" placeholder="Data de vencimento" name="datavenc" required>
        <input id="codseg" type="text" placeholder="Código de segurança" name="codseg" required>
        </div>
    </form>
    </div>
    </center>

    <footer class="footer" id="footer">
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