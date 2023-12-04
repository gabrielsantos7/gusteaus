const form = document.querySelector('#form-cadastro');
const inputSenha = document.querySelector('#senha');
const inputConfirmacaoSenha = document.querySelector('#confirm-senha');
const inputTelefone = document.querySelector('#telefone');

const ctn1 = document.querySelector('#ctn-1');
const ctn2 = document.querySelector('#ctn-2');
const btnProsseguir = document.querySelector('#btn-prosseguir');
const btnVoltar = document.querySelector('#btn-voltar');

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
  if(formIsValid()) {

  } else {
    e.preventDefault();
  }
});

btnVoltar.addEventListener('click', () => {
  ctn1.classList.remove('d-none');
  ctn2.classList.add('d-none');
});

btnProsseguir.addEventListener('click', () => {
  ctn1.classList.add('d-none');
  ctn2.classList.remove('d-none');
});

function isNotEmpty(value) {
  return value.trim() !== '';
}

function passwordsMatch(senha, confirmSenha) {
  return senha === confirmSenha;
}

function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}


function formIsValid() {
  return true;
}