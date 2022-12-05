const labelEl = document.querySelectorAll(".label");

labelEl.addEventListener('click', () => {
    labelEl.forEach((label) => {
        label.classList.add(labelactive);
    })
})

const password = document.querySelector('input[name=password]');
const confirm = document.querySelector('input[name=re-password]');

    if(confirm.value===password.value)
    {
        confirm.setCustomValidity('');
    }
    else
    {
        confirm.setCustomValidity("girdiğiniz şifreyle uyuşmamaktadır");
    }