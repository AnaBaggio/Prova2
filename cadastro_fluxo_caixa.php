<?php
    include("conexao.php");
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = number_format($number, 0.01);
    $historico = $_POST['historico'];

    echo "<h1>Cadastro de Fluxo de Caixa</h1>";
    echo "Data: $data <br>";
    echo "Tipo: $tipo <br>";
    echo "Valor: $valor <br>";
    echo "Historico: $historico <br>";
    echo "Cheque: $cheque <br>";

    $sql = "INSERT INTO fluxo_caixa (data_fluxo_caixa, tipo_fluxo_caixa, valor_fluxo_caixa, historico_fluxo_caixa, cheque_fluxo_caixa)";

    $sql .= " VALUES ('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";

    echo $sql."<br>";
    $result = mysqli_query($con, $sql);

    if ($result)
        echo "Dados cadastrados com sucesso!";
    else
        echo "Erro ao tentar cadastrar!";
        
?>