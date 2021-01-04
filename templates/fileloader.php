<div class="file-uploader">
    <p>
        <?php
            if (isset($_GET['status'])) {
                echo str_ireplace('_', ' ', $_GET['status']);
            } else {
                echo 'Загрузить изображение';
            }
        ?>
    </p>
    <form method="post" enctype="multipart/form-data">
        <input type="file" accept="image/*" name="image" class="file-input">
        <button type="submit" class="load-image-button">load</button>
        <div class="file-preview"></div>
    </form>  
</div> 