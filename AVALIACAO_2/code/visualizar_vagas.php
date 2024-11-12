<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();

$url = "localhost"; 
$dbname = "vagas";
$user = "root";
$pass = "";

try {
    $conexao = new PDO("mysql:host=$url;dbname=$dbname", $user, $pass);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $declara = $conexao->prepare("SELECT * FROM vagas"); 
    $declara->execute();
    $vagas = $declara->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $p) {
    echo "Erro na conexão com o banco de dados: " . $p->getMessage();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Vagas de Estágio</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Vagas de Estágio</h1>

        <?php if (empty($vagas)): ?>
            <div class="alert alert-warning" role="alert">
                Falha: Não foram encontradas vagas.
            </div>
        <?php else: ?>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Nome da Empresa</th>
                        <th>Curso</th>
                        <th>Descritivo da Vaga</th>
                        <th>Contato</th>
                        <th>WhatsApp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($vagas as $vaga): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($vaga['nome_empresa']); ?></td>
                            <td><?php echo htmlspecialchars($vaga['curso']); ?></td>
                            <td><?php echo nl2br(htmlspecialchars($vaga['descritivo_vaga'])); ?></td>
                            <td><?php echo htmlspecialchars($vaga['email_contato']); ?></td>
                            <td><?php echo htmlspecialchars($vaga['numero_whatsapp']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <div class="text-center">
            <a href="home.php" class="btn btn-secondary mt-3">Voltar</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
