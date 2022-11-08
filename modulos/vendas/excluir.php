<?php
include('conexao.php');


if(isset($_GET["id"])&& is_numeric($_GET["id"])){
		
	$sql="DELETE FROM vendas WHERE id = :id";
	$stmt=conexao()->prepare($sql);
	$stmt->bindParam(':id',$_GET["id"]);
	$vendas = $stmt->execute();
	
	if($vendas){
		echo "Registro Excluido com Sucesso";
	}else{		
		echo "Erro ao Excluir Registro";
	}
	
	
}

?>