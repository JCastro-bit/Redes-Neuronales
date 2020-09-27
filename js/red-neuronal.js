var network = new brain.NeuralNetwork();

network.train([
    //Fondo Negro (entrada en 0s) = texto blanco ( salida = 1)
    {
        input: {
            rojo: 0,
            verde: 0,
            azul: 0
        },
        output: {
            color: 1
        }
    },
    //Fondo blanco (entrada en 1s) = texto negro ( salida = 0)
    {
        input: {
            rojo: 1,
            verde: 1,
            azul: 1
        },
        output: {
            color: 0
        }
    }
]);

function update(color) {
    //console.log(color.rgb);
    var div = document.getElementById("sitio");
    div.style.background = "#" + color;
    /*Tomar el fondo actual elegido por el usuario
    Para usarlo de entrada para que  la red nos de su 
    prediccion del mejor color de texto a utilizar*/
    var entrada = {
        rojo: color.rgb[0] / 225,
        verde: color.rgb[1] / 225,
        azul: color.rgb[2] / 225
    }
    //Obtener prediccion de la red
    var resultado = network.run(entrada);
    //imprimir la predicción en consola
    console.log(resultado);
    /*Si el resultado es > .5 
    Se considera color de texto blanco*/
    if (resultado.color > .5) {
        div.style.color = "white";
    } else {
        div.style.color = "black";
    }
}