<?php
    include('conexao.php'); 
    $id_fluxo_caixa = $_GET['id_fluxo_caixa'];
    $sql = "SELECT * FROM fluxo_caixa where id_fluxo_caixa=$id_fluxo_caixa";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Alteração do Fluxo do Caixa</h1>
        <form action="altera_fluxo_caixa_exe.php" method="post">
            <input name= "id_fluxo_caixa" type= "hidden" value="<?php echo $row['id_fluxo_caixa']?>">
            <div>
                <label for= "data">Data: </label>
                <input type="data" name="data" placeholder="00/00/0000" id="data">
            </div>
            <div>
                <label for= "tipo">Tipo: </label>
                <input type="radio" name="opc" value="entrada"/>Entrada
                <input type="radio" name="opc" value="saida"/>Saída
            </div>
            <div>
                <label for= "valor">Valor: </label>
                <input type="valor" name="valor" placeholder="000.00" id="valor">
            </div>
            <div>
                <label for= "historico">Historico: </label>
                <input type="historico" name="historico" placeholder="Descrição" id="historico">
            </div>
            <div>
                <label for= "cheque">Cheque: </label>
                <select name=cheque>
                    <option value=sim>Sim</option>
                    <option value=nao>Não</option>
                </select><BR><BR>
            </div>
            <div>
                <button type="submit">Salvar</button>
            </div>

    </form>

</body>
</html>