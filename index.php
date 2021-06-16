<?php
$categorias = [];
$categorias[] ="infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

print_r($categorias);
$nome = "mario";
$idade = 13;

if($idade >= 6 and $idade <=12){
    for($i=0; $i < count($categorias);$i++){
        if($categorias[$i] == "infantil"){
            echo "O nadador ".$nome." está na categoria ".$categorias[$i];
        }
    }
}elseif($idade >= 13 and $idade <=18){
    for($i=0; $i < count($categorias);$i++){
        if($categorias[$i] == "adolescente"){
            echo "O nadador ".$nome." está na categoria ".$categorias[$i];
        }
    }
}else{
    for($i=0; $i< count($categorias);$i++){
        if($categorias[$i] == "adulto"){
            echo "O nadador ".$nome." está na categoria ".$categorias[$i];
        }
    }
}