<div class="cart-page">
    <div class="cart-page">
        <div class="item-list">
            <ul>
                <p>Items count: <?=count($items)?></p>

                    <?php if(empty($items)): ?>
                        <p>It's empty just like you...</p>
                    <?php else: ?>
                    <?php foreach($items as $item): ?>

                        <li class="item-list--element">
                            <div class="item-list--element--info">
                                <a href="/item/<?=$item["item"]?>" target="_blank">
                                    <h4><?=$item["name"]?> <?=$item["model"]?></h4>
                                </a>
                                <p class="item-list--element--info--price"><?=$item["price"]?></p>
                                <div 
                                    class="item-list--element--info--img"
                                    style="background-image: url(<?=json_decode($item["images"])[0]?>);"    
                                ></div>
                                <form action="<?=$_SERVER["REQUEST_URI"]?>/?delete=<?=$item["item"]?>" method="post">
                                    <input type="submit" class="iitem-list--element--delete-button" value="Delete" />
                                </form>
                            </div>
                        </li>

                    <?php endforeach?>
                <?php endif?>
            </ul>
        </div>
        <a href="<?=$_SERVER["REQUEST_URI"]?>/buy">
            <div class="cart-page--buy-button">buy</div>
        </a>
    </div>
</div>