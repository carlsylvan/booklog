<?php

require 'classes/author-model.php';
require 'classes/author-view.php';

include 'partials/header.php';
include 'partials/nav.php';

$pdo = require 'partials/connect.php';

$authorModel = new AuthorModel($pdo);
$authorView = new AuthorView();

$authorView->renderAllAuthors($authorModel->getAllAuthors());

include 'partials/footer.php';