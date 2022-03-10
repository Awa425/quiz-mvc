<?php 
# cette page permet de faire la conversion comme le fichier json, on a besoin de convertir les objet json en tableau

//recuperation des donnees
function json_to_array(string $key){
    $json = file_get_contents(PATH_DB);
    $array = json_decode($json, true);
    return $array[$key];
}


//Enregistrement et mise a jour des donnees
function array_to_json(string $key, array $data){
        $json = file_get_contents(PATH_DB);
        $js_arr = json_decode($json, true);
        $js_arr[$key][] = $data;
        $arr_js = json_encode($js_arr);
        file_put_contents(PATH_DB, $arr_js);
}


