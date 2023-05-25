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
                <form action='form-handlers/review-delete-handler.php' method='post'>
                    <input type='hidden' name='id' value='{$review['id']}'>
                    <input type='submit' value='Ta bort'>
                </form>
                
                </li>";
        }
    }
}