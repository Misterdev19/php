<?php

$nombre = 'juan Camilo'; //type string

$cc = 114398617; // type int 

$decimal = 12.5000; // type float 

$bolean  = false; //  type boolean 

$a = 6;

$b  = 7;

$operacion = "*";

$edad  = 16;

// if($edad >= 18 ){   /// !=  and  <>   son tipo de comparacion diferentes
    
//     echo("el usuario es mayor de edad");
    
// }elseif($edad >= 15){
    
//     echo("Edad minima permitida para el usuario");
    
// }else{
    
//     echo("El usuari no es mayor de edad");
    
// }

switch ($operacion) {
    
    case "-":
        
         echo( $a - $b);
         
        break;
        
      case "*":
         echo( $a * $b);
        break;
    
    default:
           echo("el usuario no tiene la edad minima");
        break;
}



