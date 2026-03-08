const form = document.querySelector('form')
const input = document.querySelector('form input')

form.addEventListener('submit', (e) => {
    e.preventDefault()
    const elemento = document.getElementById(input.value.toUpperCase())
    console.log(elemento)
    elemento.scrollIntoView()
    for (let i = 0; i < 3; i++) {
        setTimeout(() => {
            elemento.style.backgroundColor = 'var(--gray)'
        }, i * 400)

        setTimeout(() => {
            elemento.style.backgroundColor = 'var(--white)'
        }, i * 400 + 200)
    }
})