<?php 
    //khai báo kiểu int
    $bien1 = '10';//dạng chuỗi
    //ép kiểu int sang $bien1
    $bien2 = (int)$bien1;
    //kiểm tra xem $bien2 đã đc ép kiểu chưa
    var_dump( $bien2 );
    echo'<br>';
    //kiểm tra kiểu số nguyên sai là 0 đúng là 1
    echo is_int($bien2);
    echo '<br>';

    //khai báo kiểu boolean
    $bien3 = 'true'; //'flase'
    //ép kiểu boolean sang $bien3
    $bien4 = (bool)$bien3;
    //kiểm tra xem $bien4 đã đc ép kiểu chưa
    var_dump( $bien4 );
    echo '<br>';
    //kiểm tra
    echo is_bool($bien4);
    echo '<br>';

    //khai báo kiểu float
    $bien5 = '10.5';
    //ép kiểu float sang $bien5
    $bien6 = (float)$bien5;
    //kiểm tra xem $bien6 đã đc ép kiểu chưa
    var_dump( $bien6 );
    echo '<br>';
    //kiểm tra kiểu số thực sai là 0 đúng là 1
    echo is_float($bien6);
    echo '<br>';

    //khai báo kiểu string
    $bien7 = 2001;
    //ép kiểu string sang $bien7
    $bien8 = (string)$bien7;
    var_dump( $bien8 );
    echo '<br>';
    //kiểm tra kiểu string
    echo is_string($bien8);
    echo '<br>';

    //khai báo kiểu array
    $bien9 = '1, 2, 3';
    //ép kiểu array sang $bien9
    $bien10 = (array)$bien9;
    var_dump( $bien10 );
    echo '<br>';
    //kiểm tra kiểu array
    echo is_array($bien10);
    echo '<br>';

    /* khai báo kiểu null
    ép kiểu int -> 0
    ép kiểu String -> rỗng
    ép kiểu Boolean -> false
    */ 
    $bien11 = null;
    /* $bien11 = (int)$bien11;
    var_dump( $bien11 ); */
    echo is_null ($bien11);

/* 
    Kiểu int /số nguyên
    Kiểu float /số thực
    Kiểu string /chuỗi
    Kiểu boolean /đúng/sai
    Kiểu array /mảng
    Kiểu null 
*/
?>