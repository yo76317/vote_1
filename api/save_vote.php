<!-- 投票 -->

<?php 
include_once "../db.php";

// 投票頁用post把值帶過來成opt_id(第幾筆)
// find把options資料表內的(第幾筆)比對後取出資料表資料
// $opt陣列內的ocunt+1
$opt_id=$_POST['opt'];
$opt=find("options",$opt_id);

// dd($opt);
// $opt['count']++;
// $opt['count']+=1;
// 投票+1
$opt['count']=$opt['count']+1;
// 把新的$opt新增到指定資料表欄位
update('options',['count'=>$opt['count']],['id'=>$opt_id]);

// 導向id = topid_id值
// header("location:../backend/index.php?do=vote_result&id={$opt['topic_id']}");
header("location:../backend/index.php?do=vote_result&id={$opt['topic_id']}");
// to("../index.php?do=vote_result&id={$opt['topic_id']}");
?>