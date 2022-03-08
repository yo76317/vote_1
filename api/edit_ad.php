<!-- 修改廣告上傳圖片 -->

<?php include_once "../db.php";

// 依POST id欄，find取得ad id
$ad=find("ad",$_POST['id']);

// 判斷有無上傳避免空檔,files暫存資料夾位置
if(!empty($_FILES['name']['tmp_name'])){
    // 取得圖名稱
    $filename=$_FILES['name']['name'];
    // 上傳的檔案移動到新位置
    move_uploaded_file($_FILES['name']['tmp_name'],'../image/'.$filename);
}

// 取intro值
$intro=$_POST['intro'];

// 看有無上傳圖片(檔案)，決定執行那項更新 1新增 2更新
if(isset($filename)){
    update('ad',['name'=>$filename,'intro'=>$intro],['id'=>$_POST['id']]);
}else{
    update('ad',['intro'=>$intro],['id'=>$_POST['id']]);
}
to("../backend/?do=ad"); 
// dd($filename)