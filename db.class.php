<?php

class DB {
    public function conn(){
$host = "localhost";
$dbname = "db_aula_pweb1";
$user = "root";
$password = "";

try {
  $conn = new PDO(
    "mysql:host=$host;dbname=$dbname;",
     $user, 
     $password,
     [
      PDO::ATTR_ERRMODE,
      PDO::ERRMODE_EXCEPTION,
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" ,
     ]
     );
    //' echo "Connected successfully";
 return $conn;

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
    }

    public function select($nome_tabela){
        $conn = $this->conn();
        $sql = "SELECT * FROM $nome_tabela";

        $st = $conn->prepare($sql);
        $st->execute();

        return $st->fetchAll(PDO::FETCH_CLASS);
    }
    public function insert($nome_tabela, $dados){
        $conn = $this->conn();
        $sql = "INSERT INTO $nome_tabela(nome, cpf, telefone) 
                values (?,?,?)";

        $st = $conn->prepare($sql);
        $st->execute([
            $dados['nome'],
            $dados['cpf'],  
            $dados['telefone'],
        ]);
            

    }
}   
?>