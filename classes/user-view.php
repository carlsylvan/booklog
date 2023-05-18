<?php

class UserView {

    public function renderAllUsers(array $users): void {
        echo "<ul>";
        foreach ($users as $user) {
            echo "<li>{$user['user_name']} ({$user['id']})</li>";
        }
        echo "</ul>";
    }
}