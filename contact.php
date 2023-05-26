<?php include ('include/header.php');?>
<?php /* Page: contact.php */
//mettez ici votre adresse mail
$VotreAdresseMail="leadev31@gmail.com";
// si le bouton "Envoyer" est cliqué
if(isset($_POST['envoyer'])) {
    //on vérifie que le champ mail est correctement rempli
    if(empty($_POST['mail'])) {
        echo "Le champ mail est vide";
    } else {
        //on vérifie que l'adresse est correcte
        if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['mail'])){
            echo "L'adresse mail entrée est incorrecte";
        }else{
            //on vérifie que le champ sujet est correctement rempli
            if(empty($_POST['sujet'])) {
                echo "Le champ sujet est vide";
            }else{
                //on vérifie que le champ message n'est pas vide
                if(empty($_POST['message'])) {
                    echo "Le champ message est vide";
                }else{
                    //tout est correctement renseigné, on envoi le mail
                    //on renseigne les entêtes de la fonction mail de PHP
                    $Entetes = "MIME-Version: 1.0\r\n";
                    $Entetes .= "Content-type: text/html; charset=UTF-8\r\n";
                    $Entetes .= "From: Nom de votre site <".$_POST['mail'].">\r\n";//de préférence une adresse avec le même domaine de là où, vous utilisez ce code, cela permet un envoie quasi certain jusqu'au destinataire
                    $Entetes .= "Reply-To: Nom de votre site <".$_POST['mail'].">\r\n";
                    //on prépare les champs:
                    $Mail=$_POST['mail']; 
                    $Sujet='=?UTF-8?B?'.base64_encode($_POST['sujet']).'?=';//Cet encodage (base64_encode) est fait pour permettre aux informations binaires d'être manipulées par les systèmes qui ne gèrent pas correctement les 8 bits (=?UTF-8?B? est une norme afin de transmettre correctement les caractères de la chaine)
                    $Message=htmlentities($_POST['message'],ENT_QUOTES,"UTF-8");//htmlentities() converti tous les accents en entités HTML, ENT_QUOTES Convertit en + les guillemets doubles et les guillemets simples, en entités HTML
                    //en fin, on envoi le mail
                    if(mail($VotreAdresseMail,$Sujet,nl2br($Message),$Entetes)){//la fonction nl2br permet de conserver les sauts de ligne et la fonction base64_encode de conserver les accents dans le titre
                        echo "Le mail à été envoyé avec succès!";
                    } else {
                        echo "Une erreur est survenue, le mail n'a pas été envoyé";
                    }
                }
            }
        }
    }
}?>
<!--
Les balises <form> sert à dire que c'est un formulaire
on lui demande de faire fonctionner la page contact.php
une fois le bouton "Envoyer" cliqué on lui dit également que c'est un formulaire de type "POST"
Les balises <input> sont les champs de formulaire
type="text" sera du texte
la balise <textarea> sert à dire qu'il faut afficher un champ de texte rectangulaire (les sauts de ligne sont possibles) au contraire des champ input text
Vous remarquerez que l'ont ne renseigne pas le type (type="") pour la balise textarea
cols="nombre de colone horizontale" rows="nombre de colone verticales"
type="submit" sera un bouton pour valider le formulaire
name="nom de l'input" sert à le reconnaitre une fois le bouton submit cliqué, pour le code PHP contact.php
-->
<form action="contact.php" method="post">
    Mail: <input type="text" name="mail" value="" />
    <br />
    Sujet: <input type="text" name="sujet" value="" />
    <br />
    Message: <textarea name="message" cols="40" rows="20"></textarea>
    <br />
    <input type="submit" name="envoyer" value="Envoyer" />
</form>


<head>
    <title>Formulaire Contact Responsive - Blueseodesign.com</title>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='custom.css' rel='stylesheet' type='text/css'>
</head>

<body>


    <div class="container">

        <div class="row">
            <img src="../images/llogo.png" class="img-fluid" alt="">

            <div class="col-xl-8 offset-xl-2 py-5">

                <h1> Formulaire de contact
                </h1>

                <form method="post" action="contact.php" role="form">

                    <div class="messages"></div>

                    <div>

                        <div>
                            <div>
                                <div>
                                    <label for="form_name">Nom *</label>
                                    <input id="form_name" type="text" name="name" class="form-control"
                                        placeholder="Veuillez entrer votre nom *" required="required"
                                        data-error="Nom est obligatoire.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label for="form_lastname">Prénom *</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control"
                                        placeholder="Veuillez entre votre prénom *" required="required"
                                        data-error="Prénom est obligatoire.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control"
                                        placeholder="Veuillez entrer votre email *" required="required"
                                        data-error="Un email valid est obligatoire.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label for="form_need">Veuillez préciser votre besoin *</label>
                                    <select id="form_need" name="need" class="form-control" required="required"
                                        data-error="Veuillez préciser votre besoin.">
                                        <option value=""></option>
                                        <option value="Demande de devis">Demande de devis</option>
                                        <option value="Demande générale">Demande générale</option>
                                        <option value="Greffe capillaire">Greffe capillaire</option>
                                        <option value="Chirurgie Esthétique"> Chirurgie Esthétique</option>
                                        <option value="Réassignation de genre">Réassignation de genre</option>
                                        <option value="Surpoids / Bariatrique">Surpoids / Bariatrique</option>
                                        <option value="Soins dentaires">Soins dentaires</option>


                                        <option value="Autre">Autre</option>
                                    </select>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div>
                                    <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="message" class="form-control"
                                        placeholder="Votre Message *" rows="4" required="required"
                                        data-error="Veuillez remplir le champ Message."></textarea>
                                    <div></div>
                                </div>
                            </div>
                            <div>
                                <input value="Envoyer">
                            </div>
                        </div>
                        <div>
                            <div>
                                <p>
                                    <strong>*</strong> Ces champs sont obligatoires.
                                </p>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <!-- /.8 -->

        </div>
        <!-- /.row-->

    </div>
    <!-- /.container-->


</body>

<?php include ('include/footer.php');?>