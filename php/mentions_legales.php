<?php 
    $header = "./inc/header.php";
    $left = "./inc/left.php";

    if (file_exists($header)) { 
        include($header);
    } else {
        echo "Page non trouvée.";
    }

    if (file_exists($left)) { 
        include($left);
    } else {
        echo "Page non trouvée.";
    }
?>

<main class="right">
        <h2 class="right__title">Mentions légales</h2>
        <div class="posts">
          <div class="post post--solo">
            <p class="single">
              TODO
            </p>
            <a href="./index.php" class="post__link">back to home</a>
          </div>
        </div>
      </main>
    </div>
</body>
</html>