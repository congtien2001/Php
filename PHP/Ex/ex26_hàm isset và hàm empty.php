<?php 
    /* thông báo lỗi, không cần vì máy có sẵn
    ini_set('display_errors', '1');
    ini_set('display_startup_errors','1');
    error_reporting(E_ALL); 
    */
    //kiểm tra xem biến chúng ta đưa vào có tồn tại hay không
    $bien1 = 'STORM';
    //isset dùng để kiểm tra biến $bien1 có tồn tại không
    if(isset($bien1)){
        echo $bien1;
    }
    
    //empty
    echo '<br>';
    //chú ý dấu phủ định !
    $str = 0;
    if(!empty($str)) {
        echo $str;
    } else {
        echo 'Không hợp lệ';
    }
?>