<?php

require_once 'db.php';

class ReviewModel extends DB {

    protected $table = 'reviews';

    public function getAllReviewsWithBooksAndAuthors() {
        $sql = "SELECT reviews.*, books.*, authors.*, users.user_name
        FROM reviews
        INNER JOIN books ON reviews.book_id = books.id
        INNER JOIN authors ON books.author_id = authors.id
        INNER JOIN users ON reviews.user_id = users.id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}