<?php
require __DIR__ . '/../config/db.php';

$stmt = $pdo->query("SELECT * FROM fornecedores ORDER BY id DESC");
$fornecedores = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Fornecedores</title>
</head>
<body>

<h2>Fornecedores Cadastrados</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Razão Social</th>
        <th>Email</th>
        <th>CNPJ</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($fornecedores as $f): ?>
    <tr>
        <td><?= $f['razao_social'] ?></td>
        <td><?= $f['email'] ?></td>
        <td><?= $f['cnpj_empresa'] ?></td>
        <td>
        <a href="index.php?id=<?= $f['id'] ?>">Editar</a>            |
            <a href="delete.php?id=<?= $f['id'] ?>" 
               onclick="return confirm('Tem certeza?')">
               Excluir
            </a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>