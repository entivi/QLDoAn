const a  = document.getElementsByClassName('form-center')
a.innerHTML += '<h1>Kiểm tra lại</h1>'


const navV = document.getElementsByClassName("vertical-nav")[0];
const barsLeft = document.getElementsByClassName("bars");
console.log(barsLeft)
for (let i = 0; i < 2; i++) {
    let item = barsLeft[i];
    item.addEventListener("click", ()=>{
        if(navV.classList.contains("hide")){
            navV.classList.remove("hide");
        }
        else {
            navV.classList.add("hide");
        }
    })
}

const navItem = document.getElementsByClassName("nav-item dropdown");
for(let i = 0; i < 2; i++){
    let item = navItem[i];
    let show = item.getElementsByClassName("navItem")[0];
    item.addEventListener("click", ()=>{
        if(show.classList.contains("dropdown-menu")){
            show.classList.remove("dropdown-menu");
        }
        else{
            show.classList.add("dropdown-menu");
        }
    })
}