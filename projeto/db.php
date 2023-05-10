<?php

//variavel do tipo constante
define("HOST", 'localhost');
define("USER", 'root');
define("PASSWORD", '');
define("NAME_DATABASE", 'escola');

//configurações de conexão com o banco de dados MYSQL
$connection = mysqli_connect(HOST, USER, PASSWORD, NAME_DATABASE);

