<?php

do {
    $Hora = readline("Digite a hora (0 a 24): ");

    if ($Hora >= 0 && $Hora <= 24) {
        $Minutos = $Hora * 60;
        echo "Se passaram $Minutos minutos.\n";
        break; 
    } else {
        echo "Digite uma hora válida.\n";
    }

} while (true);

