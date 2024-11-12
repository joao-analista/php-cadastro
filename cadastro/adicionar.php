
<?php
session_start();
include_once("conexao.php");

//com o filter_input, recolhemos o valor e podemos filtrar o mesmo, diminuindo linhas de código
$nome = filter_input(INPUT_POST, 'nome');
//Remove todos os caracteres ilegais de um endereço de e-mail
//receber. estamos utilizando um POST, logo, um input post. filter para limpar os dados que vem do formulário
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
//$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
//estou inserindo os dados na tabela usuários na variável resultado_usuario. A query está pronta.
$resultado_cadastro = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')"; 
//executo a query que está dentro da variável resultadoado_usuario 
$resultadoado_cadastro = mysqli_query($conn, $resultado_cadastro);

//quero que quando cadastrado com sucesso, quero que ele faça o redirecionamento para a página index
	header("Location: index.php");
?>



