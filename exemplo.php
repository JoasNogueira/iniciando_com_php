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
mostrarNome();



?>