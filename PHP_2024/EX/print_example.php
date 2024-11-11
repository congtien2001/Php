<?php 
    //hieen thi ki tu ra man hinh

    echo "Hello"."<br>";// nối 2 chuỗi
    echo "pi= ", 3.14, ' , x = ', 10, "<br>";
    //hiển thị chuỗi
    
    print "Hello"."<br>";
    //không cho in ra nhiều giá trị cùng 1 lúc.

    print_r(['Nguyen', 'Cong', 'Tien'."<br>"]);
    //dùng để in mảng hay đối tượng 
    
    var_dump( false."<br>");
    //hiển thị chi tiết ra dữ liệu và kiểu dữ liệu.

    var_export('Hello'."<br>");
    //hiển thị
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIEN THI ECHO</title>
</head>
<body>
    <h1><?php echo "Nguyen Cong Tien"?></h1>
</body>
</html>