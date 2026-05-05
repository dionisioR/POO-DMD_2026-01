<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    require_once "Aluno.php";
    $aluno1 = new Aluno();
    $aluno1->nome = "João"; 
    // $aluno1->idade = 20;
    $aluno1->idade = -2000;
    $aluno1->curso = "DMD";

    echo "Nome: " . $aluno1->nome . "<br>";
    echo "Idade: " . $aluno1->idade . "<br>";
    echo "Curso: " . $aluno1->curso . "<br>";



?>
    
</body>
</html>