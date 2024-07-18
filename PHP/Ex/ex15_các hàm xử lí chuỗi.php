<?php 

    echo '-Hàm explode: '.'<br>';
    $chuoi1 = 'Học | Lập | Trình | PHP';
    $arr = explode('|', $chuoi1);
    //KIỂM TRA
    var_dump($chuoi1);
    echo '<br>';
    var_dump($arr);
    echo '<br>';
    print_r($arr);
    echo'<br>';
    //HÀM THÊM DẤU
    echo '-Hàm implode: '.'<br>';
    $chuoi2 = implode('|', $arr);
    echo $chuoi2.'<br>';
    //HÀM ĐẾM SỐ KÍ TỰ
    echo '-Hàm strlen: '.'<br>';
    $chuoi3 = 'Hoc lap trinh PHP';
    echo strlen($chuoi3).'<br>';
    //HÀM 
    echo '-Hàm str_word_count: '.'<br>';//đếm số chữ và không hỗ trợ tiếng việt
    $chuoi4 = 'STORM';
    echo str_word_count($chuoi4).'<br>';
    
?>  