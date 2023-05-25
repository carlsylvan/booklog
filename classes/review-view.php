<?php

class ReviewView {

    public function renderAllReviews(array $reviews): void {
        echo "<h2>Recensioner</h2>";
        echo "<ul>";
        foreach ($reviews as $review) {
            echo "<li>
                <h3>{$review['title']} av {$review['first_name']} {$review['last_name']}</h3>
                <p>{$review['text']}</p>
                <span>{$review['score']}</span>
                <span>  //  </span>
                <span>{$review['user_name']}</span>
                <a href=\"review-edit.php?id={$review['id']}\">Redigera</a>
                </li>";
        }
    }

    public function renderEditReview(array $review): void {
        echo "<h2>Redigera recension</h2>";
        echo "<form action=\"form-handlers/review-edit-handler.php\" method=\"POST\">
            <input type=\"hidden\" name=\"id\" value=\"{$review['id']}\">
            <label for=\"text\">Text</label>
            <textarea name=\"text\" id=\"text\" cols=\"30\" rows=\"10\">{$review['text']}</textarea>
            <label for=\"score\">Betyg</label>
            <input type=\"number\" name=\"score\" id=\"score\" value=\"{$review['score']}\">
            <input type=\"submit\" value=\"Spara\">
        </form>";
    }
}