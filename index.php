<?php

// $rang = 'Hojiakbar';

// $_num = 7;

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

// $string = 'Salom Dunyo!'; // string datatype
// $integer = 123123; // integer datatype
// $float = 1.23; // float datatype
// $boolean = true | false; // boolean datatype
// $array = ['str', 12, true]; // array data types
// $array2 = array('str', 12, true); //2-array data types arrayni ekranga chiqarish uchun echo bn printda chiqarip bolmaydi lekin print_r() bn chiqarish mumkin

// class Car {   //object datatypes
//     public $color;
//     public $model;
//     public function __construct($color, $model){
//         $this->color = $color;
//         $this->model = $model;
//     }
//     public function message(){
//        return "my car is a " . $this->color . " " . $this->model;
//     }

// }

// $myCar = new Car('black', 'Mers');
// echo $myCar -> message();   //object datatypes

// $nu = null;

// =======================================================

//string method funksiyalari

// $str = 'Salom, mening ismim Hojiakbar';

// echo strlen($str); // lengthni korsatadi
// // echo str_replace('mening', "", $str); //sozni olib tashlash

// echo strrev($str); //sozlarni teskari qiladi SALOM == MOLAS
// echo strpos($str, 'mening'); // mening sozi m harfi nechinchi indexda turganni korsatadi

// ==========================================

// matematik function================

// $pi = pi();

// echo $pi;

// $min = min(234,2435,3456524); // eng kichigini olib bERADI
// $max = max(234,2435,3456524); // eng kattasini olib bERADI
// $math = abs(-6.7); //musbatga aylantirad -6.7 ==== 6.7
// $ildiz - sqrt(9); //ildiz chiqaradi
// $butunOlish = round(1.5) // 0dan 5gacha 1ni oladi. 6dan 10gacha katasini oladi 1.3 === 1, 1.7 ===2 oladi

// ================================================================================

// CONSTANTS

// define('Dastur', 'Php');
// define('Dastur', 'Php/Yii2'); Bir xil o'zgaruvchi yozish mumkin emas.
// echo Dastur;

// ======================================================

// for, while, do while, foreach ====================

// FOR

//for ($x = 1; $x <= 5; $x++)
//{
//    echo $x . '<br>'
//}

//===============================================

// WHILE
$x = 1;

//while ($x <= 5) {
//    echo $x . '<br>';
//    $x++;
//}

//=======================================
//ARRAY FOREACH
// $royxat = ['yashil', 'qizil', 'sariq'];

// foreach ($royxat as $item){
//     echo $item . '<br>';
// }
// =======================================

//ARRAY ASSOTSIATIV

// $agePerson = array('John'=>35, 'Ben'=>40, 'Stive'=>45);

// foreach ($agePerson as $person=>$age){
//     echo $person . ' - ' . $age . '<br>';
// }

// =========================================

//DO WHILE

// do {
//     echo 'x teng' . $x;
// } while ($x <= 5);

//=========================================

// FUNCTION=================================

// function wind($ism){
//     echo 'Ekranga chiqar ' . $ism . '<br>';
// }

// wind('Hojiakbar');
// wind('Rasul');

//==============================================

//VAR_DUMP()====================================

$ozgaruvchi = '23232dfd';
var_dump($ozgaruvchi); // ekranga chiqarish

//===========================================

//Array ========================================

$royxat = ['32342', 'fwdsd', 'ght53']; //array birinchi korinishi
$royxat2 = array('32342', 'fwdsd', 'ght53'); //array ikkiinchi korinishi

//Array 3xil bo'ladi

// indexed arrays ======             $ozgar = [23,234,54];
// $ozgar[0]

//Associative array =====            $arr = ['Hoji'=>27, 'Rasul'=>57];
// $arr['Hoji']

// Multidimensional arrays ====      $massiv = [ ['chevrolet', 'cobolt'], ['nexia', 'gentra'], ['matiz', 'damas'],]
//  echo $massiv[0]['chevrolet'];

// foreach($arrays as $arr){
//     echo $arr;
// }

//============================================

// SUPER GLOBALS =============================

// var_dump($_SERVER);
// var_dump($_GET);
// var_dump($_REQUEST);
// var_dump($_REQUEST);
// var_dump($_POST);

// =====================================================

$car = 'Malibu';

$foods = ['Norin', 'Honim', 'Manti'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Salom</h1>
    <p>Mening yoqtirgan mashinam bu <?= $car ?></p>
    <h3>Taomlar</h3>
    <ul>
        <? foreach($foods as $food):?>
        <li><?=$food ?></li>
        <?endforeach?>
       
    </ul>
</body>
</html>

