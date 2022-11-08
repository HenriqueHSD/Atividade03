<html>
    <head>
        <title> Pagina PHP</title>
    </head>
    <body>
        <header> Topo do template</header>
        <nav>
            <a href="?modulo=modulos/produto&acao=listar">Produto</a>
            <a href="?modulo=modulos/clientes&acao=listar">Cliente</a>
            <a href="?modulo=modulos/categorias&acao=listar">Categoria</a>
            <a href="?modulo=modulos/vendas&acao=listar">Venda</a>
            <a href="?modulo=modulos/vendedores&acao=listar">Vendedores</a>
        
</nav>
<?php 

if(isset($_GET['modulo'])){
    $modulo=$_GET['modulo'];
}else{
    $modulo=false;
}


if(isset($_GET['acao'])){
    $acao=$_GET['acao'];
}else{
    $acao=false;
}

$url=$modulo."/".$acao.".php";

if($modulo&&$acao&&file_exists($url)){
include($url); 
}else{
    echo 'Pagina Solicitada nao Existe';
}
?>

<footer>Rodape do Template</footer>
</body>
</html>