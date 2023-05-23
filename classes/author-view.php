<?php

class AuthorView {

    public function renderAllAuthors(array $authors): void {
        echo "<h2>Författare</h2>";
        echo "<ul>";
        foreach ($authors as $author) {
            echo "<li>{$author['first_name']} {$author['last_name']}</li>";
        }
        echo "</ul>";
    }
}