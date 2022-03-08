<!-- 會員管理-刪除 -->

<?php include_once "../db.php";

// 刪除 find找ad資料表get id
// unlink刪除文件  image內的image[name]圖片
// 刪除資料表ad内的get id
$image=find('users',$_GET['id']);
del('users',$_GET['id']);
to('../backend?do=member');
?> 