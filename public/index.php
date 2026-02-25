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

    <h2 class=container>Portal MSE</h2>

    <div class="container">


    <form id="formSupplier" method="POST" action="save.php">

    <div class="row">


    <div class="col">
    <h3>Pessoa Jurídica</h3>

    <input type="text" id="cnpj_empresa" name="cnpj_empresa" required placeholder="CNPJ">
    <input type="text" name="nome_fantasia" placeholder="Nome Fantasia">

    <label>ICMS:</label>
    <input type="text" name="icms" placeholder="ICMS">
    <input type="text" name="telefone" placeholder="Telefone">

    <input type="text" id="endereco" name="endereco" disabled placeholder="Endereço">
    <input type="text" id="complemento" name="complemento" disabled placeholder="Complemento">

    <select id="pais" name="pais" disabled >
    <option value="Brasil">Brasil</option>
    </select>

    <input type="text" id="cep" name="cep" disabled placeholder="CEP">

    </div>

    <div class="col">
    <h3>Fornecedor</h3>

    <input type="text" name="razao_social" required placeholder="Razão Social">

    <input type="text" name="inscricao_estadual" placeholder="Inscrição Estadual / Isento">

    <label>Situação:</label>
    <input type="text" name="situacao" placeholder="Situação">
    <input type="email" name="email" required placeholder="E-mail">

    <input type="text" name="numero" placeholder="Número">
    <input type="text" name="bairro" placeholder="Bairro">

    <select name="estado" placeholder="Selecione o Estado">
    <option value="PR">PR</option>
    <option value="SP">SP</option>
    <option value="RJ">RJ</option>
    <option value="MG">MG</option>

    </select>

    <select name="municipio" placeholder="Município">
    <option value="Londrina">Londrina</option>
    </select>

    </div>
    </div>

    <div class="center">
    <h3>Fornecedor de:</h3>

    <div class="checkbox-group">
    <label><input type="checkbox" name="servicos"> Serviços</label>
    <label><input type="checkbox" name="materiais"> Materiais</label>
    <label><input type="checkbox" name="locacao"> Locação</label>
    </div>

    <label>Ramo de Atuação:</label>
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
    <input type="text" name="cnpj_login" required placeholder="CNPJ">

    <div class="password-wrapper">
    <input type="password" name="senha" id="senha" required placeholder="Senha">
    <span onclick="toggleSenha('senha')">👁</span>
    </div>
    </div>

    <div class="col">
    <input type="text" name="nome_usuario" required placeholder="Nome">

    <div class="password-wrapper">
    <input type="password" id="confirmarSenha" required placeholder="Repetir Senha">
    <span onclick="toggleSenha('confirmarSenha')">👁</span>
    </div>
    </div>

    </div>

    <button type="submit">Cadastrar</button>

    </form>
    </div>

    </body>
    </html>