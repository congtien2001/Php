 <?php 
    //HÀM LẶP LẠI
    echo '-Hàm str_repeat: '.'<br>';
    $chuoi5 = 'STORM';
    echo str_repeat($chuoi5.' ', 5).'<br>';
    //HÀM THAY THẾ
    echo '-Hàm str_replace: '.'<br>';
    $chuoi6 = 'NGUYEN - CONG - TIEN';
    echo str_replace('-', '|', $chuoi6).'<br>';
    //HÀM MÃ HOÁ 32 KÍ TỰ
    echo '-Hàm mã hoá 32: '.'<br>';
    $chuoi7 = 'Nguyen Cong Tien dang học PHP'.'<br>';
    echo md5($chuoi7).'<br>';
    //HÀM MÃ HOÁ 40 KÍ TỰ
    echo '-Hàm mã hoá 40: '.'<br>';
    $chuoi8 = 'STORM';
    echo sha1($chuoi8).'<br>';
?>