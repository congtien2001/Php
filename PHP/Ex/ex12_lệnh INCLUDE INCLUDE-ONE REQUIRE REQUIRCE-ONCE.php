<?php 
    // nếu path sai là vẫn chạy câu lệnh ở dưới nó
    include("ex11_vong lap while.php");
    include_once("ex11_vong lap while.php");
    echo'câu lệnh include';
/* --------------------------------------- */

    //nếu path sai là không chạy câu lệnh bên dưới
    require("ex11_vong lap while.php");
    require_once("ex11_vong lap while.php");

    echo'câu lệnh require';
?>