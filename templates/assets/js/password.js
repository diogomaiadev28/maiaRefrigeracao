const eye = document.querySelector('.password span')
const input = document.querySelector('.password input')

eye.addEventListener('click', ()=>{
    if (input.type == "password") {
        eye.style.backgroundColor = "var(--buttonBlue)"
        input.type = "text"
    } else {
        eye.style.backgroundColor = "var(--inputBlue)"
        input.type = "password"
    }
})