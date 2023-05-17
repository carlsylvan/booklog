<?php

require 'classes/user-view.php';
require 'classes/user-model.php';

$pdo = require 'partials/connect.php';

$userModel = new UserModel($pdo);
$userView = new UserView();

include 'partials/header.php'; 
include 'partials/nav.php';

$userView->renderAllUsers($userModel->getAllUsers());

include 'partials/footer.php';