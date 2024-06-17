<?php
    //khai báo biến
    $a = 10;
    $b = 5;
    $name = "Nguyen Cong Tien tuoi: ";
    $age = 23;
    $nameAndAge = $name . $age;
    
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
    //toán tử logic (&&(and), ||(or),!(ngược lại kq), ^(xor))
    if ($a > 10 &&  $b < 10) {
        echo "và";
        echo "<br>";
    }
     if ($a > 10 || $b < 10) {
        echo "hoặc";
        echo "<br>";
    }
    if ($a > 10 or $b < 10) {
        echo "!";
        echo "<br>";
    }
    if ($a > 5 xor $b > 8) {// lưu ý
        echo "dấu mũ";
        echo "<br>";
    }
    //toán tử chuỗi
    echo $name.$age;
    echo "<br>";
    echo $nameAndAge;
    echo "<br>";
    echo $name .= $age;// cũng là nối chuỗi
    echo "<br>";
    //toán tử mảng
    //toán tử gán có điều kiện
?>