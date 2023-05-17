<?php

require_once 'db.php';

class BookModel extends DB {

    protected $table = 'books';

    public function getAllBooks() {
        return $this->getAll($this->table);
    }

    public function addBook(string $title, int $year, int $authorId) {
        $sql = "INSERT INTO {$this->table} (title, year, author_id) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$title, $year, $authorId]);
    }
}