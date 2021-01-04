<?php

function uploadImage() {
    $status = "";

    if (!empty($_FILES)) {
        $path = BIG_IMAGE_DIR . $_FILES["image"]["name"];
        $file = $_FILES["image"]["tmp_name"];
        $filename = $_FILES["image"]["name"];
        
        $image_ext = pathinfo($filename, PATHINFO_EXTENSION);

        // if ($image_ext !== 'jpg' || 'png') {
            // $status = "You screwed up!!!";
            // return $status;
        // }

        list($width, $height, $image_type) = getimagesize($file);


        $new_filename = time() . "." . $image_ext;

        $new_width = $width / 15;
        $new_height = $height / 15;

        switch($image_type) {
            case IMAGETYPE_JPEG:
                $create_image = imagecreatefromjpeg($file);

                $new_image = imagecreatetruecolor($new_width, $new_height);
                imagecopyresampled($new_image, $create_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                imagejpeg($new_image, SMALL_IMAGE_DIR . $new_filename);
                break;
            case IMAGETYPE_PNG:
                $create_image = imagecreatefrompng($file);

                $new_image = imagecreatetruecolor($new_width, $new_height);
                imagecopyresampled($new_image, $create_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                imagepng($new_image, SMALL_IMAGE_DIR . $new_filename);
                break;
            default:
                return $status = "You failed:((_Try_agein.";
        }

        if(move_uploaded_file($_FILES["image"]["tmp_name"], BIG_IMAGE_DIR . $new_filename)){
            getResponse("INSERT INTO images (image_name) VALUES ('{$new_filename}')");
            $status = "All_done!!";
            header("Location: /?status={$status}");


        } else {
            $status = "You_screws_up:(";
            header("Location: /?status={$status}");
        }
    }
}

