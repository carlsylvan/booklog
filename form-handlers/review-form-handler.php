<?php

require '../classes/review-model.php';
$reviewModel = new ReviewModel(require '../partials/connect.php');

if (isset($_POST['title'], $_POST['text'], $_POST['score'], $_POST['userId'], $_POST['bookId'])) {
    $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
    $text = filter_var($_POST['text'], FILTER_SANITIZE_SPECIAL_CHARS);
    $score = filter_var($_POST['score'], FILTER_SANITIZE_NUMBER_INT);
    $userId = filter_var($_POST['userId'], FILTER_SANITIZE_NUMBER_INT);
    $bookId = filter_var($_POST['bookId'], FILTER_SANITIZE_NUMBER_INT);
    $reviewModel->addReview($text, $score, $userId, $bookId);
}

header('Location: ../reviews.php');