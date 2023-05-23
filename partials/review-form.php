<?php

require_once 'classes/book-model.php';

$bookModel = new BookModel(connect($host, $db, $user, $password));
?>
<h3>Lägg till en recension till en av böckerna!</h3>
<form action="form-handlers/review-form-handler.php" method="post">
    <div>
        <label for="title">Titel: </label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="text">Text: </label>
        <input type="text" name="text" id="text">
    </div>
    <div>
        <label for="score">Betyg: </label>
        <input type="number" name="score" id="score">
    </div>
    <div>
        <label for="user">Användare: </label>
        <select name="userId" id="user">
            <option value="">-- Välj användare --</option>

            <?php 
            $users = $userModel->getAllUsers();
            foreach ($users as $user) {
                echo "<option value='{$user['id']}'>{$user['user_name']}</option>";
            }
            ?>

        </select>
    </div>
    <div>
        <label for="book">Bok: </label>
        <select name="bookId" id="book">
            <option value="">-- Välj bok --</option>

            <?php 
            $books = $bookModel->getAllBooks();
            foreach ($books as $book) {
                echo "<option value='{$book['id']}'>{$book['title']}</option>";
            }
            ?>

        </select>
    </div>
    <div>
        <input type="submit" value="Add review">
    </div>
</form>
