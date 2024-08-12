<?php 
    //khai báo mảng
    $arr = array('HTML', 'CSS', 'JS');//cách 1

    $arr2 = ['key1' => 'HTML', 'key2' => 'CSS', 'key3' => 'JS'];//cách 2
    //mảng rỗng
    $arrEmpty = [];
    
    //thêm phần tử có key vào mảng
    $arr2['key4'] = 'PHP';
    $arr2['key5'] = 'LARAVEL';
    //thêm phần tử không key tự tăng
    $arr2[] = 'DEVOPS';
    $arr2[] = 'DOCKER';
    //thêm thông qua array_push, thêm 3 phần tử vào $arr
    array_push($arr, 'NODEJS', 'C', 'C++');

    //in mảng
    echo '<pre>';
    print_r($arr);
    print_r($arr2);
    echo '</pre>';

?>