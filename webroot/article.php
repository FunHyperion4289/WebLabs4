<?php
require_once("funcs/functions.php");

$articleId = $_GET['id'] ?? null;

if (null === $articleId) {
    http_response_code(400);
    exit();
}

$articleId = (int)$articleId;

$article = getArticleData($articleId);

if (null === $article) {
    http_response_code(404);
    exit();
}

$page_title = "{$article['title']}";
$curPage = "articlePage";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php require("./includes/head.php"); ?>
</head>

<body>
<?php include("./includes/header.php")?>

<main class="container">
    <?php require './includes/articles.php'; ?>
</main>

<?php include("./includes/footer.php") ?>
</body>

</html>