<?php
$host = 'localhost';
$dbuser ='root';
$dbpassword = 'yN5Lm/D3(Y4BMpY5';
$dbname = 'chat';
$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if($link){
mysqli_query($link,'SET NAMES uff8');
// echo "正確連接資料庫";
}
else {
echo "不正確連接資料庫</br>" . mysqli_connect_error();
}
