<html>
    <head>
        <title>Produtos</title>
    </head>

    <body>
<h1 ALIGN="CENTER">Produtos</h1>
<?php
    $produto= array();


    $produto[]=array(
        'produto'=>"Tênis",
        'estoque'=>65,
        'valor'=>"R$120",
        'data'=>"05/09/2022",
        'marca'=> "Adidas");

    $produto[]=array(
        'produto'=>"Bota",
        'estoque'=>32,
        'valor'=>"R$405",
        'data'=>"10/09/2022",
        'marca'=> "Dakota");

    $produto[]=array(
        'produto'=>"Galaxy Z Fold4",
        'estoque'=>45,
        'valor'=>"R$2.000",
        'data'=>"20/09/2022",
        'marca'=> "Samsung");

    $produto[]=array(
        'produto'=>"Amd ryzen 9 5000",
        'estoque'=>18,
        'valor'=>"R$2.500",
        'data'=>"01/09/2022",
        'marca'=> "AMD");  

    $produto[]=array(
        'produto'=>"iPhone 11",
        'estoque'=>70,
        'valor'=>"R$10.000",
        'data'=>"03/09/2022",
        'marca'=> "Apple");  


    ?>

    <table border="1" ALIGN="CENTER">
        <tr>
            <th>Produto</th>
            <th>Estoque</th>
            <th>Valor de fábrica</th>
            <th>Valor de venda</th>
            <th>Fornecedor</th>
        </tr>

        <?php
        foreach($produto as $pr){
        ?>
        <tr>
            <td ALIGN="CENTER"><?php echo $pr['produto']; ?> </td>
            <td ALIGN="CENTER"><?php echo $pr['estoque']; ?></td>
            <td ALIGN="CENTER"><?php echo $pr['valor']; ?></td>
            <td ALIGN="CENTER"><?php echo $pr['data']; ?></td>
            <td ALIGN="CENTER"><?php echo $pr['marca']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>