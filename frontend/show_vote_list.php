<h2 class="text-center font-weight-bold text-secondary">投票主題項目</h2>

<!-- 用涵式all抓到資料表topics，並輸出
在選項上加上超聯結並給值?do=vote&id=
加上資料庫關聯id,連到顯示頁後用get使用id -->
<?php
    $alltopics=all('topics');
        echo "<ol class='list-group'>";
        foreach ($alltopics as $key => $value) {
        // 找到options資料表topicid筆數 => 0 就執行以下
        // 陣列topic欄位數值，li會加排序數字
        // 聯結加上topic的變數id
        if(rows('options',['topic_id'=>$value['id']]) > 0){
        echo "<li class='list-group-item'>";

        // 列出題目
        // 如果沒有帶session就不給聯結去投票
        // 只能看結果
        if(isset($_SESSION['user'])){
            echo "<a class='d-inline-block col-md-6' href='index.php?do=vote&id={$value['id']}'>";
            echo $value['topic'];
            echo "</a>";
        }else{
            echo "<span class='d-inline-block col-md-6'>".$value['topic']."</span>";
        }
        
        // 總投票數膠囊顯示
        $count=q("select sum(`count`) as '總計' from `options` where `topic_id`='{$value['id']}'");
        echo "<a class='badge badge-pill badge-warning' href='?do=vote_result&id={$value['id']}'>";
        echo $count[0]['總計'];
        echo "</a>";

        //看結果按鈕
        echo "<a class='float-right' href='?do=vote_result&id={$value['id']}'>";
        echo "<button type='button' class='btn btn-outline-warning'>觀看結果</button>";
        echo "</a>";


        echo "</li>";
            // dd($value);
            }
            }
        echo "</ol>";
?>
