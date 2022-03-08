<!-- 圖片上傳 -->

<?php include_once "../db.php";

// 是否有上傳圖片,避免空檔,files暫存資料夾位置
if(!empty($_FILES['name']['tmp_name'])){
    $intro=$_POST['intro'];
    // 取得檔案原始檔名
    $filename=$_FILES['name']['name'];
    // 上傳的檔案移動到新位置
    move_uploaded_file($_FILES['name']['tmp_name'],'../image/'.$filename);

    // 新增到ad資料，
    insert('ad',['name'=>$filename,'sh'=>0,'intro'=>$intro]);

}
to("../backend/?do=ad");
?> 