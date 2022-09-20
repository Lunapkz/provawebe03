<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Produto dos Cliente</title>
</head>
<body>
    <?php
    //recuperação de dados
    $NR_PEDIDO = $_GET["nump"];
    $NR_PRODUTO = $_GET["nupd"];
    $PRECO_UNITARIO = $_GET["preco"];
    $QUANTIDADE = $_GET["quant"];

    include_once("conexaobd.php");
    $sql ="INSERT INTO ITEM_PEDIDO(NR_PEDIDO,NR_PRODUTO,PRECO_UNITARIO,QUANTIDADE) VALUES($NR_PEDIDO,$NR_PRODUTO,$PRECO_UNITARIO,$QUANTIDADE);";

    mysqli_query($connection,$sql) or die ("Erro ao cadastrar cliente");

    //saida

    echo "Cliente cadastrado com sucesso!<br><br>";
    echo "<strong>Número do Pedido:</strong>$NR_PEDIDO<br>";
    echo "<strong>Nome do Produto:</strong>$NR_PRODUTO<br>";
    echo "<strong>Preço do Produto:</strong>$PRECO_UNITARIO<br>";
    echo "<strong>Quantidade do Produto:</strong>$QUANTIDADE<br>";

    ?>
</body>

</html>