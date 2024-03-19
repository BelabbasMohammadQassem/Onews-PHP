<?php
    $tableauLienNavigation = [
      "Plan du site" => "./plan_de_site.php",
      "Mentions legales" => "./mentions_legales.php",
      "Contact" => "./contact.php",
    ];
?>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
<header class="left">
        <h1 class="left__title">O'Clock Students News</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Say a word</strong> contact us</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <nav>
          <ul class="left__nav">
<?php
            foreach($tableauLienNavigation as $nomLien => $urlPage) {
?>
              <li class="left__nav-item"><a href="<?= $urlPage; ?>" class="left__nav-link"><?= $nomLien; ?></a></li>
<?php
            }
?>
          </ul>
        </nav>
      </header>
      