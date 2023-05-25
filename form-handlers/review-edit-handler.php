<?php

require '../classes/review-model.php';
$reviewModel = new ReviewModel(require '../partials/connect.php');

if (isset($_POST['text'], $_POST['score'])) {
    $text = filter_var($_POST['text'], FILTER_SANITIZE_SPECIAL_CHARS);
    $score = filter_var($_POST['score'], FILTER_VALIDATE_INT);
    $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
    $reviewModel->editReview($id, $text, $score);
}