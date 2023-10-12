function contaOccorrenze(array, k){
    var tot = 0
    for(var i = 0; i < array.length; i++){
        if(array[i] === k)
            tot++
    }
    return tot
}

const array = [1, 5, 4, 1, 2]
console.log(contaOccorrenze(array, 1))