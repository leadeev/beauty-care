<?php include ('include/header.php');?>


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

                <form id="contact-form" method="post" action="contact.php" role="form">

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Nom *</label>
                                    <input id="form_name" type="text" name="name" class="form-control"
                                        placeholder="Veuillez entrer votre nom *" required="required"
                                        data-error="Nom est obligatoire.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Prénom *</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control"
                                        placeholder="Veuillez entre votre prénom *" required="required"
                                        data-error="Prénom est obligatoire.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control"
                                        placeholder="Veuillez entrer votre email *" required="required"
                                        data-error="Un email valid est obligatoire.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
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
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="message" class="form-control"
                                        placeholder="Votre Message *" rows="4" required="required"
                                        data-error="Veuillez remplir le champ Message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-outline-primary mb-2" value="Envoyer">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"
        crossorigin="anonymous"></script>
    <script src="contact.js"></script>
</body>

<?php include ('include/footer.php');?>