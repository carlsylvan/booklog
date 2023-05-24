<?php

require_once 'classes/book-model.php';
require_once 'classes/user-model.php';

$bookModel = new BookModel(connect($host, $db, $user, $password));
$userModel = new UserModel(connect($host, $db, $user, $password));
?>
<h3>Lägg till en recension till en av böckerna!</h3>
<form action="form-handlers/review-form-handler.php" method="post">
    <!-- <div>
        <label for="title">Titel: </label>
        <input type="text" name="title" id="title">
    </div> -->
    <div>
        <label for="book">Bok: </label>
        <select name="bookId" id="book">
            <option value="">-- Välj bok --</option>

            <?php 
            $books = $bookModel->getAllBooksWithAuthors();
            foreach ($books as $book) {
                echo "<option value='{$book['id']}'>{$book['title']} av {$book['first_name']} {$book['last_name']} </option>";
            }
            ?>

        </select>
    </div>
    <div>
        <label for="text">Recension: </label>
        <textarea type="text" name="text" id="text"></textarea>
    </div>
    <div>
        <label for="score">Betyg: </label>
        <input type="number" name="score" id="score" min="0" max="10">
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
        <input type="submit" value="Add review">
    </div>
</form>
