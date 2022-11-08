<?php 

if(isset($_GET["id"])&& is_numeric($_GET["id"])){
	$id = $_GET["id"];
	$sql="SELECT * FROM vendas WHERE id = :id";
	$stmt=conexao()->prepare($sql);
	$stmt->bindParam(':id', $id, PDO: : PARAM_INT);
	$vendas = $stmt->execute();
	
?>

<form method="POST" action="">
   
    Cliente<input type="text" class="form-control" name="cliente"/><br/>
    Produto <input type="text" class="form-control" name="produto"/> <br/>
    Quantidade<input type="text" class="form-control" name="quantidade"/> <br/>
    Valor <input type="text" class="form-control" name="valor"/> <br/>
    Forma de Pagamento <input type="text" class="form-control" name="form_p"/> <br/>


    <input type="submit" name="botao" value="Salvar"/>
    
</form>

<?php
}
?>