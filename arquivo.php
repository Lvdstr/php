<?php
define("sasa", "texto genérico só pra encher linguiçá");

function criar($name){
    try{
        $criar_arquivo = fopen($name, "w");
        fwrite($criar_arquivo, sasa);
    } finally{
        fclose($criar_arquivo);
        echo "arquivo fechado<br/>";
    }
}

function ler(){
    $ler_arquivo = readfile("name.txt");
}

criar("name.txt");
ler();