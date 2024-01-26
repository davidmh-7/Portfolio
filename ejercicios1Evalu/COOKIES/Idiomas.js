const botones = document.querySelectorAll('button')
const idioma = obtenerValorCookie('idioma')
const fecha = new Date()

fecha.setDate(fecha.getDate() + 10)

botones.forEach((boton, i) => {
  boton.addEventListener('click', () => {
   
    switch(i + 1) {
      case 1: 
        setCookie('idioma', i + 1, fecha)
        location.href = 'ESP.html'
        break
      case 2: 
        setCookie('idioma', i + 1, fecha)
        location.href = 'FRA.html'
        break
      case 3: 
        setCookie('idioma', i + 1, fecha)
        location.href = 'ING.html'
        break
      case 4: 
        setCookie('idioma', i + 1, fecha)
        location.href = 'EUS.html'
        break
    }
  })

  
})