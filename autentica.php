<?php
include 'class/Usuario.class.php';

$objUsuario = new Usuario();

$objUsuario->setUsuario($_POST['usuario']);
$objUsuario->setSenha($_POST['senha']);
$lembrar = isset($_POST['lembrar']) ? $_POST['lembrar'] : "nao";
//var_dump($objUsuario);

if (($objUsuario->getUsuario() == "admin") && ($objUsuario->getSenha() == "admin")) {
    echo "<h3>Usuario Valido</h3>";
    echo "Usuario.........: " . $objUsuario->getUsuario();
    echo "<br>Senha............: " . $objUsuario->getSenha();
    echo "<br>Lembrar........: " . $lembrar;
    echo "<br/>";
    echo '<a href="index.html" class="botao"><h3>Deslogar</h3></a>';
   
    //header("Location: AQUI VOCE DIGITA O NOME DO ARQUIVO QUE QUER DIRECIONAR EXEMPLO:INDEX.PHP");//direcionar a uma pagina
} else {
    //header("Location: index.html");
    echo "<h3>Usuario Invalido</h3></br>"; 
    echo '<a href="index.html" class="botao"><h3>Voltar</h3></a>';
}
?>
<!--<link rel="stylesheet" href="login/signin.css"/>-->
<!--essa linha e paraacessar o CSS que eu configurei se quiser que o botao 
fique estilizado é so tirar do comentario to mandando o arquivo CSS tambem e so substituir-->