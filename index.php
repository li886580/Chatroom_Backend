<?php
// 載入db.php來連結資料庫
require_once 'db.php';
?>
<!doctype html>
<!-- lang代表網頁主要語言,如果有設對於搜尋引擎是友善的,對於瀏覽器在判斷是有幫助的 -->
<html lang="zh-Hant-TW">
...
...

<body>
  <ul>
    <li><a href="select.php">SELECT，查詢列出資料庫的資料</a></li>
    <li><a href="insert.php">INSERT，新增資料到資料表</a></li>
    <li><a href="update.php">UPDATE，更新資料表中的資料</a></li>
    <li><a href="delete.php">DELETE，刪除資料表中的資料</a></li>
  </ul>
</body>