<?php

// Isto é um comentário

$aluno = "Hikaru";
$idade = 23;

$x = 10;
$y = 5;
$aluno = "Ricardo";


echo $x + $y;
echo "<br>";
echo $aluno;

$primeiroNome = "Akira";
//$primeiro_nome = "";

echo "<br>";
echo $primeiroNome;
echo "<br>";
echo $aluno." ".$primeiroNome;

// Constantes

define("CPF", "878.233.760-50");
echo "<br>";
echo CPF;
//define("CPF", "575.485.845-85");
//echo CPF;


// Arrays
$cafeManha = array( "Pizza", "Torrada", "Café", "Cachorro-Quente" );
echo "<hr>";
print_r($cafeManha);
echo "<hr>";
echo $cafeManha["3"]."<br>";
echo $cafeManha["0"]."<br>";
echo $cafeManha["2"]."<br>";

$fulano = array(
    "nome" => "Robert",
    "idade" => 23,
    "signo" => "Leão",
);

echo "<hr>";
print_r($fulano);

//Outro Sintaxe do Array

$comida = [ "carne", "batata", "salada" ];
print_r($comida);
echo "<hr>";

//Arrays compostos

$dp = array(
    [
        "nome" => "Vitor",
        "cidade" => "Porto Alegre",
        "produto" => ["Martelo", "Solda", "Caixa de ferramentas"]
    ],
    [
        "nome" => "Alison",
        "cidade" => "Porto Alegre",
        "produto" => "Moto"
    ],
    [
        "nome" => "Lisa",
        "cidade" => "Porto Alegre",
        "produto" => "Mesa"
    ]
    
);
echo "<hr>";
echo $dp["1"]["nome"];
echo "<pre>";
print_r($dp);
echo "</pre>";
?>