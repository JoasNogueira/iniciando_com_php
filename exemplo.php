<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>

<div style="text-align: center;">
<h3> Resultado: 
<?php 

function mostrarNome(){

	$nome = "";
	$sobrenome = "";
	if (isset($_GET["nome"])&&isset($_GET["sobrenome"])&&!empty ( $_GET["nome"] )&&!empty($_GET["sobrenome"])) {
		$nome = $_GET["nome"];
		$sobrenome = $_GET["sobrenome"];
	}
	else{
		$nome = "Nome ou sobrenome não podem estar vazios";
	}
	echo $nome.' '.$sobrenome;
}

function calcular($acao){

	$n1 = 0;
	$n2 = 0;
	if (isset($_GET["n1"])&&isset($_GET["n2"])&&$_GET["n1"]!=""&&$_GET["n2"]!="") {
		$n1 = $_GET["n1"];
		$n2 = $_GET["n2"];
		switch ($acao) {
			case 'somar':
 				$soma = ($n1 + $n2);
 			break;
 			case 'sub':
 				$soma = ($n1 - $n2);
 			break;
 			case 'mult':
 				$soma = ($n1 * $n2);
 			break;
 			case 'divi':
 				$soma = ($n1 / $n2);
 			break;
		}
	}
	else{
		$soma = "Nenhum campo pode estar vazio!";
	}
	echo $soma;
}

$acao = "";
if (isset($_GET["acao"])&&$_GET["acao"]!="") {
	$acao = $_GET["acao"];
}
switch ($acao) {
 	case 'nome':
 		mostrarNome();
 		break;
 	case 'somar':
 		calcular($acao);
 		break;
 	case 'sub':
 		calcular($acao);
 		break;
 	case 'mult':
 		calcular($acao);
 		break;
 	case 'divi':
 		calcular($acao);
 		break;
 	default:
 		echo "Nenhuma acao a ser executada";
 		break;
}

?>
</h3>
<br>
<br>
<a href="index.html" class="btn btn-primary">Voltar</a>
</div>
</body>
</html>