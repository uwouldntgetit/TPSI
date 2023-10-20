let textColor, bodyBGColor, containerBGColor;
let title = document.getElementsByTagName("h1");
const colorSchemeBtn = document.getElementById("clr-btn");

function changeColorScheme(){
    console.log("ciao");
    if(colorSchemeBtn.innerHTML === "light_mode")
        colorSchemeBtn.innerHTML = "dark_mode";
    else
        colorSchemeBtn.innerHTML = "light_mode";

        
}

