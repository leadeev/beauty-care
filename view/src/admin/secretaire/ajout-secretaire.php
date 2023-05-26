<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout secrétaire</title>

    <!-- Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../../images/favicon/site.webmanifest">

    <!-- Bulma Version 0.7.5-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" />

    <!-- CSS, Fontawesome & Google Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
</head>

<body>
    <?php include ('include/header.php');?>


    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="title">Mission</h1>
                    <div class="content">
                        <ul>
                            <li>accueillir les patients, les orienter vers une salle d’attente, veiller à leur réception
                                par les médecins,</li>
                            <li>répondre aux appels téléphoniques, les transmettre si nécessaire,</li>
                            <li>prendre les rendez-vous et gérer le planning des praticiens,</li>
                            <li>saisir les comptes rendus médicaux,</li>
                            <li>mettre à jour les dossiers informatiques, les imprimer, les classer,</li>
                            <li>assurer la comptabilité courante.</li>
                            </lul>
                    </div>
                </div>
                <div class="column">
                    <form method="POST" action="../../../../controller/SEC_controller.php">
                        <label class="label">Prénom</label>
                        <div class="field has-addons">
                            <p class="control">
                                <input type="text" placeholder="Prénom" name="prenom_sec" class="input"
                                    aria-required="true" aria-invalid="false">
                            </p>
                        </div>

                        <label class="label">Nom</label>
                        <div class="field has-addons">
                            <p class="control">
                                <input type="text" placeholder="Nom" name="nom_sec" class="input" aria-required="true"
                                    aria-invalid="false">
                            </p>
                        </div>

                        <label class="label">Date de naissance</label>
                        <div class="field has-addons">
                            <p class="control">
                                <input type="date" placeholder="Date de naissance" name="dn_sec" class="input"
                                    aria-required="true" aria-invalid="false">
                            </p>
                        </div>

                        <label class="label">Pseudo</label>
                        <div class="field has-addons">
                            <p class="control">
                                <input type="text" placeholder="Pseudo" name="pseudo_sec" class="input"
                                    aria-required="true" aria-invalid="false">
                            </p>
                        </div>

                        <label class="label">Mot de passe</label>
                        <div class="field has-addons">
                            <p class="control">
                                <input type="password" placeholder="Mot de passe" name="mdp_sec" class="input"
                                    aria-required="true" aria-invalid="false">
                            </p>
                        </div>

                        <div class="field">
                            <p class="control">
                                <button name="valider" type="submit" class="button is-info">Ajouter</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include ('./include/footer.php');?>


    <script async type="text/javascript" src="../../../js/bulma.js"></script>
</body>

</html>