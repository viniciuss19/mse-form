<?php
require __DIR__ . '/../config/db.php';

$fornecedor = null;

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("SELECT * FROM fornecedores WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $fornecedor = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

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

<h2 class="container">Portal MSE</h2>

<div class="container">

<form method="POST" 
      action="<?= $fornecedor ? 'update.php' : 'save.php' ?>">

<?php if ($fornecedor): ?>
<input type="hidden" name="id" value="<?= $fornecedor['id'] ?>">
<?php endif; ?>

<div class="row">

<!-- ================= ESQUERDA ================= -->
<div class="col">
<h3>Pessoa Jurídica</h3>

<input type="text" name="cnpj_empresa" 
value="<?= $fornecedor['cnpj_empresa'] ?? '' ?>"
required placeholder="CNPJ">

<input type="text" name="nome_fantasia"
value="<?= $fornecedor['nome_fantasia'] ?? '' ?>"
placeholder="Nome Fantasia">

<label>ICMS:</label>
<input type="text" name="icms"
value="<?= $fornecedor['icms'] ?? '' ?>"
placeholder="ICMS">

<input type="text" name="telefone"
value="<?= $fornecedor['telefone'] ?? '' ?>"
placeholder="Telefone">

<input type="text" name="endereco"
value="<?= $fornecedor['endereco'] ?? '' ?>"
placeholder="Endereço">

<input type="text" name="complemento"
value="<?= $fornecedor['complemento'] ?? '' ?>"
placeholder="Complemento">

<select name="pais">
<option value="Brasil" selected>Brasil</option>
</select>

<input type="text" name="cep"
value="<?= $fornecedor['cep'] ?? '' ?>"
placeholder="CEP">

</div>

<!-- ================= DIREITA ================= -->
<div class="col">
<h3>Fornecedor</h3>

<input type="text" name="razao_social"
value="<?= $fornecedor['razao_social'] ?? '' ?>"
required placeholder="Razão Social">

<input type="text" name="inscricao_estadual"
value="<?= $fornecedor['inscricao_estadual'] ?? '' ?>"
placeholder="Inscrição Estadual / Isento">

<label>Situação:</label>
<input type="text" name="situacao"
value="<?= $fornecedor['situacao'] ?? '' ?>"
placeholder="Situação">

<input type="email" name="email"
value="<?= $fornecedor['email'] ?? '' ?>"
required placeholder="E-mail">

<input type="text" name="numero"
value="<?= $fornecedor['numero'] ?? '' ?>"
placeholder="Número">

<input type="text" name="bairro"
value="<?= $fornecedor['bairro'] ?? '' ?>"
placeholder="Bairro">

<select name="estado">
<option value="PR" <?= ($fornecedor['estado'] ?? '') == 'PR' ? 'selected' : '' ?>>PR</option>
<option value="SP" <?= ($fornecedor['estado'] ?? '') == 'SP' ? 'selected' : '' ?>>SP</option>
<option value="RJ" <?= ($fornecedor['estado'] ?? '') == 'RJ' ? 'selected' : '' ?>>RJ</option>
<option value="MG" <?= ($fornecedor['estado'] ?? '') == 'MG' ? 'selected' : '' ?>>MG</option>
</select>

<select name="municipio">
<option value="Londrina"
<?= ($fornecedor['municipio'] ?? '') == 'Londrina' ? 'selected' : '' ?>>
Londrina
</option>
</select>

</div>
</div>

<!-- ================= CENTRAL ================= -->
<div class="center">

<h3>Fornecedor de:</h3>

<div class="checkbox-group">
<label>
<input type="checkbox" name="servicos"
<?= !empty($fornecedor['servicos']) ? 'checked' : '' ?>>
Serviços
</label>

<label>
<input type="checkbox" name="materiais"
<?= !empty($fornecedor['materiais']) ? 'checked' : '' ?>>
Materiais
</label>

<label>
<input type="checkbox" name="locacao"
<?= !empty($fornecedor['locacao']) ? 'checked' : '' ?>>
Locação
</label>
</div>

<label>Ramo de Atuação:</label>
<select name="ramo_atuacao">
<?php
$ramos = ['Construção Civil','Elétrica','Hidráulica','Logística','TI'];
foreach ($ramos as $ramo):
?>
<option value="<?= $ramo ?>"
<?= ($fornecedor['ramo_atuacao'] ?? '') == $ramo ? 'selected' : '' ?>>
<?= $ramo ?>
</option>
<?php endforeach; ?>
</select>

</div>

<hr>

<div class="row">

<div class="col">
<input type="text" name="cnpj_login"
value="<?= $fornecedor['cnpj_login'] ?? '' ?>"
required placeholder="CNPJ">

<div class="password-wrapper">
<input type="password" name="senha" id="senha"
placeholder="Senha">
<span onclick="toggleSenha('senha')">👁</span>
</div>
</div>

<div class="col">
<input type="text" name="nome_usuario"
value="<?= $fornecedor['nome_usuario'] ?? '' ?>"
required placeholder="Nome">

<div class="password-wrapper">
<input type="password" id="confirmarSenha"
placeholder="Repetir Senha">
<span onclick="toggleSenha('confirmarSenha')">👁</span>
</div>
</div>

</div>

<div class="form-actions">
<button type="submit" class="btn-primario">
<?= $fornecedor ? 'Atualizar' : 'Cadastrar' ?>
</button>
</div>

</form>

<div class="extra-box">
    <h3>Para ser um Fornecedor MSE</h3>
    <a href="index.php" class="btn-secundario">Cadastre-se aqui</a>
</div>


<div class="extra-box">
    <h3>Você é colaborador da MSE?</h3>
    <p>Faça login utilizando sua conta corporativa</p>

    <a href="google-login.php" class="btn-google">
        <img src="https://developers.google.com/identity/images/g-logo.png" width="18">
        Entrar com Google
    </a>
</div>

<br>
<a href="read.php">Ver Fornecedores Cadastrados</a>

</div>

</body>
</html>