<div class="item-page">
    <h1 class='item-page--name'><?=$item["name"]?> <?=$item["model"]?></h1>
    <div class="item-page--add-to-cart">
        <div class="item-page--item-main">
            <div class="item-page--main-img">
                <img
                    class='item-page--img-list--main-img'
                    src="<?=json_decode($item["images"])[0]?>" alt="<?=$item["name"]?>" />
                <ul class="item-page--img-list"
                >
                    <?php foreach(json_decode($item["images"]) as $image): ?>
                        <li
                            class="item-page--img-list-item"
                            style="background-image: url(<?=$image?>)"
                        >
                        </li>
                    <?php endforeach?>
                </ul>
            </div>
            <div class="add-to-cart">
                <p class="item-page--price"><?=$item["price"]?></p>
                <a href="<?=$_SERVER["REQUEST_URI"]?>/add">
                    <button class="item-page--add-to-cart-button">Add to Cart</button>
                </a>
            </div>
        </div>
        <div class="item-page--description">
            <div class="description">
                <div class="description--features">
                    <h3 class="description--features--title">
                        Features
                    </h3>
                    <ul class="description--features-list">

                        <?php foreach(json_decode($item["features"]) as $feature): ?>

                            <li class="description--features--list--element">
                                <?=$feature?>
                            </li>

                        <?php endforeach?>

                    </ul>
                    <p class="description--main">
                        <?=$item["description"]?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="comments">
        <div class="comments-box">
            <ul>
                <?php if (empty($feedbacks)): ?>
                    <p>Be nice and leave first comment</p>
                <?php else: ?>
                    <?php foreach($feedbacks as $feedback): ?>
                        <li class="comment">
                            <span class="comment-author">
                                <?=$feedback["username"]?>
                            </span>
                            <p class="comment-text">
                                <?=$feedback["feedback_text"]?>
                            </p>
                            <span class="comment-date">
                                <?=date_format(date_create($feedback["date"]), 'H:i m.d')?>
                            </span>
                        </li>
                    <?php endforeach?>
                <?php endif?>
            </ul>
        </div>
        <form method="post" action="<?=$_SERVER["REQUEST_URI"]?>/feedback">
            <input 
                require
                type="text" 
                name="feedback" 
                class="comment-form-text"
                placeholder="Comment"
            >
            <input 
                type="text" class="comment-form-author"
                name="author" 
                placeholder="Name"
            >
            <input type="submit" class="send-comment-button" placeholder="send" >
        </form>
    </div>
</div>