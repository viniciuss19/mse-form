<?php
require __DIR__ . '/../config/db.php';


$stmt = $pdo->prepare("
    UPDATE fornecedores SET
        cnpj_empresa = ?,
        nome_fantasia = ?,
        icms = ?,
        telefone = ?,
        endereco = ?,
        complemento = ?,
        cep = ?,
        razao_social = ?,
        inscricao_estadual = ?,
        situacao = ?,
        email = ?,
        numero = ?,
        bairro = ?,
        estado = ?,
        municipio = ?,
        ramo_atuacao = ?
    WHERE id = ?
");

$stmt->execute([
    $_POST['cnpj_empresa'],
    $_POST['nome_fantasia'],
    $_POST['icms'],
    $_POST['telefone'],
    $_POST['endereco'],
    $_POST['complemento'],
    $_POST['cep'],
    $_POST['razao_social'],
    $_POST['inscricao_estadual'],
    $_POST['situacao'],
    $_POST['email'],
    $_POST['numero'],
    $_POST['bairro'],
    $_POST['estado'],
    $_POST['municipio'],
    $_POST['ramo_atuacao'],
    $_POST['id']
]);

header("Location: read.php");
exit;