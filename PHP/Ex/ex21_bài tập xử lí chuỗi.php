<?php 

    /* 
    bài 1: viết chương trình lấy 4 ký tự cuối chuỗi.
    */
    echo 'Bài tập 1: '. '<br>';
    /* lưu ý:
        -tiếng việt có dấu.
        -có thể đếm từ đầu đến là 12 còn đếm từ sau là -4.
    */
    $str = 'Nguyen Cong Tien';
    $endStr = substr($str, -4);
    echo '-4 ký tự của chuỗi $str là: '. $endStr.'<br>';
    /* lưu ý:
        -tiếng việt không dấu
        -mb_str: hỗ trợ tiếng việt.
    */
    $str2 = 'Nguyễn Công Tiến';
    $endStr2 = mb_substr($str2, -4, null,'UTF-8');
    echo '-4 ký tự của chuỗi $str2 là: '. $endStr2.'<br>';

    /* 
    bài 2: viết chương trình xoá chữ đầu tiên trong chuỗi.
    input: Nguyễn Công Tiến.
    output: Công Tiến.
    */
    echo 'Bài tập 2: '. '<br>';
    /* lưu ý:
        -tiếng việt có dấu.
        -có thể đếm từ đầu đến là 12 còn đếm từ sau là -4.
    */
    $strName = 'Nguyen Cong Tien';

    //tính vị trí khoảng trắng đầu tiên
    $posSpace = strpos($strName, ' ');

    //tính vị trí từ chữ C
    $posStr = $posSpace + 1;

    //độ dài chuỗi muốn cắt
    $endWordLen = strlen($strName) - $posStr;

    //cắt chuỗi
    $endWord = substr($strName, $posStr, $endWordLen);

    echo '-Chuỗi sau khi xoá là: '. $endWord.'<br>'; 


    /* lưu ý:
        -tiếng việt có dấu.
        -có thể đếm từ đầu đến là 12 còn đếm từ sau là -4.
    */
    $strName2 = 'Nguyễn Công Tiến';

    //tính vị trí khoảng trắng đầu tiên
    $posSpace2 = mb_strpos($strName, ' ', 0, 'UTF-8');

    //tính vị trí từ chữ C
    $posStr2 = $posSpace + 1;

    //độ dài chuỗi muốn cắt
    $endWordLen2 = mb_strlen($strName, 'UTF-8') - $posStr;

    //cắt chuỗi
    $endWord2 = mb_substr($strName2, $posStr2, $endWordLen2);

    echo '-Chuỗi sau khi xoá là: '. $endWord2.'<br>'; 


?>