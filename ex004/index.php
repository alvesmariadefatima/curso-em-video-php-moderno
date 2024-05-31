<?php
    $nome = "Maria de Fátima";
    $sobrenome = "Nunes Alves ❤️";

    echo "$nome $sobrenome";
    echo "<br>";
    
    const CANAL = "Curso em Vídeo \u{1F499}";
    echo "Eu adoro o " . CANAL;
    echo "<br>";

    echo "Estamos no ano de " . date('Y');
    echo "<br>";

    $nome = "Maria de Fátima";
    $sobrenome = "Nunes Alves";
    $apelido = "Dory";

    echo "$nome \t\t \"$apelido\" \t\t$sobrenome";
    echo "<br>";

    $canal = "Curso em Vídeo";
    $ano = date('Y');

    echo <<< 'TESTE'
        Olá galera do $canal!
        Tudo bem com vocês?
        Como está sendo esse ano de $ano?
        Abraços 🤗
    TESTE;
?>