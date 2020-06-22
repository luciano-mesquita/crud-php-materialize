<?php
// Sessão
session_start();

// Conexão
include_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "DELETE FROM clientes WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Excluído com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Não foi possível excluir!";
		header('Location: ../index.php');
	endif;
endif;