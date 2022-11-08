<html>
<head>
    <title>Vendas</title>
</head>
<body>
<h1 ALIGN="CENTER">Vendas</h1>
<?php
    $venda= array();

    $venda[]=array(
        'cliente'=>"Henrique",
        'produto'=> "Tenis",
        'quantidade'=> 3,
        'valor'=>"R$450",
        'forma'=> "Débito");

    $venda[]=array(
        'cliente'=>"Damiao",
        'produto'=> "Moto20",
        'quantidade'=> 2,
        'valor'=>"R$3.000",
        'forma'=> "Crédito");    

    $venda[]=array(
        'cliente'=>"Karol",
        'produto'=> "Galaxy A03",
        'quantidade'=> 1,
        'valor'=>"R$1.000",
        'forma'=> "Crédito");

    $venda[]=array(
        'cliente'=>"Fernada",
        'produto'=> "iPhone 11",
        'quantidade'=> 11,
        'valor'=>"R$100.000",
        'forma'=> "Dinheiro");

    $venda[]=array(
        'cliente'=>"Renata",
        'produto'=> "Amd ryzen 9 5000",
        'quantidade'=> 3,
        'valor'=>"R$10.000",
        'forma'=> "Pix");

    
                   
   
      
    ?>

    <table border="1" ALIGN="CENTER">
        <tr>
            <th>Cliente</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th>Forma de pagamento</th>
        </tr>

        <?php
        foreach($venda as $ve){
        ?>
        <tr>
            <td ALIGN="CENTER"><?php echo $ve['cliente']; ?> </td>
            <td ALIGN="CENTER"><?php echo $ve['produto']; ?></td>
            <td ALIGN="CENTER"><?php echo $ve['quantidade']; ?></td>
            <td ALIGN="CENTER"><?php echo $ve['valor']; ?></td>
            <td ALIGN="CENTER"><?php echo $ve['forma']; ?></td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>