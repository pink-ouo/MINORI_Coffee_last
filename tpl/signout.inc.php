<div class="signOut-menu dropdown-menu-sw">
    <div class="signOut-menu-container">
        <!-- 要登入才會顯現會員名稱 -->
        <?php if (isset($_SESSION['name'])) { ?>
            <div class="pc-user signOut-list">
                <a href="memberData.php">
                    <?= $_SESSION['name'] ?>
                </a>
                <span class="pl-2" style="color: white;">您好</span>
            </div>
        <?php } ?>
        <?php if (!isset($_SESSION['name'])) { ?>
            <div class="signOut-list">
                <a href='loginSignup.php'>登入/註冊</a>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['name'])) { ?>
            <div class="signOut signOut-list">
                <a href="#" id="logout">登出</a>
            </div>
        <?php } ?>
    </div>
</div>