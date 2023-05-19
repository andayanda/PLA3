<?php
function validarDatos($nif, $nom,$addr){
$errors='';
if (empty($nif)) {
    $errors .= "Nif obligatori<br>";
}
if (empty($nom)) {
    $errors.= "Nom obligatori<br>";
}
if (empty($addr)) {
    $errors.= "Adreça obligatoria<br>";
}

if (!empty ($error)) {
    throw new Exception($errors);   

}}
?>