<?php
$url = "article.php?id={$article['id']}";
?>

<article class="blog-card">
    <img class="blog-card-image" src="src/img/<?= $article['image']; ?>" alt="article_img">
    <div class="blog-card-body">
        <header class="blog-card-header">
            <p class="blog-category"><?= $article['category']; ?></p>
            <h2 class="blog-card-heading"><a href="<?= $url; ?>"><?= $article['title']; ?></a></h2>
            <div class="blog-meta">
                <?= $article['author']; ?>
                <time datetime="<?= $article['created']; ?>"><?= $article['created']; ?></time>
            </div>
        </header>
        <div class="blog-card-description">
            <?= $article['content']; ?>
        </div>
    </div>
</article>