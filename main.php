<?php
    include('config.php');
    if($_SESSION['login'] != true){
        header('Location: index.php');
        die();
    }
    echo '<h2>Bom dia '.$_SESSION['usuario'].' - Permissão: '.$_SESSION['cargo'].'</h2>';   
    if(isset($_GET['sair'])){
        session_destroy();
        header('Location: index.php');
        die();
    }
?>
<h2><a href="?sair">Sair</a></h2>

<nav>
    <ul>
        <li <?php Painel::verificaPermissaoMenu(3); ?>><a href="http://localhost/Projetos/login/pagina-so-master.php">Somente o Master pode ver</a></li>
        <li <?php Painel::verificaPermissaoMenu(1); ?>><a href="http://localhost/Projetos/login/pagina-comum-a-todos.php">Todos os usuários podem ver</a></li>
        <li <?php Painel::verificaPermissaoMenu(1); ?>><a href="http://localhost/Projetos/login/pagina-comum-a-todos.php">Todos os usuários podem ver</a></li>
        <li <?php Painel::verificaPermissaoMenu(2); ?>><a href="http://localhost/Projetos/login/pagina-so-admin.php">Somente o Master e o Admin e o Master podem ver</a></li>
    </ul>
</nav>


