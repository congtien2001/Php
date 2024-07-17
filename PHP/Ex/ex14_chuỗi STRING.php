<?php 
    $bien1 = 'Nguyễn Công';
    $bien2 = "Storm";
    
    define('_AGENCY','STORM');
    define('_AGENCY2',"STORM");
    
    $Storm = 'và';
    //dấu nháy kép
    echo "Nguyễn Công Tiến\"Storm\"đang học PHP". '<br>';
    echo "Nguyễn Công Tiến $Storm đang học PHP". '<br>';
    //dấu nháy đơn
    echo 'Nguyễn Công Tiến\'Storm\'đang học PHP'. '<br>';
    echo 'Nguyễn Công Tiến $Storm đang học PHP'. '<br>';
    //lưu ý
    echo 'Nguyễn Công Tiến "Storm" đang học PHP'. '<br>';
    echo "Nguyễn Công Tiến 'Storm' đang học PHP". '<br>';

?> 