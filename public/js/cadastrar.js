const inputNome = document.querySelector('#nome');
const inputEmail = document.querySelector('#email');
const inputSenha = document.querySelector('#senha');
const inputCheckbox = document.querySelector('#mostrar-senha');
const inputTelefone = document.querySelector('#telefone');
const inputDataNascimento = document.querySelector('#data-nascimento');

const inputCidade = document.querySelector('#cidade');
const inputBairro = document.querySelector('#bairro');
const inputRua = document.querySelector('#rua');
const inputNumero = document.querySelector('#numero');

const ctn1 = document.querySelector('#ctn-1');
const ctn2 = document.querySelector('#ctn-2');
const btnProsseguir = document.querySelector('#btn-prosseguir');
const btnVoltar = document.querySelector('#btn-voltar');

inputCheckbox.addEventListener('change', () => {
  inputSenha.type = inputSenha.type === 'password' ? 'text' : 'password';
})

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

inputNome.addEventListener('keydown', function(event) {
  if (event.key >= '0' && event.key <= '9') {
      event.preventDefault();
  }
});

inputNome.addEventListener('keyup', ()=> {
  let inputNomeValue = inputNome.value;

  let words = inputNomeValue.split(' ');

  for (let i = 0; i < words.length; i++) {
      if (words[i].length > 0) {
          words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
      }
  }

  let capitalizedText = words.join(' ');

  inputNome.value = capitalizedText;
})

btnVoltar.addEventListener('click', () => {
  ctn1.classList.remove('d-none');
  ctn2.classList.add('d-none');
});

btnProsseguir.addEventListener('click', () => {
  ctn1.classList.add('d-none');
  ctn2.classList.remove('d-none');
});

(() => {
  'use strict'

  const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach(form => { 
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add('was-validated')
    }, false)
  })
})()