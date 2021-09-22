<?php

/**
 * Funcion para validar y limpiar el campo
 * 
 * @param $campo  Tiene que ser campo de tipo POST
 * @return string 
 */
function validar_campo($campo)
{
    $campo = trim($campo);
    $campo = stripslashes($campo);
    $campo = htmlspecialchars($campo);

    return $campo;
}
