<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            include('conexao.php');
            $sql = "SELECT * FROM fluxo_caixa";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result);
        ?>
        <h1>Consulta de Fluxo de Caixa</h1>
        <table align="center" border="1" width="500">

            <tr>
                <th>Código</th>
                <th>Data</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th>Historico</th>
                <th>Cheque</th>
                <th>Excluir</th>
            </tr>
            <?php
                do{
                    if($row)
                    {
                        echo "<td>".$row['codigo_fluxo_caixa']."</td>";
                        echo "<td>".$row['data_fluxo_caixa']."</td>";
                        echo "<td>".$row['tipo_fluxo_caixa']."</td>";
                        echo "<td>".$row['valor_fluxo_caixa']."</td>";
                        echo "<td>".$row['historico_fluxo_caixa']."</td>";
                        echo "<td>".$row['cheque_fluxo_caixa']."</td>";
                        echo "<td><a href='excluir_fluxo_caixa.php?id_usuario=".$row['id_usuario']."'>Deletar</a></td>";
                        echo "</tr>";
                    }
                }while($row = mysqli_fetch_array($result))
            ?>
            <a href = "index.php">Voltar</a>
        </table>

</body>
</html>