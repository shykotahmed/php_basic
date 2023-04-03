<?php
/* 
Index Array
print_r();
var_dump();
count();
Value Add
Array manipulation/array_(pop,push,shift,unshift)
foor loop array (count)
foreach --> variable k onno name assign kora
*/

//Index Array------->
$cars =array("BMW","Toyota","Audi","Laksana","Volbo");
echo $cars[1];    //Toyota
echo "<br>";
echo "I like ". $cars[0].",".$cars[1]. ",".$cars[2].".";  //I like BMW,Toyota,Audi.
echo "<br>";   

//print_r() --> show property name,value print 
print_r($cars);  //Array ( [0] => BMW [1] => Toyota [2] => Audi [3] => Laksana [4] => Volbo )
echo "<br>";

//var_dump()--> Show property value size,name,value type,proty value in detailes print
var_dump($cars); //array(5) { [0]=> string(3) "BMW" [1]=> string(6) "Toyota" [2]=> string(4) "Audi" [3]=> string(7) "Laksana" [4]=> string(5) "Volbo" }
echo "<br>";

//count Function --> count array value
echo count($cars);  //5
echo "<br>"; 

//Value Add --> array ar moddhe value add
$cars[]="Hundai";
print_r($cars); //Array ( [0] => BMW [1] => Toyota [2] => Audi [3] => Laksana [4] => Volbo [5] => Hundai )
echo "<br>";
//or
$cars[count($cars)]="Marcedices";
print_r($cars); //Array ( [0] => BMW [1] => Toyota [2] => Audi [3] => Laksana [4] => Volbo [5] => Hundai [6] => Marcedices )
echo "<br>";

//Array manipulation/array_(pop,push,shift,unshift)

//arry_pop()---> Last value Remove
array_pop($cars);
print_r($cars); //Array ( [0] => BMW [1] => Toyota [2] => Audi [3] => Laksana [4] => Volbo [5] => Hundai )
echo "<br>";

//array_push()--> Last theke value add
array_push($cars,"Pajeru","Land Cruser");
print_r($cars); //Array ( [0] => BMW [1] => Toyota [2] => Audi [3] => Laksana [4] => Volbo [5] => Hundai [6] => Pajeru [7] => Land Cruser )
echo "<br>";

//array_shift()--> 0 Index value remove
array_shift($cars);
print_r($cars); //Array ( [0] => Toyota [1] => Audi [2] => Laksana [3] => Volbo [4] => Hundai [5] => Pajeru [6] => Land Cruser )
echo "<br>";

//array_unshift--> 0 Index Value add
array_unshift($cars,"Tata","Eicher");
print_r($cars); //Array ( [0] => Tata [1] => Eicher [2] => Toyota [3] => Audi [4] => Laksana [5] => Volbo [6] => Hundai [7] => Pajeru [8] => Land Cruser )
echo "<br>";
//foor loop array (count) 

for ($i=0; $i <count($cars) ; $i++) { 
    echo $cars[$i]."<br>";
}
/*
Tata
Eicher...
 */

//or
$a = count($cars);
for ($i=0; $i <$a ; $i++) { 
    echo "My car is ". $cars[$i]."."."<br>";
}
/*
My car is Tata.
My car is Eicher. ....
*/

//foreach --> variable k onno name assign kora
foreach ($cars as $myCars) {
    echo $myCars."<br>";
}
/*
same output
Tata
Eicher... 
 */
?>