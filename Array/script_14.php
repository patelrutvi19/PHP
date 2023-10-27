<?php

    $personDetails = array(
        "name" => "John Doe",
        "age" => 30,
        "email" => "johndoe@example.com"
    );

    unset($personDetails["email"]);

    print_r($personDetails);
?>