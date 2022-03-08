<h2 class="text-center font-weight-bold text-secondary">主題及選項修改</h2>

<?php
$subject=find('topics',$_GET['id']);
$options=all('options',['topic_id'=>$_GET['id']]);
?>



<form action="../api/edit_subject.php" method='post' class='col-10 list-group'>
    <!-- 投票&主題 $subject是topics表單get到值id欄位 -->
    <label class='col list-group-item'>主題: 
        <input type="text" name="topic" value='<?=$subject['topic'];?>'>
        <!-- type="hidden" 表單隱藏，會輸出$subject的id值 -->
        <input type="hidden" name="topic_id" value="<?=$subject['id'];?>" >
            <!-- 動態新增主題 -->
            <a href="../api/add_option.php?id=<?=$subject['id'];?>">
                <input class='btn btn-outline-success rounded float-right' type="button" value="新增選項">
            </a>
    </label> 
    <!-- <button type="button">+</button> -->
    <!--增加選項-->

    <?php 
        foreach($options as $key => $opt){
        echo "<label class='list-group-item'>\n";
        echo "選項" . ($key+1) . ":" . "\n";
        echo "<input type='text' name='options[]' value='{$opt['opt']}'>\n";
        echo   "<input type='hidden' name='opt_id[]' value='{$opt['id']}'>\n";
        echo "</label>\n";
        }
    ?>
    <input type="submit" value="送出" class="col-1 btn btn-outline-success">
 </form>
 