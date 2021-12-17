<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Dashboard</title>
</head>
<body>

    <!--Menu lateral-->
    <div id="menu-lateral">
            <h1 class="logo">LOGO</h1>
            <ul class="ul-menu">
                <a href="dashboard.php"><li><img src="assets/icon/pagina-inicial.png" class="icon"><p class="paragrafo-menu">Home</p></li></a>
                <a href="dashboard.php?p=relatorio"><li><img src="assets/icon/relatorio-de-negocios.png" class="icon"><p class="paragrafo-menu">Relatorios</p></li></a>
                <a href="#" id="btn-acordion-design"><li id="li-acordion"><img src="assets/icon/lampada.png" class="icon"><p class="paragrafo-menu">Designs</p></li></a>
                <div id="acordion-design">
                  <ul>
                    <li><a href="#">Meus Designs</a></li>
                    <li><a href="#">Encomendas</a></li>
                    <li><a href="#">Saiba Mais</a></li>
                  </ul>
                </div>
                <a href="dashboard.php?p=minhaconta"><li><img src="assets/icon/user.png" class="icon"><p class="paragrafo-menu">Minha Conta</p></li></a>
                <a href="dashboard.php?p=planos"><li><img src="assets/icon/medalha-de-premio.png" class="icon"><p class="paragrafo-menu">Planos</p></li></a>
                <a href="dashboard.php?p=suporte"><li><img src="assets/icon/suporte-online.png" class="icon"><p class="paragrafo-menu">Suporte</p></li></a>
            </ul>
    </div>
    <button id="btn-mobile">|||</button>
    <main id="main">

      <?php

      $valor = @$_GET['p'];

      if(isset($valor)){
        if($valor == 'relatorio'){
          require_once('pages/relatorios.php');
        }if($valor == 'minhaconta'){
          require_once('pages/minhaconta.php');
        }if($valor == 'planos'){
          require_once('pages/planos.php');
        }if($valor == 'suporte'){
          require_once('pages/suporte.php');
        }
      }else{
        require_once('pages/dados_dashboard.php');
      }
      ?>
  </main>
    
    <script src="assets/javascript/script.js"></script>

</body>
</html>