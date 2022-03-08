<?php
include_once "./db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票系統</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <style>
.container{
min-height: 600px;
margin: 30px auto;
}
.mxauto{margin:30px auto;}
    </style>
</head>
<body>
<!-- 輪撥 START-->
<div class="container-fluid">
    <div class="row">
        <div class="jumbotron jumbotron-fluid p-0 mb-0 col-12" style="overflow:hidden">
            <a href="index.php">
                <div id="carouselExampleIndicators" class="carousel slide bg-info" data-ride="carousel" data-interval="2500">
                    <ol class="carousel-indicators position-absolute">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                    <?php 
                        // 從資料表ad抓sh=>1的檔
                        $image=all('ad',['sh'=>1]);
                        foreach($image as $key => $image2){
                        // 為0就給active
                        if($key==0){
                            echo "<div class='carousel-item active'>";
                        }else{
                            echo "<div class='carousel-item'>";
                        }
                        echo "<img class='d-block m-auto' style='width:400px;height:400px;' src='./image/{$image2['name']}' alt='{$image2['intro']}'>";
                        echo "</div>";
                        }   
                        // dd($image);  
                        // dd($image2);       
                        ?>
                    </div>
                    <!-- 這邊是左右按鈕換過icon -->
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="fas fa-arrow-alt-circle-left" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="fas fa-arrow-alt-circle-right" aria-hidden="true"></span>
                    </a>
                </div> 
            </a>
        </div>
    </div>
</div><!-- 輪撥區 END -->


<!-- 導覽 START -->
<div class="container-fluid">
    <div class="row">
        <nav class="col bg-dark text-light text-center p-2">
            <?php 
                if(isset($_SESSION['error'])){
                    echo "<span>".$_SESSION['error']."</span>";
                }
                if(isset($_SESSION['user'])){
                    echo "<div class='mx-auto'>";
                    echo "<span>歡迎登入！{$_SESSION['user']}</span>";
                    echo "</div>";
            ?>
                    <div class='text-right'>
                    <a class="btn btn-primary" href="logout.php">登出</a>
                    </div>
            <?php
                }else{
            ?>
            <div class="align:center">
                <a class="col-2 btn btn-sm btn-primary my-1" href="?do=login">會員登入</a>
                <a class="col-2 btn btn-sm btn-info my-1" href="?do=reg">註冊會員</a>
            </div>  
            <?php
            }
            ?>
        </nav>
    </div>
</div><!-- 導覽 END -->


<!-- 網頁中段 -->
<!-- do看有無GET拿到do ? 有的的話回傳get到的do,沒有就回傳add_subject_form -->
<!-- file = 上行的值.php -->
<!-- 假如file_exists檢查file有值，就引入file，無值就導回add_subject_form -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
                $do=(isset($_GET['do']))?$_GET['do']:'show_vote_list';
                $file="./frontend/".$do.".php";
                if(file_exists($file)){
                        include $file;
                }else{
                        include "./frontend/show_vote_list.php";
                }
            ?>
        </div>
    </div>
</div>



<div class="p-3 text-center text-light bg-primary">&copy;YoQing版權所有、圖片以外歡迎使用</div>

    </script>
    <script src="https://kit.fontawesome.com/ab96302682.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>