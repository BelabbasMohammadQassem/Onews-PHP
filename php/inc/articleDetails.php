<h2 class="right__title"><?= $article["titre"]; ?></h2>
        <div class="posts">
            <article class="post posts__details">
            <a href="" class="post__category post__category--color-<?= $article["organisation"]; ?>"><?= $article["organisation"]; ?></a>
            <div class="post__meta">
              <img class="post__author-icon" src="<?= $article["iconeAuteur"]; ?>" alt="">
              <strong class="post__author"><?= $article["auteur"]; ?></strong>
              <time datetime="<?= $article["dateTime"]; ?>"><?= $article["datePublication"]; ?></time>
            </div>
              <article>
                <?= $article["texte"]; ?>
              </article>
              <a href="./index.php" class="post__link">Back to home</a>
            </article>
        </div>