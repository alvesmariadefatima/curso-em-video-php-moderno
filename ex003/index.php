<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = octal
        $num = 010;
        echo "O valor da variável é $num";
        echo "<br>"; 

        $v = "Maria de Fátima";
        var_dump($v);
        echo "<br>";

        $num = (integer) 5e3; // Coerção
        echo "O valor é $num";
        var_dump($num);
        echo "<br>"; 

        $num = (float) "950";
        var_dump($num);
        echo "<br>";

        $casado = false;
        var_dump($casado);
        print "O valor para casado é $casado";
        echo "<br>";

        $vet = [6, 2.5, "Maria", 13, false];
        var_dump($vet);
        echo "<br>";

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>