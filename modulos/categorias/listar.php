<html>
    <head>

        <title>Categorias</title>

    </head>

    <body>

        <h1 ALIGN="CENTER">Categorias</h1>
        <?php
        include('conexao.php');
        

        $sql="SELECT*FROM categoria";
        $stmt=conexao()->prepare($sql);
        $stmt->execute();

        $categoria=$stmt->fetchAll();

        print_r($categoria);
            /*$categoria= array();

                $categoria[]=array(
                    'celular'=> "Moto20",
                    'roupa'=> "Short",
                    'sapato'=>"Tênis",
                    'livro'=>"Romance",
                    'processador'=>"Intel core i5 11",
                );
                $categoria[]=array(
                    'celular'=> "Galaxy A03",
                    'roupa'=> "Blusa",
                    'sapato'=>"Sandalia",
                    'livro'=>"Drama",
                    'processador'=>"Intel core i7 10",
                );
                $categoria[]=array(
                    'celular'=> "Galaxy Z Fold4",
                    'roupa'=> "Meia",
                    'sapato'=>"Bota",
                    'livro'=>"Terror",
                    'processador'=>"Amd ryzen 5 3600",
                );
                $categoria[]=array(
                    'celular'=> "Moto g20",
                    'roupa'=> "Calça Jeans",
                    'sapato'=>"Sapatilha",
                    'livro'=>"Suspense",
                    'processador'=>"Amd ryzen 9 5000",
                );

                $categoria[]=array(
                    'celular'=> "iPhone 11",
                    'roupa'=> "Saia",
                    'sapato'=>"Salto Alto",
                    'livro'=>"Auto ajudar",
                    'processador'=>"Intel xeon",
                );
    


     */
         ?>

    <table border="1" ALIGN="CENTER">
        <tr>
            <th>Celular</th>
            <th>Roupa</th>
            <th>Sapato</th>
            <th>Livro</th>
            <th>Processador</th>
        </tr>

        <?php
        foreach($categoria as $ca){
        ?>
        <tr>
            <td ALIGN="CENTER"><?php echo $ca['celular']; ?> </td>
            <td ALIGN="CENTER"><?php echo $ca['roupa']; ?></td>
            <td ALIGN="CENTER"><?php echo $ca['sapato']; ?></td>
            <td ALIGN="CENTER"><?php echo $ca['livro']; ?></td>
            <td ALIGN="CENTER"><?php echo $ca['processador']; ?></td>
            <td>
            <a href="?modulo=categoria&acao=excluir&id=<?=$ca['id_ca'];?>">
        excluir
        </a>
        </td>
        <td>
            <a href="?modulo=categoria&acao=editar&id=<?=$ca['id_ca'];?>">
        editar
        </a>
        </td>

        </tr>
        
        <?php } ?>
    </table>

</body>
</html>