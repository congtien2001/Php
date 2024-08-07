<?php 
    /* 
    Dãy số Fibonacci: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ...Tính số fibonacci thứ n.
    -$n = 5
    -> return fibonacci(4) + fibonacci(3)
    = (fibonacci(3) + fibonacci(2)) + (fibonacci(2) + fibonacci(1))
    = ((fibonacci(2) + fibonacci(1) + fibonacci(1) + fibonacci(0) + (fibonacci(0) + fibonacci(1) + fibonacci(0) + fibonacci(1))
    = 1 + 0 + 1 + 1 + 0 + 1 + 0 + 1 =5
    */
    function fibonacci($n) {
        if($n == 0 || $n == 1) {
            return $n;
        }
        return fibonacci($n - 1) + fibonacci($n - 2);
    }

    //kết quả = $result ở vị trí thứ 6 là = 8
    $result = fibonacci(6);
    echo 'Số fibonacci thứ $n là:  '. $result;

?>