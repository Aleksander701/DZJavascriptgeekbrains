<?php
// public
define("RELATIVE_PATH_BIG_IMAGE_DIR", "assets/big_images/");
define("RELATIVE_PATH_SMALL_IMAGE_DIR", "assets/small_images/");
// root
define("ROOT", dirname(__DIR__));
define("BIG_IMAGE_DIR", dirname(__DIR__) . "/public/assets/big_images/");
define("SMALL_IMAGE_DIR", dirname(__DIR__) . "/public/assets/small_images/");
define("TEMPLATES_DIR", dirname(__DIR__) . "/templates/");
define("LAYOUTS_DIR", "layouts/");
define("ENGINE_DIR", dirname(__DIR__) . "/engine/");

// DB config
define("HOST", "127.0.0.1:3306");
define("USERNAME", "root");
define("PASSWORD", "rootroot");
define("DB", "store");


require dirname(__DIR__) . "/engine/engine.php";
require dirname(__DIR__) . "/engine/db.php";
// require dirname(__DIR__) . "/engine/items.php";
// include dirname(__DIR__) . "/engine/fileloader.php";
// include dirname(__DIR__) . "/engine/rating.php";
// include dirname(__DIR__) . "/engine/catalogSort.php";
// include dirname(__DIR__) . "/engine/feedback.php";
// include dirname(__DIR__) . "/engine/checkValue.php";
// include dirname(__DIR__) . "/engine/auth.php";
// include dirname(__DIR__) . "/engine/basket.php";
// include dirname(__DIR__) . "/controllers/main.controller.php";

include dirname(__DIR__) . "/controllers/home.controller.php";
include dirname(__DIR__) . "/controllers/login.controller.php";
include dirname(__DIR__) . "/controllers/register.controller.php";
include dirname(__DIR__) . "/controllers/basket.controller.php";
include dirname(__DIR__) . "/controllers/logout.controller.php";
include dirname(__DIR__) . "/controllers/item.controller.php";
include dirname(__DIR__) . "/controllers/catalog.controller.php";


include dirname(__DIR__) . "/models/auth.model.php";
include dirname(__DIR__) . "/models/basket.model.php";
include dirname(__DIR__) . "/models/feedback.model.php";
include dirname(__DIR__) . "/models/items.model.php";
include dirname(__DIR__) . "/models/admin.model.php";
include dirname(__DIR__) . "/models/orders.model.php";


// autoloader("controllers");
// autoloader("models");
