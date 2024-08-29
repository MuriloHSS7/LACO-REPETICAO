<!DOCTYPE html>
<html>
    <header>
        <title>Repetição</title>
    </header>
    <body>
        <h1>Laço de Repetição</h1>
        <?php
            $numero = 1;
            while($numero <= 6){
                echo $numero;
                $numero++;
            }
            echo"<br>";
            echo"<br>";
            $numero = 1;
            while($numero < 10){
                if($numero == 8) break;
                echo $numero;
                $numero++;
            }
            echo"<br>";
            echo"<br>";
            $numero = 0;
            while($numero < 100){
                $numero += 10;
                echo $numero."<br>";
            }
            echo"<br>";
            echo"<br>";
            define("INFERIOR",1);
            define("SUPERIOR",100);
            $numero = rand(INFERIOR, SUPERIOR);
            echo"O número sorteado é: ";
            echo $numero;
        ?>
    </body>
</html>