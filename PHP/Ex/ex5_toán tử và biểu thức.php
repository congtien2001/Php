<?php 
    /* toán tử gán */
    $bien1 = 5;

    $bien2 = 6;
    $bien2 += 10;// $bien2 = $bien2 +10;
    echo 'Biến số 2 = '. $bien2. '<br>';

    $bien3 = 9;
    $bien3 -= 6;// $bien3 = $bien3 - 6;
    echo 'Biến số 3 = '. $bien3. '<br>';

    $bien4 = 10;
    $bien4 *= 10;
    echo 'Biến số 4 = '. $bien4.'<br>';

    $bien5 = 9;
    $bien5 /= 3;
    echo 'Biến số 5 = '.$bien5.'<br>';
    //chia lấy dư
    $bien6 = 10;
    $bien6 %= 3;// $bien6 = $bien6 % 7;
    echo 'Biến số 6 = '. $bien6.'<br>';
    //toán tử gán  .=
    $bien7 = 'Storm ';
    $bien7 .= 'Nguyen Cong Tien';
    echo 'Biến số 7: '. $bien7. '<br>';

    /* toán tử số học */
    $bien8 = 25;
    $bien8 = $bien8 % 20;// dư 5
    echo 'Biến số 8: '. $bien8. '<br>';
    //toán tử luỹ thừa
    $bien9 = 2;
    $bien10 = 5;
    $bienTong = $bien9 ** $bien10;
    echo 'Toán tử luỹ thừa: '.$bienTong.'<br>';
    //toán tử ++
    //toán tử --

    /* Toán tử so sánh */
    $bien10 = 10;
    $bien11 = "10";
    //== : so sánh giá trị;
    echo $bien10 == $bien11;//true
    echo '<br>';
    //=== : so sánh tuyệt đối giá trị lẫn dữ liệu
    echo 'Kết quả: '. ($bien10 === $bien11). '<br>';//flase
    /* != : so sánh khác nhau */
    $bien12 = 5;
    $bien13 = 10;
    echo 'so sánh khác nhau: '. ($bien12 != $bien13). '<br>';

    /* Toán tử lý luận */
    //$$: trả về kiểu dữ liệu boolean(true, flase), cùng đúng hoặc cùng sai   
    $bien14 = 10;
    $bien15 = 5;
    $bien16 = 8;
    echo 'Kết quả &&: '. (($bien14 > $bien15) && ($bien15 < $bien16)). '<br>';
    //||: toán tử luận trả boolen(true, flase); chỉ cần 1 trong 2 vế đúng là đúng ngược lại
    echo 'Kết quả ||: '. (($bien14 < $bien15) || ($bien15 < $bien16)). '<br>';
    //!: phủ định
    $bien17 = false;
    echo 'Kết quả !: '. !($bien17). '<br>';








    /* 
        toán tử gán: =, +=, -=, *=, /=, %=, .=;
        toán tử số học: +, -, *, /, %, **, ++, --;
        toán tử so sánh: >, <, >=, <=, ==, ===, !=;
        toán tử lý luận: &&, ||, !    
    */
?>