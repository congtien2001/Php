<?php 
    echo 'Câu lệnh break: <br>';
    for ($i = 0; $i < 10; $i++) {
        echo $i. '<br>';
        if ($i == 5) {
        break;//hiên thị: 0
        }
    }   
    //câu lệnh die, exit: chương trình ở dưới sẽ k thực hiện khi có die
    die('Dừng chương trình');
    exit('Tạm dừng chương trình');

    echo 'Câu lệnh continue: <br>';
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) 
        {//bỏ qua biến $i = 5
            continue;
        echo $i. '<br>';// hiên thị: 1 2 3 4 6 7 8 9        
        }
    }
    
?>