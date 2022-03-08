<?php
include_once "../db.php";
?>

<h3 class="text-center font-weight-bold text-secondary">會員-管理</h3>
    <table class="table">
        <tr>
            <td>圖片</td>
            <td>會員資料</td>
            <td></td>
            <td></td>
            <td>管理</td>
        </tr>       
        
        <?php 
            $vip=all('users');
            foreach($vip as $vip2){
            echo "<table border='1px' width='100%'>";
            echo "<tr>";
                echo "<td rowspan='4' class='text-center' style='width:20%'>圖片</td>";
                echo "<td>代碼 : {$vip2['id']}</td>";
                echo "<td rowspan='4' class='text-center' style='width:25%'>";
                echo "<a class='' href='../api/del_users.php?id={$vip2['id']}'>刪除</a>";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>帳號 : {$vip2['account']}</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>姓名 : {$vip2['name']}</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>E-mail : {$vip2['email']}</td>";
            echo "</tr>";
            echo "</table>";
            echo "<hr>";
            // dd($vip);
            // dd($vip2);
            }
?>