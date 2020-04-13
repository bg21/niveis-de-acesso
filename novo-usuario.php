<?php
    include('config.php');
    if(isset($_POST['acao'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $cargo = $_POST['cargo'];
        $criptografada = password_hash($senha, PASSWORD_DEFAULT);

        if($usuario == '' || $senha == ''){
            echo 'Preencha o campo.';
        }else{
            $sql = $pdo->prepare("INSERT INTO tb_usuarios VALUES (null, ?, ?, ?)");
            $sql->execute([$usuario, $criptografada, $cargo]);
            echo 'Usuário cadastrado com sucesso';
        }
    }   
?>
<form method="post">
    <input type="text" name="usuario" placeholder="Usuário">
    <input type="password" name="senha" placeholder="Senha">
    <input type="text" name="cargo" placeholder="Permissão (1, 2 ou 3)">
    <input type="submit" name="acao" value="Criar">
</form>
