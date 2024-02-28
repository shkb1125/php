<?php

$people = array(
    "person1" => array(
        "name" => "Taro",
        "age" => "25",
        "sex" => "men",
    ),
    "person2" => array(
        "name" => "Jiro",
        "age" => "20",
        "sex" => "men",
    ),
    "person3" => array(
        "name" => "Saburo",
        "age" => "16",
        "sex" => "women",
    )

);

foreach ($people as $person) {
    print $person["name"] . "(" . $person['age'] . "歳" . $person['sex'] .  ")";
    echo "<br>";
}



// echo "<br>";
// var_dump($people);

?>