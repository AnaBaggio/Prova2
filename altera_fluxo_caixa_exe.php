<?php
    include('conexao.php');
    $id_fluxo_caixa=$_POST['id_fluxo_caixa'];
    $data=$_POST['data'];
    $tipo=$_POST['tipo'];
    $valor=$_POST['valor'];
    $historico=$_POST['historico'];

    echo "<h1>Alteração de dados</h1>";
    echo "<p>Fluxo do Caixa: $nome</p>";
    $sql = "UPDATE fluxo_caixa SET 
            data_fluxo_caixa = '$data',
            tipo_fluxo_caixa = '$tipo',
            valor_fluxo_caixa = '$valor',
            historico_fluxo_caixa = '$historico'
            cheque_fluxo_caixa = '$cheque'
            WHERE id_fluxo_caixa=$id_fluxo_caixa";
echo $sql."<br>";
$result = mysqli_query($con, $sql);
if($result)
    echo "Dados alterados com sucesso!<br>";
else
    echo "Erro ao alterar dados: ".mysqli_error($con)."!";
?>
<a href="index.php">Voltar</a>