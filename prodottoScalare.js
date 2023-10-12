function prodottoScalare(arr1, arr2){
    var prodotto = 0

    if(arr1.length != arr2.length){
        return "array di lunghezza diversa"
    }

    for(var i = 0; i < arr1.length; i++){
        prodotto += arr1[i] * arr2[i]
    }

    return prodotto
}

var arr1 = [1, 4, 2, 2, 6, 7]
var arr2 = [4, 6, 8, 1, 5]

console.log(prodottoScalare(arr1, arr2))