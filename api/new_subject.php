<!-- 新增主題 -->

<?php
include_once "../db.php";

$topic=['topic'=>$_POST['subject']];
// 新增
insert('topics',$topic);

to("../backend");

?> 