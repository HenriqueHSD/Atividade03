<html>
    <head>

    </head>
    <body>
    <?php
       include('conexao.php');

        if(isset($_POST["botao"])&&$_POST["botao"]=="Enviar"){
            $celular=$_POST['celular'];
            $roupa=$_POST['roupa'];
            $sapato=$_POST['sapato'];
            $livro=$_POST['livro'];
            $processador=$_POST['processador'];

            $sql="INSERT INTO categoria (celular,roupa,sapato,livro,processador)VALUES(?, ?, ?, ?, ?)";
            $stmt=conexao()->prepare($sql);
            $stmt->bindParam(1,$celular);
            $stmt->bindParam(2,$roupa);
            $stmt->bindParam(3,$sapato);
            $stmt->bindParam(4,$livro);
            $stmt->bindParam(5,$processador);
            $stmt->execute();

            echo"salvo com sucesso";
        }
        
       // id: <input type="text" name="id"/> <br/>
        ?>
        <form method="POST" action="">
        Celular: <input type="text" name="celular"/> <br/>
        Roupa: <input type="text" name="roupa"/> <br/>
        Sapato: <input type="text" name="sapato"/> <br/>
        Livro: <input type="text" name="livro"/> <br/>
        Processador: <input type="text" name="processador"/> <br/>
        <input type="submit" name="botao" value="Enviar"/>

        </form>

    </body>
</html>