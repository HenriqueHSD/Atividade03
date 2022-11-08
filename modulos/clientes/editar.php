<?php 

if(isset($_GET["id"])&& is_numeric($_GET["id"])){
	$id = $_GET["id"];
	$sql="SELECT * FROM cliente WHERE id = :id";
	$stmt=conexao()->prepare($sql);
	$stmt->bindParam(':id', $id, PDO: : PARAM_INT);
	$cliente = $stmt->execute();
	
?>

<form method="POST" action="">
   
    Nome<input type="text" class="form-control" name="nome"/><br/>
    Data <input type="text" class="form-control" name="data"/> <br/>
    CPF<input type="text" class="form-control" name="cpf"/> <br/>
    Produto <input type="text" class="form-control" name="produto"/> <br/>
    Valor <input type="text" class="form-control" name="valor"/> <br/>


    <input type="submit" name="botao" value="Salvar"/>
    
</form>

<?php
}
?>