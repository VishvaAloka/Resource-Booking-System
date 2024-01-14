const body = document.querySelector('body')
const modeSwitch = document.querySelector(".toggle-switch")
const modeText = document.querySelector(".mode-text")


modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
    }
});


const linkColor = document.querySelectorAll('.nav-link');   
function colorLink(){
    linkColor.forEach(l => l.classList.remove('active'));
    this.classList.add('active');
}

linkColor.forEach(l => l.addEventListener('click', colorLink));