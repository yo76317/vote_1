<h2 class="text-center font-weight-bold text-secondary">投票主題項目
    <a class="btn btn btn-outline-success float-right" href="?do=add_subject_form">
        新增投票
    </a>
</h2>

<?php
    $alltopics=all('topics');
    echo "<ol class='list-group'>";
    foreach ($alltopics as $key => $value) {
    // 找到options資料表topicid筆數>0就執行以下
    // 陣列topic欄位數值，li會加排序數字
    // 聯結加上topic的變數id
    echo "<li class='list-group-item'>";
    
    //題目
    echo "<a class='d-inline-block col-6' href='../backend/index.php?do=vote&id={$value['id']}'>";
    echo $value['topic'];
    echo "</a>";

    // 總投票數膠囊顯示
    $count=q("select sum(`count`) as '總計' from `options` where `topic_id`='{$value['id']}'");
    echo "<a class='badge badge-pill badge-warning' href='../backend/index.php?do=vote_result&id={$value['id']}'>";
    echo $count[0]['總計'];
    echo "</a>";
    
    //看結果按鈕
    echo "<a class='float-right' href='../backend/index.php?do=vote_result&id={$value['id']}'>";
    echo "<button type='button' class='btn btn-outline-warning'>觀看結果</button>";
    echo "</a>";

    //管理題目
    echo "<a class='d-inline-block col-1 text-center float-right' href='?do=edit_subject&id={$value['id']}'>";
    echo "<button class='btn btn-outline-success'>管理</button>";
    echo "</a>";

    echo "</li>";
}
echo "</ol>";

?>