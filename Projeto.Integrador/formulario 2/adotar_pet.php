<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $raca = $_POST['raca'];
    $imagem = $_POST['imagem'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/Logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./formulario.css">
    <title>SAFE PET</title>
</head>
<body>
    <nav class="menu">
        <a href="./paginainicial.html"><img src="./imagens/Logo.png" alt=""></a>
        <button><a href="./cadastro.html">Voltar</a></button>
    </nav>
 
    <div class="banner" id="parallax"></div>
 
    <div class="titulo">
        <h1>Preencha seus Dados</h1>
        <h2>entraremos em contato com você</h2>
        <p>Bem-vindo(a) ao nosso formulário de interesse.</p>
        <p>Ficamos muito felizes por você ter dado o primeiro passo para adotar, apadrinhar ou ser um voluntário PET.</p>
    </div>

    <div class="d-flex align-items-center justify-content-center" style="width: 100%; height: 70vh;">
        <div class="card bg-info" style="width: 30rem;">
            <img src="<?php echo $imagem; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nome: <?php echo $nome; ?></h5>
                <h6 class="card-subtitle">Idade: <?php echo $idade; ?></h6>
                <p class="card-text">Raça: <?php echo $raca; ?></p>
                <a href="index.html" class="btn btn-dark">Voltar</a>
            </div>
        </div>
    </div>
 
    <div class="dados">
        <div class="info">
            <input type="text" placeholder="Nome Completo:" id="nome" required>
            <input type="text" placeholder="Número Contato:" id="numeroContato" required>
            <input type="text" placeholder="Endereço:" id="endereco" required>
        </div>
        <div class="info2">
            <input type="text" placeholder="CPF:" id="cpf" required>
            <input type="text" placeholder="Whatsapp:" id="whatsapp" required>
            <div class="info3">
                <input type="text" placeholder="Número:" id="numero" required>
                <input type="text" placeholder="Complemento:" id="complemento">
            </div>
        </div>
    </div>
    <div class="info4">
        <input type="text" placeholder="Bairro:" id="bairro" required>
        <input type="text" placeholder="Cidade:" id="cidade" required>
        <input type="text" placeholder="Estado:" id="estado" required>
    </div>
    <div class="botao">
        <button id="enviar">Enviar</button>
    </div>
   
 
    <div class="desenho">
        <img src="./imagens/Desenho.png" alt="desenho">
    </div>
    <div class="patrocinadores">
        <h1>NOSSOS PATROCINADORES</h1>
        <div class="imagens">
            <div class="imagem">
                <img src="./imagens/Parceiros/parceiro01.png" alt="">
            </div>
            <div class="imagem">
                <img src="./imagens/Parceiros/parceiro02.png" alt="">
            </div>
            <div class="imagem">
                <img src="./imagens/Parceiros/parceiro03.png" alt="">
            </div>
            <div class="imagem">
                <img src="./imagens/Parceiros/parceiro04.png" alt="">
            </div>
            <div class="imagem">
                <img src="./imagens/Parceiros/parceiro05.png" alt="">
            </div>
            <div class="imagem">
                <img src="./imagens/Parceiros/parceiro06.png" alt="">
            </div>
            <div class="imagem">
                <img src="./imagens/Parceiros/parceiro07.png" alt="">
            </div>
            <div class="imagem">
                <img src="./imagens/Parceiros/parceiro08.png" alt="">
            </div>
            <div class="imagem">
                <img src="./imagens/Parceiros/parceiro09.png" alt="">
            </div>
            <div class="imagem">
                <img src="./imagens/Parceiros/parceiro10.png" alt="">
            </div>
        </div>
    </div>
    <div class="banner2">
        <h1>Desenvolvido por</h1>
        <h1 id="font">LDGL</h1>
    </div>
</body>
</html>
 
<script>
//formulario
document.getElementById('enviar').addEventListener('click', function() {
    // Limpa mensagens anteriores
    const messageDiv = document.getElementById('message');
    messageDiv.textContent = '';
   
    // Coleta os valores dos campos
    const nome = document.getElementById('nome').value.trim();
    const numeroContato = document.getElementById('numeroContato').value.trim();
    const endereco = document.getElementById('endereco').value.trim();
    const cpf = document.getElementById('cpf').value.trim();
    const whatsapp = document.getElementById('whatsapp').value.trim();
    const numero = document.getElementById('numero').value.trim();
    const complemento = document.getElementById('complemento').value.trim();
    const bairro = document.getElementById('bairro').value.trim();
    const cidade = document.getElementById('cidade').value.trim();
    const estado = document.getElementById('estado').value.trim();
 
// Validação
if (!nome || !numeroContato || !endereco || !cpf || !bairro || !cidade || !estado) {
        alert('Por favor, preencha todos os campos obrigatórios.');
        return; // Para a execução se houver campos obrigatórios não preenchidos
    }
 
    // Cria um objeto com os dados
    const dados = {
        nome,
        numeroContato,
        endereco,
        cpf,
        whatsapp,
        numero,
        complemento,
        bairro,
        cidade,
        estado,
        apadrinhar,
        adotar,
        voluntario
    };
 
    // Exibe os dados no console
    console.log(dados);
   
    // Exibe mensagem de sucesso
    alert('Dados enviados com sucesso!');
   
    // Limpa os campos após o envio
    document.querySelectorAll('input[type="text"]').forEach(input => input.value = '');
    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => checkbox.checked = false);
});
 
document.getElementById('enviar').addEventListener('click', function() {
 
    // Coleta as opções selecionadas
    const apadrinhar = document.getElementById('apadrinhar').checked;
    const adotar = document.getElementById('adotar').checked;
    const voluntario = document.getElementById('voluntario').checked;
 
    // Exibe uma mensagem com base nas seleções
    let mensagem = 'Você selecionou: ';
    let opcoes = [];
   
    if (apadrinhar) opcoes.push('Apadrinhar um PET');
    if (adotar) opcoes.push('Adotar um Pet');
    if (voluntario) opcoes.push('Ser voluntário');
   
    if (opcoes.length > 0) {
        mensagem = 'Você escolheu: ' + opcoes.join(', ') + '.'; // Corrigido aqui
    }else {
        mensagem = 'Nenhuma opção foi selecionada.'; // Alterado para "mensagem ="
    }
   
    alert(mensagem);
   
    // ... (código para limpar campos) ...
});
 
</script>