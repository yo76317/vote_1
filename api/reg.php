<!-- 新增reg -->

<?php include_once "../db.php";
// 新增
insert('users',$_POST);
to("../index.php");
?>