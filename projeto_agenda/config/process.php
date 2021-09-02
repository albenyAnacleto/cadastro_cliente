<?php
session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

//MODIFICAÇÕES NO BANCO
if(!empty($data)) {
    
// criar contato

    if($data["type"] === "create") {

        $name = $data["name"];
        $sobrenome = $data["sobrenome"];
        $telefone = $data["telefone"];
        $email = $data["email"];
        $cpf = $data["cpf"];
        $rua = $data["rua"];
        $numero = $data["numero"];
        $complemento = $data["complemento"];
        $cep = $data["cep"];
        $cidade = $data["cidade"];
        $estado = $data["estado"];

        $query = "INSERT INTO client (name, sobrenome, telefone, email, cpf, rua, numero, complemento, cep, cidade, estado) VALUES (:name, :sobrenome, :telefone, :email, :cpf, :rua, :numero, :complemento, :cep, :cidade, :estado)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":sobrenome", $sobrenome);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":cpf", $cpf);
        $stmt->bindParam(":rua", $rua);
        $stmt->bindParam(":numero", $numero);
        $stmt->bindParam(":complemento", $complemento);
        $stmt->bindParam(":cep", $cep);
        $stmt->bindParam(":cidade", $cidade);
        $stmt->bindParam(":estado", $estado);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato cadastrado com sucesso!";        
        } catch(PDOException $e) {
            //erro na conexao
            $error = $e->getMessage();
            echo "Erro: $error";
        }


    } else if($data["type"] === "edit") {

        $name = $data["name"];
        $sobrenome = $data["sobrenome"];
        $telefone = $data["telefone"];
        $email = $data["email"];
        $cpf = $data["cpf"];
        $rua = $data["rua"];
        $numero = $data["numero"];
        $complemento = $data["complemento"];
        $cep = $data["cep"];
        $cidade = $data["cidade"];
        $estado = $data["estado"];
        $id = $data["id"];

        $query = "UPDATE client 
                  SET name = :name, sobrenome = :sobrenome, telefone= :telefone, email = :email, cpf = :cpf, rua = :rua, numero = :numero, complemento = :complemento, cep = :cep, cidade = :cidade, estado = :estado 
                  WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":sobrenome", $sobrenome);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":cpf", $cpf);
        $stmt->bindParam(":rua", $rua);
        $stmt->bindParam(":numero", $numero);
        $stmt->bindParam(":complemento", $complemento);
        $stmt->bindParam(":cep", $cep);
        $stmt->bindParam(":cidade", $cidade);
        $stmt->bindParam(":estado", $estado);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso!";        
        } catch(PDOException $e) {
            //erro na conexao
            $error = $e->getMessage();
            echo "Erro: $error";
        }


    } else if($data["type"] === "delete") {
        $id = $data["id"];
        $query = "DELETE FROM client WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);        

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato removido com sucesso!";        
        } catch(PDOException $e) {
            //erro na conexao
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }

// redirect home

header("Location:" . $BASE_URL . "../index.php");

// SELEÇOES DE DADOS
} else {
    $id;
if(!empty($_GET)) {
    $id = $_GET["id"];
}

// retorna o dado de um contato

if(!empty($id)) {

    $query = "SELECT * FROM client WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $client = $stmt->fetch();

} else {
    // retorna todos os contatos
$client = [];
$query = "SELECT * FROM client";
$stmt = $conn->prepare($query);
$stmt->execute();
$client = $stmt->fetchAll();

}

}
// fechar conexão
$conn = null;



