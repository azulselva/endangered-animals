<?php

include 'data.php';

// var_dump(get_all_animals());

// Crea una función para mostrar los nombres de los animales en líneas separadas.

function list_animals (){
    $all_animals = get_all_animals();
    foreach($all_animals as $animal){
        echo $animal['name']. ',' . '<br>';
    }
}
list_animals();

// Crea una función que reciba el código del estado uicn
// y retorne el nombre del estado.

function uicn_status($key){
    $uicn_status = get_all_iucn_statuses();
    return $uicn_status[$key];
}
echo uicn_status('EX');