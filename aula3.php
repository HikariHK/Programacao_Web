<?php

/* Comandos de Repetição (looping)) */



/*                      
    Numero|      |O que acontece
      Que |      |com o i a cada
    começa|Logica|a cada contagem do looping*/

//  $i++ é a mesma coisa que $i = $i + 1;
for ($i=1; $i <= 10; $i++) {
    echo "$i - Sextou!<br>";
}
echo "<hr>";

for ($i=1; $i < 20; $i+=2) {
    echo "$i - ";
}
echo "<hr>";

$dbz = ["Goku", "Vegeta", "Kuririn", "Trunks", "Gohan", "Luocha", "Kafka"];

$contagem = count($dbz);
for ($i=0; $i < $contagem; $i++) { 
    echo $dbz[$i]."<br>";
}

echo "<hr>";

$indice = 0;
while ($indice < $contagem) {
    echo $dbz[$indice]."<br>";
    $indice++;
}
echo "<hr>";


// foreach - perfeito para se trabalhar com arrays


echo "<h1>Criado com o Foreach</h1>";
foreach ($dbz as $character) {
    echo "$character - Morreu"."<br>";
}
$products = array(
    [
        "nome" => "Martelo",
        "marca" => "Serra velha",
        "preço" => 1.50
    ],
    [
        "nome" => "Serrote",
        "marca" => "Serra nova",
        "preço" => 20.30
    ],
    [
        "nome" => "Alicate",
        "marca" => "Boa esperaça",
        "preço" => 30.30
    ]
);

echo "<hr>";
#echo $products["1"]["marca"];

foreach ($products as $product) {
    echo "<p>O produto ".$product['nome']." da marca ".$product['marca']." está custando ".$product['preço'].".</p>";
}

$frutas = ["Melancia", "Maça", "Pera", "Banana"];

foreach ($frutas as $key => $fruta) {
    echo "$key - $fruta <br>";
}

?>