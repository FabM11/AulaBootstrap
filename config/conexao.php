<?php

$porta="localhost:3307";
$nomedoBanco="conexao";
$usuarioConexao="root";
$senha="";

$conexao=new PDO("mysql:host=$porta; dbname=$nomedoBanco;","$usuarioConexao","$senha");
?>