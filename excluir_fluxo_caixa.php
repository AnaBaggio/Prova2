<?php
    include('conexao.php');
    $id=$_GET['id_fluxo_caixa'];
   
    echo "<h1>Excluir Informações</h1>";
    echo "<p>ID: $id</p>";
    $sql = "DELETE FROM fluxo_caixa
            WHERE id=$id";
echo $sql."<br>";
$result = mysqli_query($con, $sql);
if($result)
    echo "Informações deletadas com sucesso!<br>";
else
    echo "Erro ao deletar: ".mysqli_error($con)."!";
?>
<a href="index.php">Voltar</a>