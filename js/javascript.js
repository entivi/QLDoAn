
const navV = document.getElementsByClassName("vertical-nav")[0];
const barsLeft = document.getElementsByClassName("bars");
for (let i = 0; i < 2; i++) {
    let item = barsLeft[i];
    item.addEventListener("click", ()=>{
        var temp = document.getElementsByClassName("left-icon")[0];
        if(navV.classList.contains("hide")){
            navV.classList.remove("hide");
            temp.classList.add("hide");
        }
        else {
            navV.classList.add("hide");
            temp.classList.remove("hide");
        }
    })
}

const navItem = document.getElementsByClassName("nav-item dropdown");
for(let i = 0; i < 2; i++){
    let item = navItem[i];
    let hidedItem = item.getElementsByClassName("navItem")[0];
    item.addEventListener("click", ()=>{
        if(hidedItem.classList.contains("dropdown-menu")){
            hidedItem.classList.remove("dropdown-menu");
        }
        else{
            hidedItem.classList.add("dropdown-menu");
        }
    })
}