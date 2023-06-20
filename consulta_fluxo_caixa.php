<?php
    include("conexao.php");
    $saldo = ['saldo'];
    $saida = ['saida'];
    $entrada = ['entrada'];

    echo "<h1>Consulta de Fluxo de Caixa</h1>";
    echo "Saldo Total <br>";
    echo "Total Saídas <br>";
    echo "Total Entradas <br>";

    $sql = "INSERT INTO fluxo_caixa (saldo, saida, entrada)";

    $result = mysqli_query($con, $sql);

    if($tipo == 'entrada') {
        $sql="select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
    } else if($tipo == 'saida'){
        $sql="select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
    } else if($tipo == 'saldo'){
        $sql="select sum(case when tipo = 'entrada' then valor else 0 end) - 
                     sum(case when tipo = 'saida' then valor else 0 end) as valor
                    from fluxo_caixa";
    }
        
?>