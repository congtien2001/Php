<?php 
    /* Câu lệnh rẽ nhánh */
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
    if ($bien1 > 0) {
        echo 'Biến 1 đủ điều kiện'.'<br>';
        if ($bien1 > 10){
            echo 'Biến 1 là số lớn'. '<br>';
        }
        else {
            echo 'Biến 1 là số nhỏ'. '<br>';
        }
    }else {
        echo 'Biến 1 không đủ điều kiện'. '<br>';
    }

?>