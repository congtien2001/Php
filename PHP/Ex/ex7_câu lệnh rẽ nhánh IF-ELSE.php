<?php 
    /* Câu lệnh rẽ nhánh if-else */
    $bien1 = 10;

    if ($bien1 > 0) {
        echo'Biến 1 lớn hơn 0'. '<br>';
    } 
    else if($bien1 == 5) {
        echo 'Biến 1 bằng 5'. '<br>';
    }
    else if($bien1 ==10) {
        echo 'Biến 1 lớn nhất'. '<br>';
    }
    else {
        echo 'Trường hợp còn lại'. '<br>';
    }
    //if else lồng nhau
    $bien2 = 20;
    if ($bien2 > 0) {
        echo 'Biến 2 đủ điều kiện'.'<br>';
        if ($bien2 > 10){
            echo 'Biến 2 là số lớn'. '<br>';
        }
        else {
            echo 'Biến 2 là số nhỏ'. '<br>';
        }
    }else {
        echo 'Biến 2 không đủ điều kiện'. '<br>';
    }
?>