var frase = '« Cuando la noche es más oscura, se viene el día en tu corazón. »'
var cotenedor = document.getElementById('texto')
var separar = frase.split(' ')

separar.forEach(palabra =>{
    var span = document.createElement('span')
    span.textContent = palabra
    span.style.marginRight = '10px'
    span.style.display = 'inline-block'
    cotenedor.appendChild(span)
})