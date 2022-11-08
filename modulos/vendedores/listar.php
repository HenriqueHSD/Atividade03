<html>

<head>

    <title>Vendedores</title>
</head>
<body>
<h1 ALIGN="CENTER">Vendedores</h1>
<?php
    $vendedore= array();

    $vendedore[]= array(
        
        'nome'=>"Brito",
        'idade'=> 33,
        'data'=>"13/09/1989",
        'cpf'=> "5435345345",
        'salario'=>"R$12.000");

    $vendedore[]= array(
        
        'nome'=>"Renata",
        'idade'=> 43,
        'data'=>"15/06/1979",
        'cpf'=> "123213215654",
        'salario'=>"R$2.000");

    $vendedore[]= array(
        
        'nome'=>"Pedro",
        'idade'=> 23,
        'data'=>"28/09/1999",
        'cpf'=> "0879074234",
        'salario'=>"R$2.000");

    $vendedore[]= array(
        
        'nome'=>"Matheus",
        'idade'=> 46,
        'data'=>"18/06/1976",
        'cpf'=> "08734534",
        'salario'=>"R$20.000"); 

    $vendedore[]= array(
        
    'nome'=>"Cassio",
    'idade'=> 26,
    'data'=>"30/05/1995",
    'cpf'=> "454356356",
    'salario'=>"R$1.000");

    
?>

    <table border="1" ALIGN="CENTER">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>Salário</th>
        </tr>

        <?php
        foreach($vendedore as $vdd){
        ?>
        <tr>
            <td ALIGN="CENTER"><?php echo $vdd['nome']; ?> </td>
            <td ALIGN="CENTER"><?php echo $vdd['idade']; ?></td>
            <td ALIGN="CENTER"><?php echo $vdd['data']; ?></td>
            <td ALIGN="CENTER"><?php echo $vdd['cpf']; ?></td>
            <td ALIGN="CENTER"><?php echo $vdd['salario']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>