<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro Fornecedor</title>

<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/script.js" defer></script>

</head>
<body>

<div class="container">
<h2>Cadastro de Fornecedor</h2>

<form id="formFornecedor" method="POST" action="salvar.php">

<div class="row">


<div class="col">
<h3>Pessoa Jurídica</h3>

<label>CNPJ</label>
<input type="text" id="cnpj_empresa" name="cnpj_empresa" required>

<label>Nome Fantasia</label>
<input type="text" name="nome_fantasia">

<label>ICMS</label>
<input type="text" name="icms">

<label>Telefone</label>
<input type="text" name="telefone">

<label>Endereço</label>
<input type="text" id="endereco" name="endereco" disabled>

<label>Complemento</label>
<input type="text" id="complemento" name="complemento" disabled>

<label>País</label>
<select id="pais" name="pais" disabled>
<option value="Brasil">Brasil</option>
</select>

<label>CEP</label>
<input type="text" id="cep" name="cep" disabled>

</div>

<div class="col">
<h3>Fornecedor</h3>

<label>Razão Social</label>
<input type="text" name="razao_social" required>

<label>Inscrição Estadual / Isento</label>
<input type="text" name="inscricao_estadual">

<label>Situação</label>
<input type="text" name="situacao">

<label>E-mail</label>
<input type="email" name="email" required>

<label>Número</label>
<input type="text" name="numero">

<label>Bairro</label>
<input type="text" name="bairro">

<label>Estado</label>
<select name="estado">
<option value="PR">PR</option>
<option value="SP">SP</option>
<option value="RJ">RJ</option>
<option value="MG">MG</option>

</select>

<label>Município</label>
<select name="municipio">
<option value="Londrina">Londrina</option>
</select>

</div>
</div>

]
<div class="center">
<h3>Fornecedor de:</h3>

<div class="checkbox-group">
<label><input type="checkbox" name="servicos"> Serviços</label>
<label><input type="checkbox" name="materiais"> Materiais</label>
<label><input type="checkbox" name="locacao"> Locação</label>
</div>

<label>Ramo de Atuação</label>
<select name="ramo_atuacao">
<option>Construção Civil</option>
<option>Elétrica</option>
<option>Hidráulica</option>
<option>Logística</option>
<option>TI</option>
</select>

</div>

<hr>

<div class="row">

<div class="col">
<label>CNPJ</label>
<input type="text" name="cnpj_login" required>

<div class="password-wrapper">
<label>Senha</label>
<input type="password" name="senha" id="senha" required>
<span onclick="toggleSenha('senha')">👁</span>
</div>
</div>

<div class="col">
<label>Nome</label>
<input type="text" name="nome_usuario" required>

<div class="password-wrapper">
<label>Repetir Senha</label>
<input type="password" id="confirmarSenha" required>
<span onclick="toggleSenha('confirmarSenha')">👁</span>
</div>
</div>

</div>

<button type="submit">Cadastrar</button>

</form>
</div>

</body>
</html>