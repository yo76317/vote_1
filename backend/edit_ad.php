<h2 class="text-center font-weight-bold text-secondary">廣告輪播圖-編輯</h2>

<?php
$ad=find('ad',$_GET['id']);
?>
<form action="../api/edit_ad.php" method="post" enctype="multipart/form-data">
    
    <!-- 上傳欄 -->
    <div class='custom-file mx-auto d-block mb-2'>
        <label for="upload" class='custom-file-label'><?=$ad['name'];?></label>
        <input class="custom-file-input" type="file" name="name" id="upload">
    </div>

    <!-- 說明欄 -->
    <div class="mx-auto text-center mt-2 input-group mb-2">
        <label class='input-group-prepend input-group-text' for='intro'>說明：</label>
        <input class='form-control' type="text" name="intro" id="intro" value="<?=$ad['intro'];?>">
    </div>

    <!-- 按鈕 -->
    <div class="mx-auto mb-2">
        <input type="hidden" name="id" value="<?=$ad['id'];?>">
        <input type="submit" value="修改上傳" class="btn btn-outline-info">
    </div>

    <!-- 圖片 -->
    <div class="col-3 m-auto">
    <img src="../image/<?=$ad['name'];?>" style='width:400px;heigt:400px;border:3px solid black'>
    

</form>
</div> 