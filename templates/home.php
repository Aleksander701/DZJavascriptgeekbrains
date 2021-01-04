<?php foreach ($items as $item): ?>
    <section class="main-item">
        <div class="main-item__info">
            <h2 class="main-item__title"><?=$item["name"]?> <?=$item["model"]?></h2>
            <p class="main-item__price"><?=$item["price"]?>$</p>
            <a href="/item/<?=$item["id"]?>" >
                <button class="main-item__learn-button">learn more</button>
            </a>
        </div>
        <div class="main-item__image"
            style="background-image: url(<?=json_decode($item["images"])[0]?>);"
        ></div>
    </section>
<?php endforeach?>