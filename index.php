<?php


$number  =  array( 1, 2, 3, 4 , 5 , 6 , 7);  //incremental array


$persona = [
             array( "nombre" => "camio", "edad" => 19 , "user_name" => "juan_penagos" ,  "status" =>  true , "datos" => $number ),
             array( "nombre" => "pepito", "edad" => 20 , "user_name" => "pepito20" ,  "status" =>  true , "datos" => $number )
            ]; // asosition array

// echo "<pre>";
// print_r($persona);

// for("contador" "condicion" "incrmento"){

//      "codido"
// }

//blucle for 

// for($i = 0 ; $i < 6 ; $i++){

//      echo $number[$i];

// }

//while

$count  = 0;

// while($count < 5){
 
//     echo $count;

//     $count++ ;
// }


// foreach("array"  "alias" "values"){
//         "codigo";
// }

//foreach bucler
// echo "<pre>";
// print_r($persona);

$table  = "<table style='width:100%'>
<tr>
  <th>Nombre</th>
  <th>Edad</th>
</tr>
";

foreach($persona AS $row){

    $table  .= "<tr>
                <td>". $row['nombre']."</td>
                <td>".$row['edad']."</td>
            </tr>";

}


$table."</table>";


echo $table;



?>