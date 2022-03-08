<h2 class="text-center font-weight-bold text-secondary">請投票</h2>

<!-- 用僞get[id]給 find涵式找資料表 -->
<?php
    $id=$_GET['id'];
    $subject=find('topics',$id);
    // dd($subject);
    $options=all('options',['topic_id'=>$id]);
?>

<h1> <?php echo $subject['topic'];?> </h1>

    <form action="../api/save_vote.php" method="POST">
        <!-- 把options陣列拆，拿opt陣列值來用id&opt -->
        <!-- 把選項改成radiom單選,foreach會帶值跑,所以name都一樣 -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php
                        echo "<ol class='list-group'>";
                        foreach ($options as $key => $opt) {
                        echo "<li class='list-group-item'>";
                        echo "<input type='radio' name='opt' value='{$opt['id']}'>";
                        echo $opt['opt'];
                        echo "</li>";
                        }
                        // dd($options);
                        // dd($opt);
                    ?>
                    <input class="col-1 mt-1 btn btn-outline-warning" type="submit" value="投票">
                    </ol>
                </div>
            </div>
        </div>
    </form>