<?php 
    /* Câu lệnh rẽ nhánh switch-case */
    $day = 2;
    switch ($day) {
        case 2:
            echo "Monday";
            break;
        case 3:
            echo "Tuesday";
            break;
        case 4:
            echo "Wednesday";
            break;
        case 5:
            echo "Thursday";
            break;
        case 6:
            echo "Friday";
            break;
        case 7:
            echo "Saturday";
            break;
        default:
            echo "Sunday";
            break;
        }
        echo '<br>';
    //vd về màu
    $color = "màu đỏ";
    //câu lệnh 
    switch ($color) {
    //điều kiện
        case "màu đỏ";
            echo"this is đỏ";
            //dừng
            break;
        case "màu xanh";
            echo"this is xanh";
            break;
        case "màu đen";
            echo"this is đen";
            break;
        }
?>