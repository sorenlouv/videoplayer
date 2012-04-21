<?php
function find_all_files($dir, $allowed_extensions = array()) { 

    $result = array();
    $root = scandir($dir);
    foreach($root as $value){ 
        // omit parent folder
        if($value === '.' || $value === '..') {continue;} 

        // add file to array
        if(is_file("$dir/$value")) {
            // only fetch allowed extensions
            $path_parts = pathinfo($value);
            if(empty($allowed_extensions) || in_array($path_parts['extension'], $allowed_extensions)){
                $path = "$dir/$value";
                $result[] = array("label" => str_replace("_", " ", $path_parts["filename"]), "path" => $path, "hash" => md5($path));
            }
            continue;
        } 

        // open next level (folder)
        foreach(find_all_files("$dir/$value") as $value) { 
            $result[]=$value; 
        }
    } 
    return $result; 
} 
?>