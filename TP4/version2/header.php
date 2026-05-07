<header>
    <div class="prince1 text-white display-4">
        <a href="index.php" class="text-white text-decoration-none">Magic Store</a>
    </div>
<nav>
    <div id="navlink" style="width:100%; overflow-x:hidden;">
        <?php if(isset($_SESSION['username'])): ?>
            <a href="shop.php">Shop</a>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="browse.php">Browse</a>
            <a href="loging.php">Login</a>
        <?php endif; ?>
    </div>
</nav>
</header>