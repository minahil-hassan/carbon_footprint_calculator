var CarbonData;
var totalCarbonFootprint;
var totalfoodprint;
var totaldrinkprint;

document.addEventListener("DOMContentLoaded", () => {
  fetch('carbon_data.php')
  .then(response => response.json())
  .then(result => {
    console.log(result);
    CarbonData = result;
    console.log(CarbonData);
    totalCarbonFootprint=0;
    totalfoodprint = 0;
    totaldrinkprint = 0;
  })
})


function submitFormAndDisplayFFootprint(food, quantity) 
{
  CarbonData.forEach(function(item){
    if(item.foodid == food){
      console.log(parseFloat(item.carbonvalue));
      totalfoodprint += parseFloat(item.carbonvalue) * quantity;
      addNewHTML(); // call the function to update the webpage
      return 0;
    }
  });
}

function submitFormAndDisplayDFootprint(drink, quantity) 
{
  CarbonData.forEach(function(item){
    if(item.foodid == drink){
      console.log(parseFloat(item.carbonvalue));
      totaldrinkprint += parseFloat(item.carbonvalue) * quantity;
      addNewHTML(); // call the function to update the webpage
      return 0;
    }
  });
}



function getCarbonValue(foodItem, callback){//this is mp shit
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
              // Call the callback function with the response text
              callback(xhr.responseText);
          } else {
              // If the request fails, display an error message on the page
              document.getElementById("carbonValue").innerHTML = "An error occurred while fetching the carbon value.";
          }
      }
  };
  xhr.open("GET", "carbon_data.php?foodItem=" + foodItem, true);
  xhr.send();
}






function addNewHTML() {
  totalCarbonFootprint = totaldrinkprint + totalfoodprint;
  document.getElementById("totalfoodprint").innerHTML = totalfoodprint.toFixed(1);
  document.getElementById("totaldrinkprint").innerHTML = totaldrinkprint.toFixed(1);
  document.getElementById("totalCarbonFootprint").innerHTML = totalCarbonFootprint.toFixed(1);
}


function storeFootprintInLocalStore(){
  localStorage.setItem('food_footprint', totalCarbonFootprint.toFixed(1));
}

function resetVariables(){
  totalCarbonFootprint = 0;
  totalfoodprint = 0;
  totaldrinkprint = 0;
}