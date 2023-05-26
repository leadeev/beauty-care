<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu | Secrétaire</title>

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


    <section class="section startups has-text-centered">
        <div class="container is-narrow">
            <div class="startup-grid">
                <div class="columns is-centered level">
                    <div class="column level-item">
                        <div class="box">
                            <p style="font-size: 30px;">Ajouter un secrétaire</p>
                            <a class="button is-info is-outlined is-rounded" href="ajout-secretaire.php">AJOUTER</a>
                        </div>
                    </div>
                    <div class="column level-item">
                        <div class="box">
                            <p style="font-size: 30px;">Liste secrétaire</p>
                            <a class="button is-info is-outlined is-rounded" href="liste-secretaire.php">VOIR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include ('./include/footer.php');?>


    <script async type="text/javascript" src="../../../js/bulma.js"></script>
</body>

</html>