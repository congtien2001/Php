<?php 
    /* Nếu $a <0 -> in ra 'Biến A âm', ngược lại ra in ra 'Biến A dương' */

   //Toán tử 3 ngôi
   $a = 5;
   echo ($a < 0) ? 'Biến A âm' : 'Biến A dương'. '<br>';
   
//Cú pháp thay thế IF(thay thế {} thành : và cuối câu lệnh có endif)
    $a = 0;
    if ($a > 0) :
?>
        <ul>
            <li>Biến A âm</li>
            <li>item2</li>
        </ul>

<?php
    else :
        echo 'Biến A dương'. '<br>';
    //kết thúc if else
    endif;

//Cú pháp thay thế FOR
//     echo 'Vòng lặp FOR: <br>';
//     for ($i = 0; $i <= 4; $i++) :
         ?>
        <!-- <ul>
             <li>item1</li>
             <li>item2</li>
             <li>item3</li>
             <li>item4</li>
        </ul> -->
 <?php
//         echo $i. '<br>';
//     endfor;
//Cú pháp thay thế WHILE
    $i = 10;
    while ($i < 4) :
?>
    <!--
        <ul>
            <li>item1</li>
            <li>item2</li>
            <li>item3</li>
            <li>item4</li>
        </ul>
    -->
<?php
    $i++;
    endwhile;

//Cú pháp thay thế FOREACH
foreach ($arr as $item) :
    
endforeach;


?>