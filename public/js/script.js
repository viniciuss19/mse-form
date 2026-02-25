$(document).ready(function () {
  $("#cnpj_empresa").on("input", function () {
    if ($(this).val().length >= 14) {
      $("#endereco, #complemento, #pais, #cep").prop("disabled", false);

      $("#pais").val("Brasil");
    }
  });

  $("#formFornecedor").submit(function (e) {
    if ($("#senha").val() !== $("#confirmarSenha").val()) {
      alert("As senhas não coincidem.");
      e.preventDefault();
      return;
    }

    if (
      !$("input[name='servicos']").is(":checked") &&
      !$("input[name='materiais']").is(":checked") &&
      !$("input[name='locacao']").is(":checked")
    ) {
      alert("Selecione ao menos um tipo de fornecimento.");
      e.preventDefault();
      return;
    }
  });
});

function toggleSenha(id) {
  let campo = document.getElementById(id);
  campo.type = campo.type === "password" ? "text" : "password";
}
