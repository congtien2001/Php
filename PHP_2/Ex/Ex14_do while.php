<?php 
    //vòng lặp do while
    //trường hợp đúng
    $i=1;
    do{
        echo $i."<br>";
        $i++;
    } while ($i <= 10);
    echo "<br>";
    //trường hợp sai
    $i=1;
    do{
        echo $i."<br>";
        $i++;
    } while ($i >= 10);{
        echo "câu lệnh sai";
    }
    /* vì i không thể lớn hơn = 10 
    nên câu lệnh ngang echo là dừng */
?>