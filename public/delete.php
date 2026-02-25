<?php
require __DIR__ . '/../config/db.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $pdo->prepare("DELETE FROM fornecedores WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: read.php");
exit;