<?php
/*===============================================================================
Function: A function is a piece of code that takes another input in the form of 
a parameter,processes it,and then returns a value. 
==================================================================================  */
function myMsg(){
    echo "My Bangladesh";
}
myMsg();

echo "<br>";  //Output: My Bangladesh

/*===============================================================================
parameters:These passed parameters act as variables inside your function.
They are specified inside the parentheses, after the function name. ($num1,$num2)

Argument: An argument is just like a variable. Arguments are specified after the function name, 
inside the parentheses. You can add as many arguments as you want, just separate them with a comma. (20,30)
==================================================================================  */

function getSum($num1,$num2){
    $sum = $num1 + $num2 . "<br>";
    echo "The sum is = ". $sum;
}
getSum(20,30);  //Output: The sum is = 50

getSum(5,6);    //Output: The sum is = 11
echo "<br>";

//PHP Functions with Parameters -------------------------->

function name($fname,$lname){
    echo "My name is  $fname $lname.<br>";
}
name("Bill","Gates");   //Output: My name is Bill Gates.
echo "<br>";

// The following example has a function with one arguments ($fname):------------>

function myTitle($fname){
    echo " $fname Ahmed <br>";
}
myTitle("Saikot");   //Output: Saikot Ahmed...
myTitle("Rahim");
myTitle("Karim");      
echo "<br>";

// The following example has a function with two arguments ($fname and $year):-------------->

function familyName($fname,$year){
    echo "My name is $fname Ahmed. Born is $year <br>";
}
familyName("Kamal",1995);      //Output:My name is Kamal Ahmed. Born is 1995...
familyName("Somrat",2003);
familyName("Rabbi",1998);     
echo "<br>";


//PHP Functions with Returning Value --------------------------------------------------> 

function myName($fname,$lname){
    $v = "$fname $lname";
    return $v;
}
//echo myName ("Maliha", "Rahman");   //Output: Maliha Rahman
$name = myName ("Maliha", "Rahman");
echo "Hi $name";    //Output: Hi Maliha Rahman 
echo "<br>";


function mySum($x,$y){
    $z= $x+$y;
    return $z;
}
echo "1 + 2 =". mySum (1,2)."<br>";
echo "10 + 10=". mySum (10,10). "<br>";    //Output:  10 + 10=20
echo "<br>";

//--------->

function subSum($bang,$eng,$math){
    $s = $bang + $eng + $math;
    return $s;
}
function percentage($st){
    $per = $st /3 ;
    echo $per;                 //Output: 63.333333333333
}
$total = subSum(50,60,80);
//echo $total;                //Output:  190
percentage($total); 
echo "<br>";

//--------------

function cost($vegitables,$fruits,$drinks){
    $l = $vegitables + $fruits + $drinks;
    return $l;
}
function percentage1($ct){
    $per = $ct / 3;
    echo $per ."%";           //Output: 266.66666666667%

}
//echo cost(100,200,300);
$total = cost(100,400,300);
//echo $total;
percentage1($total);

echo "<br>";

//PHP Function Argument By Reference --------------> 

function first($num){
    $num +=5;
}
function second(&$num){
    $num +=7;
}
$number = 10;
first($number);
echo "Original Number is $number <br>"  ; //Output: Original Number is 10

second($number);
echo "Original Number is $number <br> ";    //Output: Original Number is 17

echo "<br>";

//PHP Variable Functions ---------------->

function wow($name){
    echo "Hello $name";
}
//wow();
$func = "wow";
$func("Saikot");   //Output:Hello Saikot
echo "<br>";

//---------------> 
$func = function ($name){
    echo "$name Bangladesh";
};
$func ("Hello MY");   //Output: Hello MY Bangladesh
echo "<br>";


//PHP Recursive Function -------------------------> 

function display($number){
    if ($number <=5) {
        echo "$number <br>";
        display($number +1);
    }
    
}
display(4);   //Output: 4 5


//--------------------- factorial 

function factorial($n){
    if ($n==0) {
        return 1;
    } else {
        return ($n * factorial($n-1));
    }
}  
echo factorial(5);    //Output: 120

//test office 1

//OSTAD--------------->


























?>