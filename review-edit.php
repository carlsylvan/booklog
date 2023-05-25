<?php

require 'classes/review-view.php';
require 'classes/review-model.php';

$pdo = require 'partials/connect.php';

$reviewModel = new ReviewModel($pdo);
$reviewView = new ReviewView();

include 'partials/header.php';
include 'partials/nav.php';

$reviewView->reviewEditForm($reviewModel->getReviewById($_GET['id']));

include 'partials/review-form.php';

include 'partials/footer.php';