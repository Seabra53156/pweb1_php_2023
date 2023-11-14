<?php
include './header.php';
include '../db.class.php';

    $db = new DB();
    $db->conn();

    if(!empty($_POST['id'])){
        $db->update("usuario", $_POST);
        header("location: usuarioList.php");

    }

    if($_POST){
        
    $db->insert("usuario", $_POST);
      //  var_dump($_POST);
      header("location: usuarioList.php");

    }
    if(!empty($_GET['id'])){
        $usuario = $db->find("usuario",$_GET['id']);
        //var_dump($usuario);
    }
    
?>

<h2>Sistema academico</h2>
<h3>Formulário registrar usuario</h3>

<form action="usuarioForm.php" method="post">

  <label for="nome">Nome</label><br>
  <input type="text" name="nome">
 
    <label for="email">Email</label><br>
    <input type="email" name="email">

    <label for="cpf">CPF</label><br>
    <input type="text" name="cpf">

    <label for="senha">Senha</label><br>
    <input type="password" name="senha">

    <label for="c_senha">Confirmar Senha</label><br>
    <input type="password" name="c_senha">

   


    <label for="telefone">Telefone</label><br>
    <input type="text" name="telefone">
  

<button type ="submit">Salvar</button>

</form>
<?php include './footer.php' ?>