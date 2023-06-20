<?php
    include("conexao.php");
    $data = date('d/m/Y');
    $tipo;
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];

    echo "<h1>Cadastro de Fluxo de Caixa</h1>";
    echo "Data: $data <br>";
    echo "Tipo: $tipo <br>";
    echo "Valor:  <br>";
    echo "Historico: $historico <br>";
    echo "Cheque: $cheque <br>";

    $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)";

    $sql .= " VALUES ('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";

    echo $sql."<br>";
    $result = mysqli_query($con, $sql);

    if ($result)
        echo "Dados cadastrados com sucesso!";
    else
        echo "Erro ao tentar cadastrar!";
        
?>