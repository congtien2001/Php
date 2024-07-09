<?php 
        /* vòng lặp for */
   for($i=0; $i<10; $i++){
       echo $i."<br>";
    }
        /* 
        i=0 in ra 0
        i=1 in ra 1
        ...
        i=9 in ra 9
        i=10 vì 10 không bé hơn 10 nên dừng
        */     
    //BÀI TẬP
    /* Hiển thị số chẵn, số lẻ trong dãy số từ 1 2 3 ... 100. 
        bắt đầu: 1
        điều kiện lặp: 100
        biến tăng: +1
    */
    $start = 1;
    $end = 100;

    $demSoLe = 0;//đếm số chẵn
    $demSoChan = 0;//đếm số lẻ

    $resultSoLe = null;
    $resultSoChan = null;

    for($i = $start; $i <= 100; $i++){
        //kiểm tra cái số chẵn - lẻ %
        if($i % 2 == 0){
            //i sẽ là số chẵn
            $resultSoChan .= $i. "<br>";
            $demSoChan++; 
        }
        else {
        //i sẽ là số lẻ
        $resultSoLe .= $i. "<br>";
        $demSoLe++;
        }
    }

    if ($demSoChan > 0){
        echo "Tìm thấy ". $demSoLe. " số chẵn là : ".'<br>'. $resultSoLe;
    }
    else {
        echo "Không tìm thấy số chẵn";
    }

    /* Tính giai thừa của 1 số thập phân vào và hiển thị kết quả
    Giải thích:
    Input: nhập vào số n
    Output: hiển thị kết quả N!
    Công thức: N! = 1 * 2 * 3 * ... * N (N>0)
    */
    $n = 0;
    //$n lớn hơn 0 mới tính giai thừa được
    if ($n > 0){
        //xử lý tính giai thừa
        $result = 1;
        for($i = 1; $i <= $n; $i++){
            $result *= $i;
        }
        echo "Kết quả giai thừa là: ". $result. '<br>';
    } 
    else {
        echo $n. " Không hợp lệ";
    }
    
    



    

?>