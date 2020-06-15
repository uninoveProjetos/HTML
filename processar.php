<?php
session_start();
include_once ("conectar.php");   

#cadastro
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_STRING);
$tel = filter_input(INPUT_POST,'tel',FILTER_SANITIZE_STRING);
$celular = filter_input(INPUT_POST, 'cel', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
$escolaridade = filter_input(INPUT_POST, 'escol', FILTER_SANITIZE_STRING);
$fumante = filter_input(INPUT_POST, 'fumante', FILTER_SANITIZE_STRING);
$filho = filter_input(INPUT_POST, 'filho', FILTER_SANITIZE_STRING);
$quantF = filter_input(INPUT_POST, 'quantF', FILTER_SANITIZE_STRING);
$guarda = filter_input (INPUT_POST,'guarda',FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST,'cep',FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST,'bairro',FILTER_SANITIZE_STRING);
$estcivil = filter_input(INPUT_POST, 'civil', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$estudo = filter_input(INPUT_POST,'rec',FILTER_SANITIZE_STRING);
$salario = filter_input(INPUT_POST,'salario',FILTER_SANITIZE_STRING);
$fumante = filter_input(INPUT_POST, 'fumante', FILTER_SANITIZE_STRING);



//Trocar o nome da tabela abaixo para o nome de sua tabela e inserir o nome das colunas 
//nao alterar o VALUES 
$cadastro = "INSERT INTO testandoconexao(nome,CPF) VALUES('$nome','$CPF')";
$insert = mysqli_query($conexao,$cadastro);

if(mysqli_insert_id($conexao)){
    $_SESSION['msg'] = "Cadastrado com sucesso";
    header("Location: Index.php");}
else{
    $_SESSION['msg'] = "<p style='color:green;'>Cadastrado com sucesso</p>";
    header("Location: Index.php");}
?>