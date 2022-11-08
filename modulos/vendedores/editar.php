<?php 

if(isset($_GET["id"])&& is_numeric($_GET["id"])){
	$id = $_GET["id"];
	$sql="SELECT * FROM vendedores WHERE id = :id";
	$stmt=conexao()->prepare($sql);
	$stmt->bindParam(':id', $id, PDO: : PARAM_INT);
	$vendedores = $stmt->execute();
	
?>

<form method="POST" action="">
   
Nome<input type="text" class="form-control" name="Nome"/><br/>
Idade <input type="text" class="form-control" name="Idade"/> <br/>
Data de Nascimento<input type="text" class="form-control" name="data_nas"/> <br/>
CPF <input type="text" class="form-control" name="cpf"/> <br/>
Salário <input type="text" class="form-control" name="salario"/> <br/>


    <input type="submit" name="botao" value="Salvar"/>
    
</form>

<?php
}
?>