<?php
//Associative array --> Key(=>) & Value diye assign kora thake
$salary['Ahmed']=20000;
$salary['Rahim']=15500;
echo $salary['Rahim']; //15500
echo "<br>";
//or
$age = array('Sara' => 8, 'Zara'=> 5, 'Shuvo' =>28, 'Maliha' => 24,);
echo "My age is ". $age['Zara'];  //My age is 5
echo "<br>";
print_r($age);
echo "<br>";

//Loop Through an Associative Array
foreach ($age as $key => $value) {
    echo "Key ". "= ".$key. ", ". "Value". "= ".$value;  //Key = Sara, Value= 8    Key = Zara, Value= 5 ...
    echo "<br>";
}

//Item add
$foods = array(
    'fruits' => 'Mango, Appel, Orange',
    'Vegetables' => 'Tomato, Carrot',
    'drinks' => 'Pepsi, Cocacola, Sprite'
);
echo $foods['drinks'] ;   //Pepsi, Cocacola, Sprite
echo "<br>";
$foods['vegetable'] .= ',Potato';
echo $foods['vegetable'];















?>