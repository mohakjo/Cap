<main><Div id="Form">
      

      <h5>Merci de nous laisser vos questions, commentaires ou suggestions en complétant ce formulaire.</h5>
      <form id="Formulaire">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
      
        <label for="Prenom">Prénom :</label>
        <input type="text" id="Prenom" name="Prenom" required>
      
        <label for="mail">Email :</label>
        <input type="email" id="mail" name="mail" required>
      
        <label for="numero">Numéro de téléphone :</label>
        <input type="tel" id="numero" name="numero" required>
      
        <label for="message">Message :</label>
        <textarea id="message" required></textarea>
      <ul class="btns">
        <li><button type="submit" class="btn" id="submit">Envoyer</button></li>
        <li><button type="button" class="btn" id="delete" onclick="resetForm()">Effacer</button></li>
      </ul>  
      </form>
      
      <script>
        function resetForm() {
          if (confirm("Êtes-vous sûr de vouloir effacer les données du formulaire ?")) {
            document.getElementById("Formulaire").reset();
          }
        }
      </script>
        
    </Div>
</main>