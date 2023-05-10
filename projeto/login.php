<?php
include 'db.php'; 
//tema de casa
//pegar dados do formulario
$usuarioDigitado = $_POST["usuario"];
$senhaDigitada= $_POST["senha"];

//cria query para buscar os dados do banco de dados
$query ="SELECT * FROM usuarios WHERE  usuario = $ususarioDigitado";

 //executa a pesquisa no banco de dados

$usuario = mysqli_query($conection, $query);


if($senhaSalva === $senhaDigitada && $usuarioSalvo === $usuarioDigitado){
    //criando sessao de usuario
    //para vereficar se ja foi feito o login 
    session_start();
    $_SESSION["logged"] = true;
    $_SESSION["usuario"] = $usuarioSalvo;

    //redireciona para a tela de inicio do sistema 
    header("location:index.php");

}else{
    //redireciona para a tela de autenticação novamente
    //se caso o usuario ou a senha são invalidos
   header("location:home.php?erro=1");
}

?>