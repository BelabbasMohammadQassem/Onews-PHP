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

    $article = [
      "titre" => "Lorem ipsum dolor article 3",
      "organisation" => "news",
      "iconeAuteur" => "../images/icon-ohz.png",
      "datePublication" => "le 5 mai 2018",
      "dateTime" => "2018-05-05", //cette variable va servir a ce que le site lise la date par rapport a la variable publication qui ne pourra le représenter, il sert pour le référencement
      "auteur" => "Olivier Hertz",
      "texte" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, reiciendis quae? Nostrum alias repellendus explicabo architecto consequuntur voluptate, tempore distinctio fuga adipisci officiis sit laudantium exercitationem quia modi, cumque, tenetur id voluptatibus optio magni tempora! Sed voluptatum natus tenetur quasi inventore ea nesciunt autem vero iure repellat aspernatur doloremque debitis, maxime molestiae. Facere consequuntur error maxime dolore iure et dolor est! Vero veniam est repellendus officiis non quam nemo incidunt eligendi porro minima nisi vitae assumenda, praesentium blanditiis sapiente debitis molestiae qui tenetur voluptatum possimus expedita. Enim vel, odit facilis repudiandae eos earum iure natus est neque assumenda architecto necessitatibus accusamus, tenetur aspernatur inventore cupiditate ea repellendus pariatur. Sequi eum magni laboriosam minima, autem omnis. Ut culpa rerum non adipisci, earum rem ad doloremque esse hic? Odio, fuga quia, eos nemo, ut saepe vero repellendus tempore sunt assumenda optio mollitia modi voluptatum incidunt accusantium placeat neque amet doloremque illo molestiae debitis possimus. Voluptas ipsam quisquam saepe totam cum eligendi, repellat facilis doloribus animi earum aspernatur perferendis incidunt odio? Animi accusantium amet laborum! Nesciunt, id ullam voluptas provident sit, delectus accusamus in animi repellendus quo earum sequi, autem illum numquam blanditiis magnam assumenda saepe! Velit architecto earum officia delectus aliquid quam!<br><br>

      Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat natus accusantium iusto pariatur deserunt recusandae sequi inventore alias! Eveniet enim exercitationem suscipit, non nisi voluptatem ducimus reprehenderit fuga amet alias obcaecati sequi numquam! Possimus totam optio nisi aperiam amet maiores cum porro consequuntur quibusdam quasi praesentium minima quia reprehenderit recusandae, inventore accusamus voluptate voluptatem, laudantium molestias. At nam autem quam magni nesciunt a laboriosam praesentium recusandae delectus porro ipsam laudantium modi vitae assumenda, iste labore atque minima mollitia nulla dicta sapiente error cum voluptatem earum! Deleniti consectetur ullam quaerat eum, totam alias asperiores dolores tenetur nihil aliquam obcaecati iusto corporis, libero, impedit cumque eligendi accusamus tempora. Ipsum harum placeat optio commodi itaque quia earum aperiam, recusandae incidunt laboriosam sequi unde qui libero porro praesentium dolorum veniam cum pariatur rerum est. Dignissimos, facere molestiae quis dolor earum eos impedit commodi officiis fugit obcaecati temporibus accusamus sapiente assumenda, maiores nostrum ducimus eum consectetur quam nulla nobis corrupti ut in. Sunt nam minus esse odio, eius hic delectus accusantium tempora odit voluptas obcaecati dolore sit illo saepe amet! Possimus animi eius asperiores cum qui rerum facilis cumque eaque iure dolorem! Suscipit animi veniam quae alias natus unde hic eaque ad odit, accusamus vitae.",
    ];
    
?>
      <main class="right">
        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
        <?php
        include("./inc/articleDetails.php");
?>
          
            
        </div>
      </main>
    </div>
</body>
</html>
