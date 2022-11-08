<?php
include('conexao.php');


if(isset($_GET["id"])&& is_numeric($_GET["id"])){
		
	$sql="DELETE FROM vendedores WHERE id = :id";
	$stmt=conexao()->prepare($sql);
	$stmt->bindParam(':id',$_GET["id"]);
	$vendedores = $stmt->execute();
	
	if($vendedores){
		echo "Registro Excluido com Sucesso";
	}else{		
		echo "Erro ao Excluir Registro";
	}
	
	
}

?>