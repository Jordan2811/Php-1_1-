<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>1_1 Quête PHP</title>
    </head>
 <body>
 <form action="thanks.php" method="get">
     <div>
         <label  for="nom">Nom :</label>
         <input  type="text"  id="nom"  name="lastname" placeholder="nom" required>
     </div>
       <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="firstName" placeholder="prenom" required>
    </div>
     <div>
         <label  for="courriel">Courriel :</label>
         <input  type="email"  id="courriel"  name="mail" placeholder="mail" required>
     </div>
     <div>
         <label for="numero">Numero :</label>
         <input id="numero" name="phone" pattern="[0-9]{2}*[0-9]{2}*[0-9]{2}*[0-9]{2}*[0-9]{2}"
                placeholder="phone number"
                required type="tel">
     </div>
        <div>
            <label for="sujet">Sujet :</label>
            <select name="subject" id="sujet">
                <option value="Daniel">Daniel Inshape</option>
                <option value="Thibault">Titi Inshape</option>
                <option value="Jordan">Jojo Inshape</option>
                <option value="Nicolas">Maître Yoda PHP</option>
        </div>
     <div>
         <label for="message">Message :</label>
         <textarea id="message" name="message" required></textarea>
     </div>
     <div  class="button">
         <button  type="submit">Envoyer votre message</button>
     </div>
 </form>
 </body>
</html>
