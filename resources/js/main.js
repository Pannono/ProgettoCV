function createCustomInterval(finalNumber, element, intervallo ){
    let counter = 0;
    
    let interval = setInterval(()=>{
    
    if (counter < finalNumber ){
    counter ++
    element.innerHTML = counter;
    } else{
        clearInterval(interval)
    
    }
    },intervallo)
    }
    createCustomInterval(100, spedizioni, 50)
    createCustomInterval(200, clientiSoddisfatti,30)
    createCustomInterval(30, aziendePartner, 100)