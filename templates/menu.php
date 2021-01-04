<li class='nav--btn'>
    <a href="/">
        Home
    </a>
</li>
<li class='nav--btn'>
    <a href="/catalog">
        Catalog
    </a>
</li>
<li class='nav--btn'>
    <a href=<?=isAuth() ? "/profile" : "/login"?>>
        <?=isAuth() ? "Profile" : "Login"?>
    </a>
</li>
<?php if (is_admin()): ?>
    <li class='nav--btn'>
        <a href="/orders">
            Orders
        </a>
    </li>
<?php else: ?>
    <li class='nav--btn'>
        <a href="/basket">
            Basket
        </a>
    </li>  
<?php endif ?>
<?php if(isAuth()): ?>
        <li class='nav--btn'>
            <a href="<?=$_SERVER["REQUEST_URI"]?>?logout">
                Logout
            </a>
        </li>
<?php endif?>
<?php if(is_admin()): ?>
        <li class='nav--btn'>
            [admin]
        </li>
<?php endif?>