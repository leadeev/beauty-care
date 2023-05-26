 <?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
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

 <body>
     <div class="">
         <div>
             <?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>


             <div>
                 <h1 class="">Bonjour <?php echo $data['pseudo']; ?> !</h1>
                 <hr />
                 <a href="deconnexion.php">Déconnexion</a>

                 <button> <a href="modifier.php">Changer Votre mot de passe </a>

                 </button>
             </div>
         </div>
     </div>





     <section class="page">


         <div class="bande">
             <img class="logo" src="../view/images/llogo.png" alt="">
             <br>
             <h1>BEAUTY-CARE</h1> <BR> <br>
             <a href="">COMPTE</a> <BR> <br>
             <a href="">PARAMETRES</a> <BR> <br>
             <a href="">CONNEXION ET SECURITE</a> <BR> <br>
             <a href="">VOTRE SEJOUR</a> <BR> <br>
             <a href="">DOCUMENTS PARTAGES</a> <BR> <br>
             <a href="devis.php">DEVIS</a> <BR> <br>
             <a href="">CONTACTEZ NOUS</a> <BR> <br>
             <a href="">AIDE</a> <BR> <br>
         </div>



         <div class="bande2">

             <H1> Bienvenue dans votre profil BEAUTY-CARE </H1>

             <section class="in">

                 <img class="pik" src="../view/images/man.jpg" alt="">
                 <img class="pik" src="../view/images/wom.jpg" alt="">
             </section>



             <p class="title">DESTINATIONS PROPOSÉES PAR SÉJOUR MÉDICAL</p>
             <button> Choisir Votre destination</button>

             <p class="title">TROUVER UN SEJOUR MEDICAL ADAPTER A VOTRE BUDGET</p>
             <BUTTon>Contact & Devis</BUTTon>
             <SECTION>
                 <p class="title"> Confiez-nous votre projet médical</p>
                 <P>Un devis et un plan de traitement personnalisé sous 48 heures.</P>
                 <button>DEMANDER UN DEVIS PERSONALISE </button>
             </SECTION>

             <SECTION>
                 <p class="title">NOTRE CONTRAT</p>
                 <p>Partir à l’étranger afin de réaliser une intervention chirurgicale présente de nombreux avantages.
                     <br>
                     Pour que cette expérience reste toujours un succès, un contrat d’engagement nous lie.
                 </p>

             </SECTION>




             <section class="devoirs">
                 <section class="vos">
                     <h2>VOS DEVOIRS</h2>

                     <P>Données médicales <br>

                         Nous transmetons des données médicales exactes
                     </P>

                     <P>Nous questionnez <br>
                         Posez-nous toutes vos questions, même si vous vous dîtes que cela ne se demande pas
                     </P>
                 </section>

                 <section class="nos">


                     <h2>NOS DEVOIRS</h2>

                     <p>Fiabilité <br>
                         Apporter une information fiable et compréhensible</p>
                     <p>
                         Sélection stricte <br>
                         Sélectionner les meilleurs cliniques et chirurgiens</p>
                     <p> Contrôles et audits réguliers<br>
                         Mener des audits réguliers sur les normes de sécurité et d’hygiène</p>
                     <p> Disponibilité 24h/7j <br>
                         Etre disponible pour vous jour et nuit durant votre séjour</p>
                     <p> Au long terme <br>
                         S’assurer de la réussite du traitement dans la durée
                     </p>
                 </section>

             </section>
         </div>
     </section>
 </body>

 </html>