<?php
    echo "este es el primer archivo php del projecto";
    echo "otra linea PHP";
    $git = "git remote add origin https://github.com/MaoAiz/Prueba.git";
    exec($git,$salida);
    foreach($salida as $line) {
        echo "$line<br>";
    }
    $git = "git pull origin master";
    exec($git,$salida);
    foreach($salida as $line) {
        echo "$line<br>";
    }


?>