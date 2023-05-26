var totalCarbonFootprint = 0;

function submitFormAndDisplayFootprint() {
  var selectElements = document.querySelectorAll('.select-box');
  selectElements.forEach(function(selectElement) {
    var foodItem = selectElement.value;
    var quantity = selectElement.parentNode.querySelector('.quantity').value;
    var carbonValue = getCarbonValue(foodItem, function(response) {
      var parsedResponse = parseInt(response);
      if (!isNaN(parsedResponse)) {
        return parsedResponse * quantity;
      } else {
        return 0;
      }
    });
    totalCarbonFootprint += carbonValue;
  });

  addNewHTML();
  storeFootprintInLocalStore();
}

function getCarbonValue(foodItem, callback){
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

function addNewHTML(){
  var message_tag = document.createElement("h2");
  var text = document.createTextNode("Your food carbon footprint is: ");
  message_tag.appendChild(text);
  var footprint_tag = document.createElement("h1");
  var number = document.createTextNode(totalCarbonFootprint.toFixed(1) + " CO2kg")
  footprint_tag.appendChild(number);
  var element = document.getElementById("new");
  element.innerHTML = "";
  element.appendChild(message_tag);
  element.appendChild(footprint_tag);
}

function storeFootprintInLocalStore(){
  localStorage.setItem('food_footprint', totalCarbonFootprint.toFixed(1));
  //POND: 55-59: - Sends footprint to send_score.php, which will send score to database.
  var ans = new XMLHttpRequest();
  value = localStorage.getItem('food_foodprint')
  ans.open("POST","send_score.php?q=" + value,true)
  ans.send()
}
