LeeElemento()

// Fetch
function LeeElemento() {
    fetch(`http://10.10.17.201/dwc/David/BBDDMedallero.php`)
        .then(response => {
            if (!response.ok) {
                throw new Error("La solicitud no se pudo completar correctamente.");
            }
            return response.json();
        })
        .then(data => {
            console.log(data)
            // document.getElementById("contenedor").textContent = JSON.stringify(data, null, 2);
            let sHtml = "";
            
            sHtml += "<table>"
            sHtml += "<tr>"
            sHtml +=  "<thead>"
            sHtml +="<th>Paises</th>"
            sHtml +="<th>Medallas</th>"
            data.forEach(element => {
                sHtml +=  "<thead>"
                if (element.Oro > 0 || element.Plata > 0 || element.Bronce > 0) {
                sHtml += `<td>${element.Pais}</td>`
                sHtml += `<td>`
                for (let i = 0; i < element.Oro && element.Oro > 0; i++) {
                    sHtml+= `<img src="Oro.gif">`
                }
                for (let i = 0; i < element.Plata && element.Plata > 0; i++) {
                    sHtml+= `<img src="Plata.gif">`
                }
                for (let i = 0; i < element.Bronce && element.Bronce > 0; i++) {    
                    sHtml+= `<img src="Bronce.gif">`
                }
                sHtml +=`</td>`
                sHtml += "</tr>"
        }});
            sHtml += "</table>"
            contenedor.innerHTML = sHtml;
        })
        .catch(error => {
            console.error("Error al cargar el archivo:", error);
        });
}

setInterval(() => {
    LeeElemento()
}, 15000);
