<?php
//Cách 1
define('_WEB_HOST_ROOT', 'http://google.com');
echo _WEB_HOST_ROOT;
echo '<br/>';
//vd
define('_STORM', 'moti.bio/Storm');
define('_NGUYEN_CONG_TIEN', 'moti.bio/NCT');
echo _STORM;
echo '<br/>';
echo _NGUYEN_CONG_TIEN;
echo '<br/>';

//Cách 2
const _WEB_PATH_ROOT = 'C/xampp/htdoc';
echo _WEB_PATH_ROOT;
echo '<br/>';

//Kiểm tra đúng sai hằng số
//check hàm define
//có hằng số -> true
$checkDefine = defined("_WEB_HOST_ROOT");
var_dump($checkDefine);

echo '<br/>';
//không có hằng số -> flase(_STORM1)
$checkDefine = defined("_STORM1");
var_dump($checkDefine);

