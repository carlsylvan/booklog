<?php

require 'classes/review-view.php';
require 'classes/review-model.php';

$pdo = require 'partials/connect.php';

$reviewModel = new ReviewModel($pdo);
$reviewView = new ReviewView();

include 'partials/header.php';
include 'partials/nav.php';

$reviewView->renderAllReviews($reviewModel->getAllReviewsWithBooksAndAuthors());

include 'partials/footer.php';