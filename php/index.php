<?php 
    $header = "./inc/header.php";
    $left = "./inc/left.php";
    $articles = "./inc/articles.php";

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
<?php
        if (file_exists($articles)) { 
            include($articles);
        } else {
            echo "Page non trouvée.";
        }
?>
      </main>
    </div>
</body>
</html>
