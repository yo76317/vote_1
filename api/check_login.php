<!-- 會員驗證 -->

<?php include_once "../db.php";

// 會員驗證遺留，有值就unset銷毀error，無值接下去
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

// rows計算表有無帳號密碼
// session帶到其它頁使用
if(rows('users',$_POST)>0){
    $_SESSION['user']=$_POST['account'];

    to("../backend/index.php");
}else{
    $_SESSION['error']="帳號或密碼錯誤";
    
    to("../index.php?do=login");
}
?>