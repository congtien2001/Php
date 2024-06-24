<?php
    // chuỗi
    $string = "Nguyen Cong Tien";
    //đếm số lượng kí tự trong chuỗi
    echo strlen($string);
    echo "<br>";
    //đếm số lượng từ trong chuỗi
    echo str_word_count($string);
    echo "<br>";
    //đảo ngược chuỗi
    echo strrev($string);
    echo "<br>";
    /*tìm kiếm vị trí xuất hiện đầu tiên của một chuỗi
    -phân biệt chữ hoa với thường 
    */
    echo strpos($string, "N");
    echo "<br>";
    //thay thế văn bản trong chuỗi
    //echo str_replace("từ cần thay thế","từ thay thế", $string);
    echo str_replace("Tien", "Storm", $string);
    echo "<br>";
    //



    /* $message = "Đây là một chuỗi.";

    echo strlen($message); // Hiển thị: 20
    echo strtoupper($message); // Hiển thị: ĐÂY LÀ MỘT CHUỖI.
    echo strtolower($message); // Hiển thị: đây là một chuỗi.
    echo substr($message, 4); // Hiển thị: là một chuỗi.
    echo strpos($message, "là"); // Hiển thị: 4
    echo str_replace("chuỗi", "xâu", $message); // Hiển thị: Đây là một xâu.
    echo trim($message); // Hiển thị: Đây là một chuỗi. 
    */
?>