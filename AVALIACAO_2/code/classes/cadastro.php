<?php

class Cadastro {
    public $conn;
    public $stmt;



    public function __construct($url = "localhost", $user = "root", $pass = "", $db_name = "vagas") {
        try {
        $this->conn = new PDO("mysql:dbname=$db_name;host=$url", $user, $pass);
         $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Falha na conexão: " . $e->getMessage();
        }
    }


 
    public function adicionar($nome_empresa, $numero_whatsapp, $email_contato, $descritivo_vaga, $curso) {
        try {
        $this->stmt = $this->conn->prepare("INSERT INTO vagas (nome_empresa, numero_whatsapp, email_contato, descritivo_vaga, curso) VALUES (:nome_empresa, :numero_whatsapp, :email_contato, :descritivo_vaga, :curso);");
        $this->stmt->execute([
        ':nome_empresa' => $nome_empresa,
        ':numero_whatsapp' => $numero_whatsapp,
        ':email_contato' => $email_contato,
        ':descritivo_vaga' => $descritivo_vaga,
        ':curso' => $curso,
        ]);
        } catch(PDOException $e) {
        echo "ERROR" . $e->getMessage();
        }
    }

        

    public function remover($id) {
        try {
        $this->stmt = $this->conn->prepare("DELETE FROM vagas WHERE id = :id");
        $this->stmt->execute([':id' => $id ]);
        } catch(PDOException $e) {
            echo "ERROR" . $e->getMessage();
        }
    }  

    public function __destruct() {
        $this->conn = null;
    }
}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['action']) && $_POST['action'] === 'adicionar') {
    $nome_empresa = $_POST['nome_empresa'];
    $numero_whatsapp = $_POST['numero_whatsapp'];
    $email_contato = $_POST['email_contato'];
    $descritivo_vaga = $_POST['descritivo_vaga'];
    $curso = $_POST['curso'];
    $cadastro = new Cadastro();
    $cadastro->adicionar($nome_empresa, $numero_whatsapp, $email_contato, $descritivo_vaga, $curso);
    header("Location: ../home.php");
    exit();
}

if (isset($_POST['action']) && $_POST['action'] === 'remover' && isset($_POST['id_vaga'])) {
    $id_vaga = $_POST['id_vaga'];
    $cadastro = new Cadastro();
    $cadastro->remover($id_vaga);
    header("Location: ../home.php");
    exit();
}

?>