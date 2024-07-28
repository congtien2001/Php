<?php 
    //hàm được tạo để gọi riêng cho ex22 cho gọn
    function makeTotal($a, $b){
        $tong = $a + $b;
        echo 'Tổng của a và b: '.$tong;        
    }

    //kiểm tra nếu chưa có thì tạo mới.
    if(!function_exists('makeTotal')) {
        function makeTotal($a, $b){
            echo 'Tạo mới sau khi kiểm tra';
        }
    }




?>