// Code pour rejoindre une partie
let codeInput = document.querySelector('.playgame__form__input');

// Condition qui autorise uniquement les chiffres pour rejoindre une partie
codeInput.addEventListener('input', function (e) {
    e.target.value = e.target.value.replace(/[^0-9]/g, '');
});