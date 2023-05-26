<!DOCTYPE html>
<html>

<head>
    <title>Test méthode POST</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <!doctype html>
    <html lang="FR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>espace membre</title>

        <!-- CSS, Fontawesome & Google Fonts-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">


    </head>
    <button><a href="landing.php">BEAUTY-CARE</a></button>
    <h1>DEMANDER UN DEVIS
    </h1>
    <!-- Corps de la page -->
    <form action="devis.php" method="POST" class="formulaire">
        <!-- Début du formulaire -->
        <!-- Liste déroulante -->
        <select name="titre">
            <option>Mlle</option>
            <option selected>Mme</option>
            <option>M.</option>
        </select>
        <!-- Zones de texte -->
        <label for="nom"> Nom : </label><input type="text" name="nom" id="nom"
            placeholder="Entrez votre nom" /><br /><br />
        <label for="prenom">Prénom : </label><input type="text" name="prenom" id="prenom"
            value="Prénom par défaut" /><br /><br />
        <!-- Bouton radio -->
        <label for="sexe">Sexe : </label>
        <input type="radio" name="sexe" id="sexe" value="H" checked /> Masculin
        <input type="radio" name="sexe" value="F" /> Féminin
        <br /><br />
        <!-- Slider -->
        <label for="age">Age : 1 </label>
        <input type="range" name="age" id="age" min="1" max="99" step="1" value="18" /> 99
        <br /><br />
        <!-- zone texte -->
        <label for="poids">Votre poids</label>
        <input type="text" name="poids" id="poids" value="poids" /><br /><br />



        <!-- questions des -->

        <label for="chirurgie">Avez-vous déjà subi(e) une opération chirurgicale* </label>
        <input type="radio" name="chirurgie" id="oui" value="O" checked />Oui
        <input type="radio" name="chirurgie" value="N" /> Non <br>
        <label for="pathologie">Pathologie particulière (diabète, hypertension, …)* </label>
        <input type="radio" name="pathologie" id="oui" value="O" checked />Oui
        <input type="radio" name="pathologie" value="N" /> Non
        <br>
        <label for="allergie">Allergie aux médicaments :*</label>
        <input type="radio" name="allergie" id="oui" value="O" checked />Oui
        <input type="radio" name="allergie" value="N" /> Non
        <br>
        <label for="pre">Si oui, merci de préciser le(s)quel(s) : </label><input type="text" name="pre" id="pre"
            value="taper message" /><br /><br />
        <br>
        <label for="allergie">Traitement médical en cours :*</label>
        <input type="radio" name="allergie" id="oui" value="O" checked />Oui
        <input type="radio" name="allergie" value="N" /> Non
        <br>
        <br>


        <br>
        <!-- Case à cocher -->
        <input type="checkbox" name="accepte" checked="checked" />
        Vous affirmez avoir pris connaissance de notre
        <a href="mention.php">Politique de confidentialité.</a>
        <br>
        Vous pouvez vous désinscrire à tout moment en nous contactant par le formulaire de contact.

        <br>

        <!-- Bouton -->
        <input type="submit" name="btOK" value="OK">
    </form> <!-- Fin du formulaire -->
</body>

</html>