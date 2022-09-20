<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pedido dos Cliente</title>
</head>
<body>
    <?php
    //recuperação de dados
    $data = $_GET["data"];
    $pedinum = $_GET["pedinum"];

    include_once("conexaobd.php");
    $sql ="INSERT INTO PEDIDO(DATA_PEDIDO,NR_PEDIDO) VALUES('$data','$pedinum');";

    mysqli_query($connection,$sql) or die ("Erro ao cadastrar cliente");

    //saida

    echo "Cliente cadastrado com sucesso!<br><br>";
    echo "<strong>A data do Pedido:</strong> $data<br>";
    echo "<strong>Número do Pedido:</strong> $pedinum<br>";

    ?>
</body>

</html>