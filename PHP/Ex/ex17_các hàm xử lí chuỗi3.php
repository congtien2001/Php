<?php 
    //HÀM
    echo htmlentities('<p>nguyen cong tien</p>').'<br>';
    //HÀM
    $str = htmlentities('<b>nguyen cong tien</b>').'<br>';
    echo 'Hàm htmlentities: '.html_entity_decode($str);
    //HÀM LOẠI BỎ THẺ HTML
    echo strip_tags('<b>nguyen cong tien</b>').'<br>';
?>