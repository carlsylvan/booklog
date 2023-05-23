<?php

class BookView {

    public function renderAllBooks(array $books): void {
        echo "<h2>Böcker</h2>";
        echo "<ul>";
        foreach ($books as $book) {
            echo "<li>{$book['title']} ({$book['year']})</li>";
        }
        echo "</ul>";
    }

    public function renderAllBooksWithAuthorsAsList(array $books): void {
        echo "<h2>Böcker och deras författare</h2>";
        echo "<ul>";
        foreach ($books as $book) {
            echo "<li>{$book['title']} av {$book['first_name']} {$book['last_name']} ({$book['year']})</li>";
        }
        echo "</ul>";
    }
    
}