<?php 
    $header = "./inc/headerContact.php";
    $left = "./inc/leftContact.php";

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
        <h2 class="right__title">Contact</h2>
        <div class="posts">
          <div class="post post--solo">
            
          <form class="formulaire__contact" action="" method="post">  
            <h2>Identité</h2>
            <div class="identité">
              
              <label class="formulaire__contact__left" for="sexe">Je suis</label>
              <div class="formulaire__contact__right" >
                <input type="radio" id="femme" name="sexe" value="femme"> <label for="femme">une femme / </label>
                <input type="radio" id="homme" name="sexe" value="homme"> <label for="homme">un homme</label>
              </div>
              
              <label class="formulaire__contact__left" for="prenom">Mon prénom est</label><input type="text" id="prenom" name="prenom" placeholder="Prénom"/>
              <label class="formulaire__contact__left" for="nom">Mon prénom est</label><input type="text" id="nom" name="nom" placeholder="Nom"/>
              <label class="formulaire__contact__left" for="connu">J'ai connu ce site grâce à</label> 
              <select class="formulaire__contact__right" name="connu" id="connu">
                <option value="choisir">choisir</option>
                <option value="Facebook">Facebook</option>
                <option value="Twitter">Twitter</option>
                <option value="Google">Google</option>
                <option value="Bouche à oreilles">Bouche à oreilles</option>
                <option value="JT de 13h de Jean-Pierre Pernault">JT de 13h de Jean-Pierre Pernault</option>
                <option value="Autre">Autre</option>
              </select>

            </div>
            <h2>Message</h2>
            <div class="message">
              
              <label class="formulaire__contact__left" for="mail">Répondez-moi via </label><input class="formulaire__contact__right" type="text" id="email" name="email" placeholder="Adresse e-mail">
              <label class="formulaire__contact__left" for="message">Je voulais dire que </label><textarea class="formulaire__contact__right" id="mail" name="mail" rows="5" cols="33">Votre message</textarea>
              <label class="formulaire__contact__left" for="fichier">Et vous montrer ça aussi</label><input class="formulaire__contact__right" type="file" id="fichier" name="fichier">
            </div>

                
            <div class="certifie">
                <label class="formulaire__contact__left" for="certifie">Je certifie la véracité de ces informations</label><input class="formulaire__contact__right" type="checkbox" name="certifie" id="certifie">
            </div>

            <button type="submit">Envoyer</button>

          </form>

            <a href="./index.php" class="post__link"></a>
          </div>
        </div>
      </main>
    </div>
</body>
</html>