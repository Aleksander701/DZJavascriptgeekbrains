<div class="filter">
    <ul class="filter--elements">
    <!-- <form> -->
        <li class="filter--elements--item sort-popular">
            <input type="submit" name="price" value="Polular" />
        </li>
        <li class="filter--elements--item sort-price-list sort-price">
            <button class="price-submit" name="price">Price</button>
            <!-- <div class="filter--elements--item-list"> -->
                <!-- <ul > -->
                    <!-- <li name="sort_price-ascending" class="item-list-element acending">acending</li> -->
                    <!-- <li name="sort_price-by-decreasing"class="item-list-element by-decreasing">by decreasing</li> -->
                <!-- </ul> -->
            </div>
        </li>
        <!-- <li class="filter--elements--item">
            <p>Price: by decreasing</p>
        </li> -->
        <!-- </form> -->
    </ul>
</div>

<div class="catalog">
    <?php foreach($items as $item):?>
        <div class="catalog-item">
            <div 
                class="catalog-item__image"
                style="background-image: url(<?=json_decode($item["images"])[0]?>);"
            ></div>
            <div class="atalog-item__info">
                <h2 class="catalog-item__title"><?=$item["name"]?></h2>
                <p class="catalog-item__price"><?=$item["price"]?></p>
                <a href="/item/<?=$item["id"]?>">
                    <button class="catalog-item__learn-button">learn more</button>
                </a>
            </div>
        </div>
    <?php endforeach?>
</div>