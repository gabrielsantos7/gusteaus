const form = document.querySelector('#form-cadastro');
const inputSenha = document.querySelector('#senha');
const inputConfirmacaoSenha = document.querySelector('#confirm-senha');
const inputTelefone = document.querySelector('#telefone');

inputTelefone.addEventListener("input", function (event) {
  let input = event.target;
  let value = input.value.replace(/\D/g, ""); // Remove caracteres não numéricos

  if (value.length > 11) {
    value = value.slice(0, 11); // Trunca o valor se exceder o limite
  }

  if (value.length > 2) {
    value = `(${value.substring(0, 2)}) ${value.substring(2)}`;
  }

  if (value.length > 10) {
    value = `${value.substring(0, 10)}-${value.substring(10)}`;
  }

  input.value = value;
});

form.addEventListener('submit', (e) => {
  if(formValido()) {

  } else {
    e.preventDefault();
  }
})