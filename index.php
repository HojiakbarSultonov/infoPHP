<?php

$rang = 'Hojiakbar';

$_num = 7;

// $543543 = o'zgaruvchi son bn boshlash mumkin emas

// echo $rang . " " . $_num;

// function qoshish() {
//     global $rang; //tashqaridagi o'zgaruvchini GLOBAL methodi bn ishlatshimiz mumkin
//     echo $rang;
// }

// qoshish();

// ================================================

//EKRANGA CHIQARISH

// echo $rang;
// print $_num;
// echo "<h2>Php</h2>"; //HTML kod yozsa ham boladi
// echo $rang . ' - qoshish'; //  . nuqta bir biriga konkentratsiya qiladi yani qoshadi

// $x = 4;
// $y = 5;
// echo $x + $y;

// ===============================================

// DATA TYPES
//string
//integer
//float
//boolean
//array
//object
//null


$string = 'Salom Dunyo!'; // string datatype
$integer = 123123; // integer datatype
$float = 1.23; // float datatype
$boolean = true | false; // boolean datatype
$array = ['str', 12, true]; // array data types
$array2 = array('str', 12, true); //2-array data types arrayni ekranga chiqarish uchun echo bn printda chiqarip bolmaydi lekin print_r() bn chiqarish mumkin


class Car {   //object datatypes
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
       return "my car is a " . $this->color . " " . $this->model;
    }
   
}

$myCar = new Car('black', 'Mers');
echo $myCar -> message();   //object datatypes


$nu = null;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mening php filem</title>
</head>
<body>
    <div>
        salom
    </div>

    <div>
        <?php
echo $rang
?>
    </div>


</body>
</html>

