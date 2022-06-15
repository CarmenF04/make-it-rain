let allProducts = document.getElementsByClassName("product");
let filters = document.getElementsByClassName("filter");

// ------
window.scrollTo(0,0);

setInterval(
    function(){
        document.getElementsByTagName("body")[0].style.overflow = "auto";
    }, 1500
);

for(let i = 0; i < filters.length; i++){
    filters[i].checked = true;
}

//ring filter
let ringFilter = document.getElementById("checkbox-ring");
ringFilter.onchange = function(){
        if(ringFilter.checked === true){
            for(let i = 0; i < allProducts.length; i++){
                if(allProducts[i].dataset.category === "ring"){
                     allProducts[i].style.display = "block";
            }
        }
    }
    else {
        for (let i = 0; i < allProducts.length; i++){
            if(allProducts[i].dataset.category === "ring"){
                allProducts[i].style.display = "none";
            }
        }
    }
}

//Ketting
let kettingFilter = document.getElementById("checkbox-ketting");
kettingFilter.onchange = function(){
        if(kettingFilter.checked === true){
            for(let i = 0; i < allProducts.length; i++){
                if(allProducts[i].dataset.category === "ketting"){
                     allProducts[i].style.display = "block";
            }
        }
    }
    else {
        for (let i = 0; i < allProducts.length; i++){
            if(allProducts[i].dataset.category === "ketting"){
                allProducts[i].style.display = "none";
            }
        }
    }
}

//Armband
let armbandFilter = document.getElementById("checkbox-armband");
armbandFilter.onchange = function(){
        if(armbandFilter.checked === true){
            for(let i = 0; i < allProducts.length; i++){
                if(allProducts[i].dataset.category === "armband"){
                     allProducts[i].style.display = "block";
            }
        }
    }
    else {
        for (let i = 0; i < allProducts.length; i++){
            if(allProducts[i].dataset.category === "armband"){
                allProducts[i].style.display = "none";
            }
        }
    }
}

//Oorbel
let oorbelFilter = document.getElementById("checkbox-oorbel");
oorbelFilter.onchange = function(){
        if(oorbelFilter.checked === true){
            for(let i = 0; i < allProducts.length; i++){
                if(allProducts[i].dataset.category === "oorbel"){
                     allProducts[i].style.display = "block";
            }
        }
    }
    else {
        for (let i = 0; i < allProducts.length; i++){
            if(allProducts[i].dataset.category === "oorbel"){
                allProducts[i].style.display = "none";
            }
        }
    }
}