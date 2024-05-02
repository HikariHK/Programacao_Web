
<?php
$students = [
    [
        "name" => "Kohinata", 
        "course" => "ADS", 
        "score" => 10
    ],
    [
        "name" => "Hikaru", 
        "course" => "PMM", 
        "score" => 7
    ],
    [
        "name" => "Asuka", 
        "course" => "RS", 
        "score" => 9
    ],
    [
        "name" => "Emilyko", 
        "course" => "ADS", 
        "score" => 6],
    [
        "name" => "Ichigo", 
        "course" => "RS", 
        "score" => 10
    ]
];


foreach ($students as $student) {
    echo "O aluno " . $student["name"] . " do curso " . $student["course"] . " tirou nota " . $student["score"] . ".<br>";
}