const contenido = document.querySelector('.contenido')
const indicador = document.querySelectorAll('.indicador')

indicador.forEach( ( cadaIndicador , i) => {
    indicador[i].addEventListener('click',() => {
        let position = i
        let operacion = position * -25

        contenido.style.transform = `translateX(${operacion}%)`

        indicador.forEach( (cadaIndicador, i) => {
            indicador[i].classList.remove('activo')
        })
        indicador[i].classList.add('activo')
    })
})