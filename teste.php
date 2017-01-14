<?php

    $string = "Thiago dos Santos Celesino da Cunha";
    $nomeSobrenome = explode(" ", $string);
    print_r($nomeSobrenome);

    $nome = $nomeSobrenome[0];
    $sobrenome = end($nomeSobrenome);

    echo "<BR>".$nome . " " . $sobrenome;

?>
