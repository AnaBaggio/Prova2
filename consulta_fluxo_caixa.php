<?php
    include("conexao.php");
    $saldototal;
    $totalsaidas;
    $totalentradas;

    echo "<h1>Consulta de Fluxo de Caixa</h1>";
    echo "Saldo Total <br>";
    echo "Total Saídas <br>";
    echo "Total Entradas <br>";

    $sql = "INSERT INTO fluxo_caixa (saldototal_fluxo_caixa, totalsaidas_fluxo_caixa, totalentradas_fluxo_caixa)";

    $result = mysqli_query($con, $sql);
 
?>