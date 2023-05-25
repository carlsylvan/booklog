<?php

require '../classes/review-model.php';
$reviewModel = new ReviewModel(require '../partials/connect.php');

if (isset ($_POST['id'])) {
    $reviewModel->editReview($_POST['id'], $_POST['text'], $_POST['score']);
}

header('Location: ../reviews.php');
