<html>
    <head>
        <title>Cliente</title>
    </head>
    <body>
        <h1 ALIGN="CENTER">Cliente</h1>
    <?php
        $clientes= array();

        $cliente[]=array(
                 'nome'=> "Henrique",
                     'data'=>"02/10/2022",
                     'cpf'=>"7657865765",
                     'produto'=> "Moto20",
                     'valor'=> "R$2.000");

        $cliente[]=array(
                     'nome'=> "Damiao",
                     'data'=>"03/10/2022",
                     'cpf'=>"876868954",
                     'produto'=> "Galaxy A03",
                     'valor'=> "R$5.000");

        $cliente[]=array(
                     'nome'=> "Karol",
                     'data'=>"04/10/2022",
                     'cpf'=>"4646546454",
                     'produto'=> "Galaxy Z Fold4",
                     'valor'=> "R$1.000"); 

        $cliente[]=array(
                     'nome'=> "Fernada",
                     'data'=>"05/10/2022",
                     'cpf'=>"24232346436",
                     'produto'=> "Moto g20",
                     'valor'=> "R$3.400");

        $cliente[]=array(
                     'nome'=> "Renata",
                     'data'=>"06/10/2022",
                     'cpf'=>"678676436543",
                     'produto'=> "iPhone 11",
                     'valor'=> "R$10.000"); 


    ?>

    <table border="1" ALIGN="CENTER">
        <tr>
            <th>Nome</th>
            <th>Data</th>
            <th>CPF</th>
            <th>Produto</th>
            <th>Valor</th>
        </tr>

        <?php
        foreach($cliente as $cl){
        ?>
        <tr>
            <td ALIGN="CENTER"><?php echo $cl['nome']; ?> </td>
            <td ALIGN="CENTER"><?php echo $cl['data']; ?></td>
            <td ALIGN="CENTER"><?php echo $cl['cpf']; ?></td>
            <td ALIGN="CENTER"><?php echo $cl['produto']; ?></td>
            <td ALIGN="CENTER"><?php echo $cl['valor']; ?></td>
        </tr>
        <?php } ?>

    </table>

    </body>
</html>