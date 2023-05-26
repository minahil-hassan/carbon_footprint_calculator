<?php

// echo("Hello World \n");

// print_r($data);


?>

<?php

require_once('config.inc.php');

$hostname = 'dbhost.cs.man.ac.uk';

try {

  $conn = new PDO("mysql:host=$hostname;dbname=2022_comp10120_y7", $database_user, $database_pass);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  getCarbonData($conn);

}

catch(PDOException $e) {
  echo "Error". $e->geMessage();
}

function createTable($conn)
{
    $sql = "CREATE TABLE IF NOT EXISTS carbon_table
            (
                foodid VARCHAR(30) not null, 
                carbonvalue VARCHAR(5) not null,
                carbdescription VARCHAR(35) not null,

                PRIMARY KEY (foodid) 
                )";

    $conn->exec($sql);
    echo "Table created" ;         

}


function carbonData()
/*
Data source: co2everything.com
Link: https://www.co2everything.com/a-z
Citation: "Carbon Values for Foods and Drink." co2everything.com. Accessed Feb 20, 2023.
*/
{
    $values['Beef'] = array ("carbonvalue" => "15.5",
                                "carbdescription" => "One serving of beef/100g",
                                    );

    $values['Lamb'] = array("carbonvalue" => "5.84",
                                  "carbdescription" => "One serving of lamb/100g"
                                    );    

    $values['Prawns'] = array("carbonvalue" => "4.07",
                                  "carbdescription" => "One serving of prawns/100g"
                                    );
    $values['Cheese'] = array ("carbonvalue" => "2.79",
                                "carbdescription" => "One serving of cheese/100g",
                                    );

    $values['Pork'] = array("carbonvalue" => "2.4",
                                  "carbdescription" => "One serving of pork/100g"
                                    );    

    $values['Chicken'] = array("carbonvalue" => "1.82",
                                  "carbdescription" => "One serving of chicken/100g"
                                    );
    $values['Fish'] = array ("carbonvalue" => "1.34",
                                "carbdescription" => "One serving of fish/100g",
                                    );

    $values['Dark_Chocolate_Bar'] = array("carbonvalue" => "0.95",
                                  "carbdescription" => "One bar/50g"
                                    );
    $values['Milk_Chocolate_Bar'] = array("carbonvalue" => "0.25",
                                  "carbdescription" => "One bar/50g"
                                    );                                        

    $values['Eggs'] = array("carbonvalue" => "0.53",
                                  "carbdescription" => "2 Small eggs/100g"
                                    );
    $values['Tomato'] = array ("carbonvalue" => "0.32",
                                "carbdescription" => "One tomato/150g",
                                    );

    $values['Berries'] = array("carbonvalue" => "0.22",
                                  "carbdescription" => "A serving of berries/144g"
                                    );    

    $values['Rice'] = array("carbonvalue" => "0.16",
                                  "carbdescription" => "One serving of rice/100g"
                                    );
    $values['Banana'] = array ("carbonvalue" => "0.11",
                                "carbdescription" => "One banana",
                                    );

    $values['Tofu'] = array("carbonvalue" => "0.08",
                                  "carbdescription" => "One serving of tofu/100g"
                                    );    

    $values['Apple'] = array("carbonvalue" => "0.06",
                                  "carbdescription" => "One apple"
                                    );
    $values['Cabbage'] = array ("carbonvalue" => "0.05",
                                "carbdescription" => "One serving/100g",
                                    );

    $values['Kale'] = array("carbonvalue" => "0.05",
                                  "carbdescription" => "One serving/100g"
                                    );    

    $values['Nuts'] = array("carbonvalue" => "0.05",
                                  "carbdescription" => "Mixed nuts/100g"
                                    );
    $values['Orange'] = array ("carbonvalue" => "0.05",
                                "carbdescription" => "One orange",
                                    );

    $values['Potatoes'] = array("carbonvalue" => "0.05",
                                  "carbdescription" => "One potato/100g"
                                    );    

    $values['Carrot'] = array("carbonvalue" => "0.04",
                                  "carbdescription" => "One serving/100g"
                                    );
    $values['Cow_Milk'] = array ("carbonvalue" => "0.8",
                                "carbdescription" => "One glass/250ml",
                                    );

    $values['Coffee'] = array("carbonvalue" => "0.4",
                                  "carbdescription" => "One cup/15g"
                                    );    

    $values['Rice_Milk'] = array("carbonvalue" => "0.3",
                                  "carbdescription" => "One glass/250ml"
                                    );
    $values['Beer'] = array ("carbonvalue" => "0.25",
                                "carbdescription" => "One bottle/355ml",
                                    );

    $values['Soy_Milk'] = array("carbonvalue" => "0.25",
                                  "carbdescription" => "One glass/250ml"
                                    );    

    $values['Oat_Milk'] = array("carbonvalue" => "0.22",
                                  "carbdescription" => "One glass/250ml"
                                    );
    $values['Almond_Milk'] = array ("carbonvalue" => "0.18",
                                "carbdescription" => "One glass/250ml",
                                    );

    $values['Coke'] = array("carbonvalue" => "0.17",
                                  "carbdescription" => "One can/330ml"
                                    );    

    $values['Wine'] = array("carbonvalue" => "0.13",
                                  "carbdescription" => "One glass/150ml"
                                    );
    $values['Pasta'] = array("carbonvalue" => "0.264",
                                  "carbdescription" => "One serving/100g"
                                    );


    return $values;
}

function insertCarbonData($conn)
{
    $values = carbonData();
    $sql = "INSERT IGNORE INTO carbon_table (foodid, carbonvalue, carbdescription) 
            VALUES (:foodid, :carbonvalue, :carbdescription)";

    foreach ($values as $foodid => $fooddata) 
    {
        $carbonvalue = $fooddata['carbonvalue'];
        $carbdescription = $fooddata['carbdescription'];

        $stmt = $conn->prepare($sql);

        $stmt->execute([
            'foodid' => $foodid,
            'carbonvalue' => $carbonvalue,
            'carbdescription' => $carbdescription
        ]);
    }    
    echo "Inserted Data successfully!  ";
}

function getCarbonData($conn) {

    $sql = "SELECT * FROM carbon_table";
    $result = $conn->query($sql)->fetchAll();

    echo json_encode($result);
}


?>
