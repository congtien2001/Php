<?php 
    /* vòng lặp while
    kiểm tra đk lặp trước rồi mới thực hiện câu lệnh */
    echo 'Vòng lặp while: <br>';
    $a = 0;
    while ($a < 10) {
        echo $a. '<br>';
        $a++;
    }
    /*vòng lặp do while
    thực hiện câu lệnh trước rồi mới kiểm tra đk lặp ở dưới, có ít nhất 1 lần thực hiện câu lệnh */
    echo'Vòng lặp do-while: <br>';
    $b = 0;
    do {
        echo $b. '<br>';
        $b++;
    } while ($b < 10);
?>