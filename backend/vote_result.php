<h2 class="text-center font-weight-bold text-secondary">投票結果</h2>

<?php
// sql 找兩個資料表，條件彼此的共通點id==，和抓偽get[id]代入
$sql="select * 
      from `topics`,
           `options` 
      where `topics`.`id`=`options`.`topic_id` AND 
            `topics`.`id`='{$_GET['id']}'";
$rows=q($sql);

// dd($sql);
// dd($rows);


?>

<h3> 投票主題 : <?= $rows[0]['topic'];?> </h3>

<!-- 之後再來改版型這邊拿rows內的值拆陣列來使用 -->
<ol class="list-group col-12" style="font-size:1.2rem">
    <?php
        foreach($rows as $row){
            echo "<li class='list-group-item'>";
            echo "<span>選項 : {$row['opt']}</span>";
            echo "<span class='float-right badge badge-pill badge-warning'>{$row['count']}</span>";
            echo "</li>";
        }
    ?>
</ol>