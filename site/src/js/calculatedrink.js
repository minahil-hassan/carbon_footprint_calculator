function submitFormAndDisplayFootprint(){
    var typeOfDrink1 = document.forms["drinkForm"]["drinkType1"].value;
    var quantity1 = document.forms["drinkForm"]["quantity1"].value;
    var typeOfDrink2 = document.forms["drinkForm"]["drinkType2"].value;
    var quantity2 = document.forms["drinkForm"]["quantity2"].value;
    var typeOfDrink3 = document.forms["drinkForm"]["drinkType3"].value;
    var quantity3 = document.forms["drinkForm"]["quantity3"].value;

    var footprint1 = calculateFootprint(typeOfDrink1, quantity1);
    var footprint2 = calculateFootprint(typeOfDrink2, quantity2);
    var footprint3 = calculateFootprint(typeOfDrink3, quantity3);

    var footprint = footprint1 + footprint2 + footprint3;

    addNewHTML(footprint.toFixed(1));
    storeFootprintInLocalStore(footprint.toFixed(1));
}

//function takes drinktype and quantity as parameters, calculates
//footprint and returns it
function calculateFootprint(foodtype, quantity){
    var footprint;
    switch(foodtype){
        case("plastic bottle"):
            footprint = 0.828 * quantity;
            break;
        case("glass bottle"):
            footprint = 0.503 * quantity; 
            break;
        case("tin can"):
            footprint = 0.096 * quantity;
            break;
        case("paper cup"):
            footprint = 0.11 * quantity;
            break;
    }
    return(footprint);
}

function addNewHTML(t){
    var message_tag = document.createElement("h2");
    var text = document.createTextNode("Your food carbon footprint is: ");
    message_tag.appendChild(text);
    var footprint_tag = document.createElement("h1");
    var number = document.createTextNode(t + " CO2kg")
    footprint_tag.appendChild(number);
    var element = document.getElementById("new");
    element.innerHTML = "";
    element.appendChild(message_tag);
    element.appendChild(footprint_tag);
}

function storeFootprintInLocalStore(f){
    localStorage.setItem('drink_footprint', f);
}