<?php 
    //trong mảng sẽ đếm từ 0,1,2,3....
    $name = array(
        "Nguyen", //0
        "Cong", //1
        "Tien", //2
        "Storm" //3
    );
    //hàm đếm số phần tử trong mảng
    count($name);
    echo count($name);
    echo"<br>";
    //in ra phần tử thứ 3 trong mảng
    echo $name [2];
    echo "<br>";
    for ($i = 0; $i < count($name); $i++) {
        echo $name[$i].'<br/>';
    } 
?>