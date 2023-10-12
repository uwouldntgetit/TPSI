// crea funzione che prende in input i lati di un triangolo e ne restiruisce il tipo

function tipoTriangolo(l1, l2, l3){
    if(l1 === l2 && l1 ===l3)
        return "equilatero"
    else if((l1 === l2 && l1 != l3) || (l2 === l3 && l2 != l1))
        return "isoscele"
    else
        return "scaleno"
}

console.log(tipoTriangolo(1,2,3))