<?php

class Book {

    private string $title;
    private int $year;
    private int $authorId;

    public function __construct(string $title, int $year, int $authorId) {
        $this->title = $title;
        $this->year = $year;
        $this->authorId = $authorId;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getYear(): int {
        return $this->year;
    }

    public function getAuthorId(): int {
        return $this->authorId;
    }
}