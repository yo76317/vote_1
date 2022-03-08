<div class="form-box">
    <div class="form-header">
        <h2 class="form-header-title">
            <i class="far fa-address-card"></i>註冊會員
        </h2>
    </div>

    <!-- 表格主體 -->
    <form action="./api/reg.php" class="form-body" method="post" id="regForm">

        <div class="form-group">
            <label for="account"><i class="far fa-user-circle">帳號：</i></label>
            <input type="text" name="account" id="account" placeholder="account">
        </div>

        <div class="form-group">
            <label for="password"><i class="fas fa-unlock-alt">密碼：</i></label>
            <input type="password" name="password" id="password" placeholder="password">
        </div>

         <div class="form-group">
            <label for="name"><i class="fas fa-signature">姓名:</i></label>
            <input type="text" name="name" id="name" placeholder="name">
         </div>

         <div class="form-group">
            <label for="email"><i class="fas fa-envelope-square">電子郵件：</i></label>
            <input type="text" name="email" id="email" placeholder="E-mail">
        </div>

         <div class="form-group">
            <label for="gender"><i class="fas fa-venus-mars">性別：</i></label>
            <input type="text" name="gender" id="gender" placeholder="gender">
        </div>

        <!-- 設定最小日期1900-01-01到最大2022-01-01 -->
        <div class="form-group">
            <label for="birthday"><i class="fas fa-birthday-cake">生日:</i></label>
            <input type="date" id="birthday" name="birthday" min="1900-01-01" max="2022-01-01">
         </div>

         <div class="form-group">
            <button class="submit-btn" typ="submit">送出</button>
            <button class="submit-btn" typ="result">重新輸入</button>
         </div>
      </form>
   </div>
   <script src="https://kit.fontawesome.com/ab96302682.js" crossorigin="anonymous"></script>