<?php

include 'data.php';

// var_dump(get_all_animals());

// Crea una función para mostrar los nombres de los animales en líneas separadas.

function list_animals (){
    $all_animals = get_all_animals();
    foreach($all_animals as $animal){
        echo $animal['name']. ',' . '<br>';
        animal_description($animal);
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


$Animal_description = get_all_animals();
$one_animal = $Animal_description[0];

function animal_description($one_animal){
    $cons_program = $one_animal['conservation_programs'];

    echo '<br>';
    echo $one_animal['name'] . '<br> <br>';
    echo $one_animal['description'] . '<br> <br>';
    echo 'País: ';
    echo $one_animal ['country'] . '<br>';
    echo 'Estado: ';
    $estado = $one_animal ['iucn_status'];
    echo uicn_status($estado) . '<br>';
    echo 'Población estimada: ';
    echo $one_animal  ['estimated_population'] . '<br>';
    echo 'Programas de conservación:'. '<br>';
    foreach ($cons_program as $value) {
        echo '- ' . $value . '<br>';
    }
}
animal_description($one_animal);


