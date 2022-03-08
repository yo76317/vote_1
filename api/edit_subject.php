<!-- 投票欄位 -->

<?php
include_once "../db.php";

// 主題資料 投票資料表拿取
$topic=$_POST['topic'];
$topic_id=$_POST['topic_id'];

// 更新，兩條件相關聯
update('topics',['topic'=>$topic],['id'=>$topic_id]);
$options=$_POST['options'];
$opt_id=$_POST['opt_id'];
foreach ($options as $key => $opt) {
    // 判斷$pot有無資料，有就更新
    if($opt!=""){
        update('options',['opt'=>$opt],['id'=>$opt_id[$key]]);
    }else{
        del('options',$opt_id[$key]);
    }
    }
to("../backend/index.php")
?> 