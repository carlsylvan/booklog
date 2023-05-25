<?php

require '../classes/review-model.php';
$reviewModel = new ReviewModel(require '../partials/connect.php');

if (isset($_POST['text'], $_POST['score'], $_POST['userId'], $_POST['bookId'])) {
    $text = filter_var($_POST['text'], FILTER_SANITIZE_SPECIAL_CHARS);
    $score = filter_var($_POST['score'], FILTER_VALIDATE_INT);
    $userId = filter_var($_POST['userId'], FILTER_VALIDATE_INT);
    $bookId = filter_var($_POST['bookId'], FILTER_VALIDATE_INT);
    $reviewModel->addReview($bookId, $text, $score, $userId);
}

header('Location: ../reviews.php');