<?php
    $people = [
        [
            "name" => "Taro",
            "age" => 25,
            "gender" => "men"
        ],
        [
            "name" => "Jiro",
            "age" => 20,
            "gender" => "men"
        ],
        [
            "name" => "hanako",
            "age" => 16,
            "gender" => "women"
        ]
    ];

    foreach($people as $person){
        $name = $person["name"];
        $age = $person["age"];
        $gender = $person["gender"];
        echo $name . "(" . $age . "歳" . $gender . ")" . "<br/>";
    }
?>