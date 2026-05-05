<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DMD - POO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .text-pink {
            color: #160548;
        }
    </style>
</head>

<body>

    <div class="container text-center my-5">
        <h1>DMD - POO</h1>
        <hr>

        <?php

        // Aqui entra o código PHP

        $num = 5;

        if ($num % 2 == 0) {
            echo "<p class='text-success'>O número $num é par.</p>";
        } else {
            echo "<p class='text-danger'>O número $num é ímpar.</p>";
        }


        $diaSemana = 0;
        switch ($diaSemana) {
            case 0:
                echo "<p style='color:red'>Domingo</p>";
                break;
            case 1:
                echo "Segunda-feira";
                break;
            case 2:
                echo "Terça-feira";
                break;
            case 3:
                echo "Quarta-feira";
                break;
            default:
                echo "Dia inválido";
        }

        // ternário
        $ativo = true;

        // $resultado = ($ativo == true) ? "Logado" : "Não logado";
        $resultado = $ativo ? "Logado" : "Não logado";
        echo $resultado;

        echo "<hr>";

        // estrurura de repetição
        for ($i = 0; $i <= 100; $i++) {
      
            if ($i % 2 == 0) {
                      echo "<strong class='text-success'>$i </strong>";
            } else {
                      echo "<strong class='text-pink'>$i </strong>";
            }
        }


        echo "<hr>";

        // while
        $contador = 0;
        while ($contador <= 100) {
            
            if($contador % 2 == 0) {
                echo "<strong class='text-warning'>$contador </strong>";
            } else {
                echo "<strong class='text-info'>$contador </strong>";
            }
            
            $contador++;
        }

        ?>


    </div>

</body>

</html>