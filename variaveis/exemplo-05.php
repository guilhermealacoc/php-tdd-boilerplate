<?php

$nome = 'Galucio';

function teste(){
    global $nome;
    echo $nome;
}

function teste2(){
    global $nome;
    echo $nome . "agora no teste";
}

teste();
teste2();