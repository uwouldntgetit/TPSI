function verifica_angolo(gradi){
    if(gradi > 360 && gradi < 0){
        return "sono accettati solo angoli da 0 a 360 gradi"
    }
    else if(gradi < 90)
        return "acuto"
    else if(gradi == 90)
        return "retto"
    else if(gradi == 180)
        return "piatto"
    else if(gradi == 360)
        return "giro"
    else
        return "ottuso"
}

function somma_media(arr){
    var somma, media
    for(i = 0; i < arr.length; i++){
        if(isNaN(arr[2])){
            console.log("l'elemento numero " + i + " dell'array non e' un numero")
            return
        }
        somma += arr[i]
    }
    media = somma / arr.length

    console.log("somma: " + somma + "\nmedia: " + media)
}

console.log(verifica_angolo(32))

const arr = [1,1,1,1]
somma_media(arr)
