<?php 
# cette page permet de faire la conversion comme le fichier json, on a besoin de convertir les objet json en tableau
function json_to_array(string $key){
    $json = file_get_contents(PATH_DB);
    $array = json_decode($json, true);
    return $array[$key];
}
$data = (json_to_array("users"));

// function array_to_json(string $key, array $data){
//     $array = json_encode($data);
//     return $array[$key];
// }
// var_dump(array_to_json("users", $data));

