<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Ejercicio . Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h1>
    <?php

    $numerosPares =[2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
    print "<pre>\n";
    foreach ($numerosPares as $valor){
        print "<p>$valor</p>\n";
    }
    ?>

    <h1>Ejercicio 2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la 
matriz. Mostrar el esquema del array con print_r().</h1>

<?php
    $array = ["Pedro", "Ana", 34, 1];
    print "<pre>\n";
    print_r($array);
?>

    <h1>Ejercicio 3. Crear un array asociativo e introducir los siguientes valores:
    Nombre: Pedro 
    Apellido: Torres
    Dirección: Av. Mayor 3703
    Teléfono: 1122334455</h1>

<?php
$persona = ['Nombre' => "Pedro",
            'Apellido' => "Torres",
            'Dirección' => "Av. Mayor 3703",
            'Teléfono'=> 1122334455,
];
    print "<pre>\n";
    print_r($persona);
?>

<h1>Ejercicio 4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y 
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array. 
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</h1>

<?php
$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
$i = 0;    
print "<pre>\n";
foreach ($ciudades as $valor){
    print "<p>La ciudad con el indice $i tiene el nombre $valor</p>\n";
    $i++;
};

?>

<h1>Ejercicio 5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, 
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago. 
Ejemplo: El índice de Madrid es MD. </h1>

<?php

$ciudad =[ 'MD' => "Madrid",'BCL' => "Barcelona",'LD' => "Londres",'NY' => "New York",'LA' => "Los Angeles",'CCG' => "Chicago"];

print "<pre>\n";
foreach ($ciudad as $indice => $valor){
    print "<p> El indice de " .$valor. " es " .$indice. " </p>\n";
    $i++;
};
?>
</body>
</html>