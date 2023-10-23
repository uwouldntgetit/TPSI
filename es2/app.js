let textColor, bodyBGColor, containerBGColor;
let title = document.getElementsByTagName("h1");
const colorSchemeBtn = document.getElementById("clr-btn");
const wrapper = document.getElementById("wrapper");
const mainList = document.getElementsByClassName("main");
const secondaryList = document.getElementsByClassName("secondary");


function changeColorScheme(){
    console.log("ciao");
    if(colorSchemeBtn.innerHTML === "light_mode")
        colorSchemeBtn.innerHTML = "dark_mode";
    else
        colorSchemeBtn.innerHTML = "light_mode";

    // if(wrapper.classList.contains("colorscheme-light")){
    //     wrapper.classList.add("colorscheme-dark");
    //     wrapper.classList.remove("colorscheme-light");
    // }
    // else {
    //     wrapper.classList.remove("colorscheme-dark");
    //     wrapper.classList.add("colorscheme-light");
    // }

    for(const e of mainList){
        if(e.classList.contains("colorscheme-light")){
            e.classList.add("colorscheme-dark");
            e.classList.remove("colorscheme-light");

            for(const e of secondaryList){
                e.classList.add("colorscheme-dark-sec")
            }
        }
        else {
            e.classList.remove("colorscheme-dark");
            e.classList.add("colorscheme-light");

            for(const e of secondaryList){
                e.classList.remove("colorscheme-dark-sec")
            }
        }
    }

        
}


