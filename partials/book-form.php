<?php

require_once 'classes/author-model.php';

$authorModel = new AuthorModel(connect($host, $db, $user, $password));
?>
<h3>Lägg till bok till databasen</h3>
<form action="form-handlers/book-form-handler.php" method="post">
    <div>
        <label for="title">Titel: </label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="year">Utgivningsår: </label>
        <input type="number" name="year" id="year">
    </div>
    <div>
        <label for="author">Författare: </label>
        <select name="authorId" id="author">
            <option value="">-- Välj författare --</option>

            <?php 
            $authors = $authorModel->getAllAuthors();
            foreach ($authors as $author) {
                echo "<option value='{$author['id']}'>{$author['first_name']} {$author['last_name']}</option>";
            }
            ?>

        </select>
    </div>
    <div>
        <input type="submit" value="Add book">
    </div>