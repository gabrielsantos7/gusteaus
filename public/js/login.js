const inputSenha = document.querySelector('#senha');
const inputCheckbox = document.querySelector('#mostrar-senha');

inputCheckbox.addEventListener('change', () => {
    inputSenha.type = inputSenha.type === 'password' ? 'text' : 'password';
})