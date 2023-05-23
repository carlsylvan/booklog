<?php   

require 'classes/user-view.php';

require 'classes/db.php';
require 'classes/user-model.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);
$userModel = new UserModel($pdo);
$userView = new UserView();

include 'partials/header.php';
include 'partials/nav.php';

echo "<h2>Hej, på den här sidan kan du logga böckerna du har läst</h2>";

include 'partials/footer.php';