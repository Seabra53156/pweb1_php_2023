
<?php
include '../db.class.php';
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$db = new DB();
    $db->conn();
    if($_POST){
        
    $dados = $db->insert("aluno", $_POST);
    echo "<h4>Registro Salvo com Sucesso!</H4>";
        var_dump($_POST);
    }

    ?>
<body>



<h3>Formulário Aluno</h3>

<form action="AlunoForm.php" method="post">

    <label for="nome">Nome</label><br>
    <input type="text" name="nome"><br>

    <label for="cpf">CPF</label><br>
    <input type="text" name="cpf"><br>


    <label for="telefone">Telefone</label><br>
    <input type="text" name="telefone"><br>
    <a href="AlunoList.php">Voltar</a> 

<button type ="submit">Salvar</button>

</form>
    
</body>
</html>

