<?php
include 'inc/header.tpl.php';

// Variable superglobale :
// - pour récupérer les données du formulaire passée par la méthode GET (par l'URL) : $_GET
//var_dump($_GET);
var_dump($_POST);

?>


        <h2 class="right__title">Nous contacter</h2>
        <div class="posts">
          <div class="post post--solo">
            <p class="single">
              
              <!-- élément parent qui contient le formulaire -->
              <!-- action : indique au formulaire où (=URL) envoyer les données quand il est posté / envoyé -->
              <!-- method : méthode HTTP d'envoi des informations (GET / POST) -->
              <form action="" method="POST">

              <p>
                <!-- label : l'étiquette qui est liée à un composant de saisie d'information -->
                <label for="prenom">Votre prénom :</label>
                <!-- texte simple sur une ligne -->
                <input type="text" name="prenom" id="prenom" placeholder="Jean-François" required>
              </p>
              <p>
                <label for="email">Votre e-mail :</label>
                <!-- composant email -->
                <input type="email" name="email" id="email" placeholder="jf@gmail.com" value="toto@toto.com">
              </p>
              <p>
                <label>Etes-vous :</label>
                <label for="genre_femme">Une femme</label>
                <!-- composant radio (choix unique) -->
                <input type="radio" name="genre" id="genre_femme" value="femme"> 
                <label for="genre_homme">/ Un homme</label>
                <input type="radio" name="genre" id="genre_homme" value="homme">
              </p>
              <p>
                <label>Acceptez vous les CGV ?</label>
                <!-- case à cocher -->
                <input type="checkbox">
              </p>
              <p>
                <label>Votre mot de passe</label>
                <input type="password" name="password">
              </p>
              <p>
                <label>Quel âge avez-vous ?</label>
                <!-- saisie d'une valeur numérique -->
                <input type="number">
              </p>
              <p>
                <label>Votre fichier</label>
                <input type="file">
              </p>
              <p>
                <label for="vehicule">Vous avez ?</label>
                <!-- liste de choix / liste déroulante -->
                <select name="vehicule" id="vehicule">
                  <option>Renault 4L</option>
                  <option>WV Coccinelle</option>
                </select>
              </p>
              <p>
                <label for="message">Votre message</label>
                <textarea name="message" id="message"></textarea>
              </p>

              <p>
                <button>Envoyer</button>
              </p>

              </form>


            </p>
            <a href="./index.html" class="post__link">back to home</a>
          </div>
        </div>

<?php
include 'inc/footer.tpl.php';
?>
