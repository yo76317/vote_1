<?php
include_once "../db.php";

// 抓POST的name:subject的值(主題)然後新增到資料表 
$topic_array=['topic'=>$_POST['subject']];
insert('topics',$topic_array);

// SQL語法:讀取 全部 從 topics 條件 tipic = 拿到的POST值內的subject欄位值
$topic_sql="select * from `topics` where `topic`='{$_POST['subject']}'";
echo $topic_sql;

$topic=$pdo->query($topic_sql)->fetch();


// foreach會代入 陣列做迴圈，並把post拿到的options放到opt內
// opt帶著值，接著去做陣列,把tipicId賦值為topic['id']
// 這樣就有一個關聯數值，之後可對應
// 套用新增涵數，取到的值對應opt_array存到資料表
foreach($_POST['options'] as $opt){
    // 改為判斷
    if($opt!=""){
        $opt_array=["opt"=>$opt,"topic_id"=>$topic['id']];
        insert('options',$opt_array);
    }
}

// echo $opt;
// echo dd($topic);
// echo dd($opt_array);
?> 