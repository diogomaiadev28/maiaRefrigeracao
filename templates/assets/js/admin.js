const container = document.querySelector('.formContainer')
const removeContainer = document.querySelector('.formContainer2')
const editButtons = document.querySelectorAll('.edit')
const removeButtons = document.querySelectorAll('.remove')
const nameInput = document.querySelector('#editName')
const descriptionInput = document.querySelector('#editDescription')
const statusInput = document.querySelector('#editStatus')
const form = container.querySelector('form')
const hiddenInput = document.querySelector('#removingCode')
const hiddenInput2 = document.querySelector('#editingCode')
const swapUpBtns = document.querySelectorAll('.swapUp')
const swapDownBtns = document.querySelectorAll('.swapDown')
const hiddenCode = document.querySelector('#swapUpCode')
const hiddenCode2 = document.querySelector('#swapDownCode')

editButtons.forEach(edit => {
    edit.addEventListener('click', (e) => {
        let name = edit.parentElement.parentElement.querySelector('.info').querySelector('h3').innerHTML
        let description = edit.parentElement.parentElement.querySelector('.info').querySelector('p').innerHTML
        let status = edit.parentElement.parentElement.querySelector('.status2').classList.item(1)
        nameInput.value = name
        descriptionInput.value = description
        statusInput.value = status
        let code = edit.parentElement.parentElement.querySelector('.code').innerHTML
        hiddenInput2.value = code
        container.classList.remove('hidden')
    })
})

removeButtons.forEach(remove => {
    remove.addEventListener('click', () => {
        let code = remove.parentElement.parentElement.querySelector('.code').innerHTML
        hiddenInput.value = code
        removeContainer.classList.remove('hidden')
    })
})

form.addEventListener('click', (e) => [
    e.stopPropagation()
])

container.addEventListener('click', () => {
    container.classList.add('hidden')
})

removeContainer.addEventListener('click', () => {
    removeContainer.classList.add('hidden')
})

swapUpBtns.forEach((button)=>{
    button.addEventListener('click', ()=>{
        let code = button.parentElement.parentElement.querySelector('.code').innerHTML
        hiddenCode.value = code
        hiddenCode.parentElement.submit()
    })
})

swapDownBtns.forEach((button)=>{
    button.addEventListener('click', ()=>{
        let code = button.parentElement.parentElement.querySelector('.code').innerHTML
        hiddenCode2.value = code
        hiddenCode2.parentElement.submit()
    })
})