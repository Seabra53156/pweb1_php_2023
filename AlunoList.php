<?php
include "./header.php";
include '../db.class.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fernando</title>
</head>
<body>


<?php
    $db = new DB();
    $db->conn();

    $dados = $db->select("aluno");

   
    if(!empty($_GET['id'])){
       $db->destroy("aluno",$_GET['id']);
       header('location: AlunoList.php');

    }

    if(!empty($_POST)){

        $dados = $db->search("aluno",$_POST);
    }else
    {
      $dados = $db->select("aluno");
    }
?>

<div>
    <h3> Listagem de Dados</h3>
    <form action="AlunoList.php" method="post">
      <select name="tipo">
        <option value="nome">Nome</option>
        <option value="cpf">CPF</option>
        <option value="telefone">Telefone</option>
      </select>
<input type="text" name="valor"/>
<button type="submit">Buscar</button>

    <a href="AlunoForm.php">Cadastrar</a> 
    </form>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col"># ID</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>

  <?php
   foreach ($dados as $item){
    echo "<tr>";
    echo "<th scope='row'>$item->id</th>";
    echo "<td>$item->nome </td>";
    echo "<td>$item->cpf </td>";
    echo "<td>$item->telefone </td>";
    echo "<td><a href='AlunoList.php?id=$item->id'>Editar</a></td>";
    echo "<td><a onclick='return confirm(\"Deseja excluir:\")'
                href='AlunoList.php?id=$item->id'>Deletar</a>
                </td>";
    echo "</tr>";
}
  
  ?>
  </tbody>
</table>

<?php
include "./footer.php";
?>