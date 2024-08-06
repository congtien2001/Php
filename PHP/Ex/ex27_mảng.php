<?php 
    //khai báo mảng
    $arr = array('HTML', 'CSS', 'JS');//cách 1

    $arr2 = ['key1' => 'HTML', 'key2' => 'CSS', 'key3' => 'JS'];//cách 2

    //thêm phần tử vào mảng
    $arr2['key4'] = 'PHP';
    $arr2['key5'] = 'LARAVEL';
    $arr2[] = 'DEVOPS';
    $arr2[] = 'DOCKER';
    array_push($arr, 'NODEJS', 'C', 'C++');

    //in mảng
    echo '<pre>';
    print_r($arr);
    print_r($arr2);
    echo '</pre>';

?>