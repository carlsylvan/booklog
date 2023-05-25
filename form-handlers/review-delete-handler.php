<?php

require '../classes/review-model.php';
$reviewModel = new ReviewModel(require '../partials/connect.php');

if (isset($_POST['id'])) {
    $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
    $reviewModel->deleteReview($id);
}

header('Location: ../reviews.php');