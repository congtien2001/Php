<?php 
    //nối biến và phân biệt '' và ""
    $bienSo1 = 'Nguyễn Công';
    $bienSo2 = 'Tiến';
    $bienTong = $bienSo1 . ' ' . $bienSo2;
    $bien1 = 'một';
    $bien2 = 'hai';
    $bien3 = 'ba';
    $bien4 = 'bốn';
    echo $bienTong;
    echo'<br>';
    //nối biến với '' 
    echo 'Xin chào ' . $bienTong. ' -PHP' . '<br>';
    //nối biến với ""
    echo "Xin chào $bienTong -PHP" . '<br>';
    //chèn thẻ html liệt kê biến có thứ tự
    echo '<ul>
            <li>'.$bien1.'</li>
            <li>'.$bien2.'</li>
            <li>'.$bien3.'</li>
            <li>'.$bien4.'</li>
        </ul>';

    /* Note
    '': không hiểu được biến nên phải dùng . để nối biến,
    "": có thể dùng biến ở trong 
    */




?>