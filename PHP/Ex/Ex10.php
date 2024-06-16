<?php
    //khai báo biến
    $a = 10;
    $b = 5;
    //toán tử số học
    echo $a + $b;
    echo "<br>";
    echo $a - $b;
    echo "<br>";
    echo $a * $b;
    echo "<br>";
    echo $a / $b;
    echo "<br>";
    echo $a % $b;
    echo "<br>";
    //toán tử gán (+=, -=, *=, /=, %=)
    echo $a += $b;
    echo "<br>";
    //toán tử so sánh (==, >=, <=, <, >, !=)
    if ($a == $b) {
        echo "a bang b";
    } else {
        echo "a khong bang b";
        echo"<br>";
    }
    //toán tử tăng giảm
    echo ++$a;//cộng trước rồi hiển thị
    echo --$a;//trừ trc rồi hiển thị
    echo "<br>";
    echo $a++;//hiển thị rồi cộng
    echo $a--;//hiện thị rồi trừ
    echo "<br>";
    //toán tử logic (&&, ||,!)

?>