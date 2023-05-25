<?php

require_once 'db.php';

class ReviewModel extends DB {

    protected $table = 'reviews';

    public function getReviewById(int $id) {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

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

    public function addReview(int $bookId, string $text, int $score, int $userId) {
        $sql = "INSERT INTO {$this->table} (book_id, text, score, user_id) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$bookId, $text, $score, $userId]);
    }

    public function editReview(int $id, string $text, int $score) {
        $sql = "UPDATE {$this->table} SET text = ?, score = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$text, $score, $id]);
    }

}