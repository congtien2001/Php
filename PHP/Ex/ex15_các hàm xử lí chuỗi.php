<?php 
    echo 'Hàm explode cắt chuỗi: '.'<br>';
    $chuoi1 = 'Học | Lập | Trình | PHP';
    $arr = explode('|', $chuoi1);
    //kiểm tra
    var_dump($chuoi1);
    echo '<br>';
    var_dump($arr);
    echo '<br>';
    print_r($arr);
    echo'<br>';

    echo 'Hàm implode: '.'<br>';
    $chuoi2 = implode('|', $arr);
    echo $chuoi2.'<br>';

    echo 'Hàm strlen: '.'<br>';
    $chuoi3 = 'Hoc lap trinh PHP';
    echo strlen($chuoi3).'<br>';

    echo 'Hàm str_word_count: '.'<br>';//đếm số chữ và không hỗ trợ tiếng việt
    $chuoi4 = 'STORM';
    echo str_word_count($chuoi4).'<br>';


?>