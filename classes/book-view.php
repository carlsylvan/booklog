<?php

class BookView {

    public function renderAllBooks(array $books): void {
        echo "<ul>";
        foreach ($books as $book) {
            echo "<li>{$book['title']} ({$book['year']})</li>";
        }
        echo "</ul>";
    }
}