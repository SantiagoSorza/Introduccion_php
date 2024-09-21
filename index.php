<?php
//Usar El XEAMPP en vez del Go live


//Linea de comentario
/*
    Bloque de comentario
*/

//Varibales
$nombre = 'Pepe';
$edad = 12;
$promedio = 3.5;
$mayorEdad = TRUE; //FALSE  //Siempre en mayusculas
$numeros = [1,2,3,4,5,6]; //Array


//Imprimir
echo "Hola $nombre" ;

//Salto de linea
echo '<br>';

// El . es Concatenación 
echo 'Hola '.$nombre;

echo '<br>';
//Negrilla
echo "Hola <strong>$nombre</strong>" ;

echo '<br>';
//imprimir un numero del array
echo $numeros[0];

echo '<br>';
/*
* && and
* || or
* ! negacion
* == igual
* > mayor que
* < menor que 
* >= mayor o igual
* <= menor o igual
* != diferente
*/

if(TRUE){
    //bloque
}elseif(TRUE){
    //bloque
}else if (TRUE){

}else{
    //bloque
}

//Casos
$estado = 'a';

switch($estado){
    case 'a':
        //bloque 
        break;
    case 'b':
        //bloque 
        break;
    default:
        //bloque 
        break;
}

// For-------------------------------
$numeros = [12,11,10,9,8,7,6,5,4,3,2,1];
echo '<br>';
echo 'For';
echo '<br>';
for($i=0;$i < 12;$i++){
    echo $numeros[$i];
    echo '<br>';
}
echo '<br>';
// For con llamar metodo--------------------------
echo 'For con llamar metodo';
echo '<br>';
for($i=0;$i < count($numeros);$i++){
    echo $numeros[$i];
    echo '<br>';
}

//White--------------------------
echo 'White';
echo '<br>';
$i = 0;
while($i < count($numeros)){
    echo $numeros[$i];
    echo '<br>';
    $i++;
}

//Do while-----------------------
echo 'do while';
echo '<br>';
$i = 0;
do{
    echo $numeros[$i];
    echo '<br>';
    $i++;
}while($i < count($numeros));

//foreach----------------------------
echo 'foreach';
echo '<br>';
foreach($numeros as $n){
    echo $n;
    echo '<br>';
}
//foreach capturar la posicion y valor----------------------------
echo 'foreach capturar la posicion y valor';
echo '<br>';
foreach($numeros as $x=> $n){
    echo "$x : $n";
    echo '<br>';
}

//Llamar funciones------------------
function saludar($nombre){
    echo'<br>';
    echo "Hola $nombre";
    echo'<br>';
}
saludar('Juanita');

//retornar

function saludo($nombre){
    return "Hola $nombre";
}
    echo saludo('Pepe');