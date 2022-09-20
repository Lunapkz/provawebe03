<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Produto dos Cliente</title>
</head>
<body>
    <?php
    //recuperação de dados
    $NR_PRODUTO = $_GET["num"];
    $PRECO_UNITARIO = $_GET["preco"];
    $QUANT_ESTOQUE = $_GET["quant"];

    include_once("conexaobd.php");
    $sql ="INSERT INTO PRODUTO(NOME,PRECO_UNITARIO,QUANT_ESTOQUE) VALUES('$NR_PRODUTO','$PRECO_UNITARIO','$QUANT_ESTOQUE');";

    mysqli_query($connection,$sql) or die ("Erro ao cadastrar cliente");

    //saida

    echo "Cliente cadastrado com sucesso!<br><br>";
    echo "<strong>Nome do Produto:</strong> $NR_PRODUTO<br>";
    echo "<strong>Preço do Produto:</strong> $PRECO_UNITARIO<br>";
    echo "<strong>Quantidade do Produto</strong> $QUANT_ESTOQUE<br>";

    ?>
</body>

</html>