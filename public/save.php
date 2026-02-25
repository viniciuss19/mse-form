<?php
require __DIR__ . '/../config/db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Tratando checkbox para 1 ou 0
    $servicos  = isset($_POST['servicos']) ? 1 : 0;
    $materiais = isset($_POST['materiais']) ? 1 : 0;
    $locacao   = isset($_POST['locacao']) ? 1 : 0;

    //jogar hash na senha pra não ficar exposto na query / interceptavel
    $senhaHash = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO fornecedores (
        cnpj_empresa, nome_fantasia, icms, telefone,
        endereco, complemento, pais, cep,
        razao_social, inscricao_estadual, situacao, email,
        numero, bairro, estado, municipio,
        servicos, materiais, locacao, ramo_atuacao,
        cnpj_login, nome_usuario, senha
    ) VALUES (
        :cnpj_empresa, :nome_fantasia, :icms, :telefone,
        :endereco, :complemento, :pais, :cep,
        :razao_social, :inscricao_estadual, :situacao, :email,
        :numero, :bairro, :estado, :municipio,
        :servicos, :materiais, :locacao, :ramo_atuacao,
        :cnpj_login, :nome_usuario, :senha
    )";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':cnpj_empresa' => $_POST['cnpj_empresa'],
        ':nome_fantasia' => $_POST['nome_fantasia'],
        ':icms' => $_POST['icms'],
        ':telefone' => $_POST['telefone'],
        ':endereco' => $_POST['endereco'],
        ':complemento' => $_POST['complemento'],
        ':pais' => $_POST['pais'],
        ':cep' => $_POST['cep'],
        ':razao_social' => $_POST['razao_social'],
        ':inscricao_estadual' => $_POST['inscricao_estadual'],
        ':situacao' => $_POST['situacao'],
        ':email' => $_POST['email'],
        ':numero' => $_POST['numero'],
        ':bairro' => $_POST['bairro'],
        ':estado' => $_POST['estado'],
        ':municipio' => $_POST['municipio'],
        ':servicos' => $servicos,
        ':materiais' => $materiais,
        ':locacao' => $locacao,
        ':ramo_atuacao' => $_POST['ramo_atuacao'],
        ':cnpj_login' => $_POST['cnpj_login'],
        ':nome_usuario' => $_POST['nome_usuario'],
        ':senha' => $senhaHash
    ]);
    
   header("Location: read.php");
exit;
    
}