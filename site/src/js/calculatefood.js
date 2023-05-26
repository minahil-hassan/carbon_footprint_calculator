function submitFormAndDisplayFootprint(){
    var typeOfFood1 = document.forms["foodForm"]["foodType1"].value;
    var quantity1 = document.forms["foodForm"]["quantity1"].value;
    var typeOfFood2 = document.forms["foodForm"]["foodType2"].value;
    var quantity2 = document.forms["foodForm"]["quantity2"].value;
    var typeOfFood3 = document.forms["foodForm"]["foodType3"].value;
    var quantity3 = document.forms["foodForm"]["quantity3"].value;

    var footprint1 = calculateFootprint(typeOfFood1, quantity1);
    var footprint2 = calculateFootprint(typeOfFood2, quantity2);
    var footprint3 = calculateFootprint(typeOfFood3, quantity3);

    var footprint = footprint1 + footprint2 + footprint3;

    addNewHTML(footprint.toFixed(1));
    storeFootprintInLocalStore(footprint.toFixed(1));
}

//function takes foodtype and quantity as parameters, calculates
//footprint and returns it
function calculateFootprint(foodtype, quantity){
    var footprint;
    switch(foodtype){
        case("chicken"):
            footprint = 6.9 * quantity;
            break;
        case("fish"):
            footprint = 6.1 * quantity; 
            break;
        case("pork"):
            footprint = 12.1 * quantity;
            break;
        case("turkey"):
            footprint = 10.9 * quantity;
            break;
        case("beef"):
            footprint = 27.0 * quantity;
            break;
        case("eggs"):
            footprint = 4.8 * quantity;
            break;
        case("rice"):
            footprint = 2.7 * quantity;
            break;
        case("noodlespasta"):
            footprint = 1.24 * quantity;
            break;
        case("beanstofu"):
            footprint = 2.0 * quantity;
            break;
        case("vege"):
            footprint = 2.0 * quantity;
            break;
        case("fruits"):
            footprint = 1.1 * quantity;
            break;
        case("lentils"):
            footprint = 0.9 * quantity;
            break;
        case("nuts"):
            footprint = 2.3 * quantity;
            break;
        case("potatoes"):
            footprint = 2.9 * quantity;
            break;
        case("cheese"):
            footprint = 13.5 * quantity;
            break;
        case("pitatortilla"):
            footprint = 3.9 * quantity;
            break;
        case("bread"):
            footprint = 0.84 * quantity;
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
    localStorage.setItem('food_footprint', f);
}