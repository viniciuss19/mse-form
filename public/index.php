<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Fornecedor - MSE</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js" defer></script>
</head>
<body>
<form id="formFornecedor" method="POST" action="salvar.php">


<h3>Dados da Empresa</h3>

<label>CNPJ *</label>
<input type="text" name="cnpj" id="cnpj" required>

<label>Razão Social *</label>
<input type="text" name="razao_social" required>

<label>Nome Fantasia</label>
<input type="text" name="nome_fantasia">

<label>
<input type="checkbox" name="isento"> Isento
</label>

<label>ICMS</label>
<select name="icms">
    <option value="CONTRIBUINTE">Contribuinte</option>
    <option value="NAO CONTRIBUINTE">Não Contribuinte</option>
</select>

<label>Situação</label>
<input type="text" name="situacao">

<label>Telefone *</label>
<input type="text" name="telefone" id="telefone" required>

<label>Email *</label>
<input type="email" name="email" required>

<h3>Endereço</h3>

<label>Endereço *</label>
<input type="text" name="endereco" required>

<label>Número</label>
<input type="text" name="numero">

<label>Complemento</label>
<input type="text" name="complemento">

<label>Bairro</label>
<input type="text" name="bairro">

<label>CEP</label>
<input type="text" name="cep" id="cep">

<h3>Fornecedor de:</h3>

<label><input type="checkbox" name="servicos"> Serviços</label>
<label><input type="checkbox" name="materiais"> Materiais</label>
<label><input type="checkbox" name="locacao"> Locação</label>

<label>Ramo de Atuação</label>
<input type="text" name="ramo_atuacao">

<h3>Dados de Acesso</h3>

<label>Senha *</label>
<input type="password" name="senha" id="senha" required>

<label>Repetir Senha *</label>
<input type="password" id="confirmarSenha" required>

<button type="submit">Cadastrar</button>

</form>
</body>
</html>
