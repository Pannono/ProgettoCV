let navbar = document.querySelector('.navbar');

window.addEventListener('scroll', ()=>{
    if(window.scrollY > 0){
        navbar.classList.add('nav-scrolled');
    }else{
        navbar.classList.remove('nav-scrolled');
    }
})

let sold = document.querySelector("#sold")
let reviews = document.querySelector("#reviews")
let prova = document.querySelector("#prova")

function createCustomInterval(finalNumber, element, intervallo){
    let counter = 0;
    
    let interval = setInterval(() => {
    
        if(counter < finalNumber){
            counter++
            element.innerHTML = counter;
        } else {
            clearInterval(interval)
        }
    
    },intervallo);
}


let isStarted = false;

let observer = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        if(entry.isIntersecting && isStarted == false){
            createCustomInterval(100, sold, 1)
            createCustomInterval(150, reviews, 10)
            createCustomInterval(300, prova, 20)
            isStarted = true;
            setTimeout(() => {
                isStarted = false;
            }, 5000);
        }
    })
})
observer.observe(sold)
