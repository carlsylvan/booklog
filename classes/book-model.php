<?php

require_once 'db.php';

class BookModel extends DB {

    protected $table = 'books';

    public function getAllBooks() {
        return $this->getAll($this->table);
    }

    public function getAllBooksWithAuthors() {
        $sql = "SELECT books.title, books.year, authors.first_name, authors.last_name FROM books INNER JOIN authors ON books.author_id = authors.id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addBook(string $title, int $year, int $authorId) {
        $sql = "INSERT INTO {$this->table} (title, year, author_id) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$title, $year, $authorId]);
    }
}