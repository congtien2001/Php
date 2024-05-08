<?php
//khai bao 2 bien
global $htmlOutput;
$str1 = 'Nguyen Cong';
$str2 = ' Tien';
//nối và gán
$str = $str1.$str2;
//nối và hiển thị
echo $str1.$str2.'<br/>';
//in ra 2 biến
echo $str.'<br/>';
//cách khác nối biến
echo $str1.' Storm '.$str2.'<br/>';
//cách nối biến 1
echo 'My name is: '.$str1.$str2.'<br/>';
//cách nối biến 2
echo 'My name is: '.$str.' (2)'.'<br/>';
//gán biến bằng link và hiển thị qua thẻ hmtl
$url = 'https://www.moti.bio/Storm';
$imgUrl = 'https://bafybeihum6tqaodawfhvsniszmmtsgn5vhqmxmsjuibqtsaz7dm5y7adku.ipfs.sphn.link/avatar.jpeg';
$htmlOutput = '<a href="'.$url.'"><img src="'.$imgUrl.'"></a>';
echo $htmlOutput;
echo '<br/>';
//
$authorUrl = 'https://www.moti.bio/Storm';
$authorName = 'Nguyen Cong Tien';
$postUrl = '#';
$dateTimeDisplay = '19/07/2001';
$dateTime = '2024-04-09';
$categoryName = 'Thủ thuật WordPress';
$commentCount = 27;
$postMeta='
<ul class="postMeta">
    <li class="post_author">
        <a href="'.$postUrl.'">'.$authorName.'</a>    
    </li><!-- .post_author-->  
    <li class="post_date">
        <a href="'.$postUrl.'">
            <time class="entry-date published" datetime="'.$dateTime.'">'.$dateTimeDisplay.'
        </a>
    </li><!-- .posted_date-->     
    <li class="comments">
        <a href="'.$postUrl.'">'.$commentCount.'</a>
    </li><!-- .comments-->     
    <li class="entry_cats">
        <a href="'.$postUrl.'" rel="category tag">'.$categoryName.'</a>
    </li><!-- .entry_cats-->   
</ul>
';
echo $postMeta.'<br/>';

$number = 10;
$str = ' Đào tạo Php';
$total = $number.$str;
echo $total.'<br/>';
var_dump($total);
