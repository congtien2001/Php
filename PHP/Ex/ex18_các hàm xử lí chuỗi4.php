<?php 

    $chuoi7 = "NGUYEN CONG TIEN STORM";

    echo '-HÀM substr LẤY CHUỖI Ở VỊ TRÍ NÀO ĐÓ: '.'<br>';
    $chuoimoi = substr($chuoi7, 7, 4);
    echo $chuoimoi.'<br>';

    echo'-HÀM strstr TÁCH CHUỖI TỪ VỊ TRÍ NÀO ĐÓ: '.'<br>';
    echo strstr($chuoi7, 'ST')."<br>";

    echo '-HÀM strpos TÌM VỊ TRÍ CHUỖI CON TRONG CHUỖI CHA:  '.'<br>';
    echo strpos($chuoi7, 'TIEN').'<br>';//trả về false nếu k tìm thấy

    echo '-HÀM substr_replace CẮT BỎ 1 ĐOẠN VÀ THAY BẰNG ĐOẠN KHÁC: '.'<br>';
    echo substr_replace($chuoi7, 'DHKH', 17, 5);//cắt bỏ STORM ở vị trí 17 có 5 kí tự thay vào là DHKH







?>