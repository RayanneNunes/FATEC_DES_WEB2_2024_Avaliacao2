<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            background-color: #f8f9fa;
        }
        .wrapper {
            max-width: 600px;
            padding: 20px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-custom {
            background-color: #007bff;
            color: #ffffff;
            border: none;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>

    <title>Cadastrar Vagas de estágio</title>
  </head>
  <body>

    <div class="wrapper">
        <h2 class="text-center">Cadastrar Vagas</h2>
        <p class="text-center">Preencha os seguintes campos:</p>
        <form method="post" action="classes/cadastro.php">
            
            <div class="form-group">
                <label for="nome_empresa">Nome da Empresa</label>
                <input type="text" class="form-control" name="nome_empresa" id="nome_empresa" required>
            </div>  

            <div class="form-group">
                <label for="email_contato">Email</label>
                <input type="email" class="form-control" name="email_contato" id="email_contato" required>
            </div>  

            <div class="form-group">
                <label for="numero_whatsapp">Whatsapp</label>
                <input type="text" class="form-control" name="numero_whatsapp" id="numero_whatsapp" required>
            </div> 

            <div class="form-group">
                <label for="descritivo_vaga">Descritivo da Vaga</label>
                <textarea class="form-control" name="descritivo_vaga" id="descritivo_vaga" rows="4" required></textarea>
            </div> 
            
            <div class="form-group">
                <label for="curso">Curso</label>
                <input type="text" class="form-control" name="curso" id="curso" required>
                <small id="cursoHelp" class="form-text text-muted">1 - DSM , 2 - GE</small>
            </div>

            <div class="text-center">
                <button type="submit" name="action" value="adicionar" class="btn btn-custom btn-block">Registrar</button>
            </div>

        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/RgD7zP87Z8j3TY0Eovp9ytO3s9TpklIh/lCmVAwiZsQYefXjZzZ19akF8h7Y" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-cn7l7gDp0eynlI9P3A6n4TOPrLkJ4dP0q7TwlqD0NvcDgZElBeI5o2IKxZ3gn2k6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-WC7wJ7hGpGvfl1eD8ZaDh5D7dE5akf6yEr7I9ok19hd9JvZ46sxlbKIKlC02vVe6" crossorigin="anonymous"></script>

  </body>
</html>
