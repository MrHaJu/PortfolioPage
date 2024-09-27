const formElements = document.querySelectorAll('.form-element');
const inputField = document.querySelector('.form-control');
const label = document.querySelector('.form-label');

formElements.forEach((element) => {
    const inputField = element.querySelector('input, textarea');
    const label = element.querySelector('label');

    if (inputField && label) {
        inputField.addEventListener('focus', () => {
            label.classList.add('visible');
        });

        inputField.addEventListener('blur', () => {
            if (inputField.value === '') {
                label.classList.remove('visible');
            }
        });
    }
});