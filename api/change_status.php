<!-- 幫sh計算改變值 -->

<?php include_once "../db.php";

// get id,拿圖片id,資料庫取得ad $id紀錄
// 因為0+1=>1%2 = 1 ,1+1=>1%2 = 0 , 顯示
// 更新ad資料表 sh , id
$id=$_GET['id'];
$img=find('ad',$id);
$img['sh']=($img['sh']+1)%2;
update('ad',['sh'=>$img['sh']],['id'=>$img['id']]);

to("../backend/?do=ad");
?> 