<?php 
    //hàm này khác với hàm ucfirst khi chỉ viết hoa chữ đầu tiên trong chuỗi
    echo'-HÀM ucwords VIẾT HOA MỖI CHỮ CÁI TRONG CHUỖI: '.'<br>';
    $chuoi1 = 'nguyen cong tien'.'<br>';
    echo ucwords($chuoi1);

    echo'-HÀM trim XOÁ CÁC KHOẢNG TRẮNG,KÍ TỰ Ở ĐẦU VÀ CUỐI: '.'<br>';
    $chuoi2 = 'k STORM k';
    echo trim($chuoi2,'k').'<br>';

    echo'-HÀM json_incode VÀ json_decode: '.'<br>';
    $arr  = [1, 2, 3, 4, 5];
    $jsonencode = json_encode($arr);
    echo $jsonencode.'<br>';
    var_dump($jsonencode);
    echo '<br>';
    echo'CHUỖI json SAU KHI DECODE: '.'<br>';
    $jsondecode = json_decode($jsonencode, true);
    print_r($jsonencode);
?>  