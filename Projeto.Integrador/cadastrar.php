<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "usuarios_pet";

// Conectar ao banco de dados
$Link = mysqli_connect($host, $user, $pass, $db);

// Verificar a conexão
if ($Link->connect_error) {
    die("Falha na conexão: " . $Link->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($Link, $_POST['nome']);
    $data_nascimento = mysqli_real_escape_string($Link, $_POST['idade']);
    $telefone = mysqli_real_escape_string($Link, $_POST['telefone']);
    $cpf = mysqli_real_escape_string($Link, $_POST['cpf']);
    $email = mysqli_real_escape_string($Link, $_POST['email']);
    $endereco = mysqli_real_escape_string($Link, $_POST['endereco']);
    $complemento = mysqli_real_escape_string($Link, $_POST['complemento']);
    $tipo_cadastro = mysqli_real_escape_string($Link, isset($_POST['tipoCadastro']) ? $_POST['tipoCadastro'] : '');
    
    // Definir status inicial como 'pendente' e a data atual
    $status = 'pendente';
    $data_cadastro = date('Y-m-d | H:i:s');

    // Ensure the connection is established and not closed prematurely
    if ($Link instanceof mysqli) {
        // Prepare the SQL query
        $sql = "INSERT INTO usuarios (nome, data_nascimento, telefone, cpf, email, endereco, complemento, data_cadastro, tipo_cadastro, status)
                VALUES ('$nome', '$data_nascimento', '$telefone', '$cpf', '$email', '$endereco', '$complemento', '$data_cadastro', '$tipo_cadastro', '$status')";

      if ($Link->query($sql) === TRUE) {
          // Redirect to the main page after successful registration
        echo "<script>
                   alert('Cadastro realizado com sucesso!');
                   window.location.href = './paginainicial.html';
            </script>";
       } else {
              echo "Erro: " . $sql . "<br>" . $Link->error;
}

        // Close the connection after executing the query
        $Link->close();
    } else {
          echo "Erro na conexão com o banco de dados.";
}
}
?>


