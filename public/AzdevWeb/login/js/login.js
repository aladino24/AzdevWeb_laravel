let fadeTarget = document.querySelector(".loading-page")

function show_loading(){
    fadeTarget.style.display = 'block';
}


function hide_loading(){
    // fadeTarget.style.display = 'none';
    let fadeEffect = setInterval(()=>{
        if (!fadeTarget.style.opacity) {
            fadeTarget.style.opacity = 1;
        }
        if(fadeTarget.style.opacity > 0) {
            fadeTarget.style.opacity -= 0.1;
        }else{
            clearInterval(fadeEffect)
            fadeTarget.style.display = "none"
        }
    },380);
}