<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastrado de Cliente</title>
</head>

<body>
    <?php

    // recuperação de Dados
    $nome = $_GET["nome"];
    $cnpj = $_GET["cnpj"];
    
    //processamento 

    include_once("conexaobd.php");

    $sql ="INSERT INTO CLIENTE(NOME,CNPJ) VALUES('$nome','$cnpj');";

    mysqli_query($connection,$sql) or die ("Erro ao cadastrar cliente");

    //saida

    echo "Cliente cadastrado com sucesso!<br><br>";
    echo "<strong>Nome do cliente:</strong> $nome<br>";
    echo "<strong>CNPJ do cliente:</strong> $cnpj<br>";


    ?>
</body>

</html>