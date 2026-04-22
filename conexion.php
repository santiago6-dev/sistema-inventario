<?php 
function Conectarse() 
{ 
    $link = mysqli_connect("localhost", "root", "", "venta");

    if (!$link) { 
        die("Error conectando: " . mysqli_connect_error());
    }

    return $link; 
} 
?>