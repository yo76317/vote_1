<?php include_once "../db.php";

// 新增欄位到options資料表的topic_id=get到的值
// opt空值，等新增欄位後再填入
$id=$_GET['id'];
insert('options',['opt'=>"",'topic_id'=>$id]);

to("../backend/?do=edit_subject&id=$id");
?>

<?php include_once "../db.php";
