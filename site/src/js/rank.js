var foodf = localStorage.getItem('food_footprint');
var drinkf = localStorage.getItem('drink_footprint');

function calculateAndDisplayFootprint(){
    var total_footprint = parseInt(foodf) + parseInt(drinkf) + " CO2kg";
    var footprint_diff = parseInt(total_footprint) - parseInt(7.06);



    var message_tag = document.createElement("p");
    var total_tag = document.createElement("p");

    var total_text = document.createTextNode(total_footprint);
    total_tag.appendChild(total_text);
    

    if (footprint_diff > 0){
        var text = document.createTextNode("Your carbon footprint is more than average. Try to reduce your footprint for the benefit of our Earth!! To improve your carbon footprint you should try to use re-usable cups and bottles instead of buying new ones each time. You should also avoid buying plastic packaging. FOr your meals, you should try to eat from local production of fresh vegetables and fruits while also avoiding large portions of meat in your daily consumption. If not avoiding the parts in your diet with higher carbon footprints, you can dedicated some days of the ween or meals of the day where you try to consume a meal that is healthy for the environment.");

    } else if (footprint_diff < 0){
        var text = document.createTextNode("You're doing great!! Your carbon footprint is below average. Keep up the good work!!");
    } else if (footprint_diff == NaN){
        var text = document.createTextNode("You did not enter any values. Please try again!!");
    } else{
        var text = document.createTextNode("Your carbon footprint is average. Keep up the good work!!");
    }

    message_tag.appendChild(text);

    var total_element = document.getElementById("totalf")
    var diff_element = document.getElementById("difference")

    total_element.innerHTML = "";
    diff_element.innerHTML = "";

    total_element.appendChild(total_tag);
    diff_element.appendChild(message_tag);

}