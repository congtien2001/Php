<?php 
    /* function makeTotal($a, $b){
        $tong = $a + $b;
        echo 'Tổng của a và b: '.$tong;
    }
        //cách 1
    makeTotal(4, 5);
        //cách 2
    $bien1 = 4;
    $bien2 = 5;
    makeTotal($bien1, $bien2); */
    //gọi hàm từ file khác để dùng
    include_once("ex23_funtion.php");

    $bien1 = 4;
    $bien2 = 5;
    //kiểm tra xem 1 hàm đã đc định nghĩa hay chưa
    if(function_exists('makeTotal')){
        makeTotal($bien1, $bien2);
    }


?>