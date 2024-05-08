<?php
define('_MY_BIO','moti.bio/Storm');
echo _MY_BIO;
echo "<br>";
$checkDefine = defined("_MY_BIO");
var_dump($checkDefine);
echo "<br>";
echo "<br>";
//
const _MY_NAME = 'moti.bio/Storm';
echo _MY_NAME;
echo "<br>";
$checkDefine = defined("_MY_NAME");
var_dump($checkDefine);
//
echo "<br>";
define('_TEST_EX03', 'MY FIRST TEST');
echo _TEST_EX03;
echo "<br>";
$checkDefine = defined("_TEST_EX03");
var_dump($checkDefine);
echo "<br>";
//
echo "<br>";
const _TEST1_EX03 = 'MY SECOND TEST';
echo _TEST1_EX03;
echo "<br>";
$checkDefine = defined("_TEST1_EX03");
var_dump($checkDefine);

echo "<br>";