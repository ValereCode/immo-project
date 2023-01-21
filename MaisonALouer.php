<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
      
        <link rel="stylesheet" href="assets/css/entete.css">
      
        <link rel="stylesheet" href="assets/css/general.css"/>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
         <!-- Font Awesome -->
         <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>

        <title>first fight</title>
    </head>
    <body>
        <!-- L'en-tete -->
        <header class="my-4">
            <?php
                include "assets/composants/header.html";
            ?>
        </header>
         
        <main>
          <div class="test">maison à louer</div>
            <section>
                <div class="container-fluid">
                    <marquee  class="textdefilant mt-1">
                        La communauté first fight est toute heureuse de vous compter parmi ses clients et vous remercie pour votre confiance !
                    </marquee>
                </div>
            </section>
            
            <section>
                <div class="container py-4">
                    <div class="presentation row">
                        <div class="titrepresentation col-12 col-md-3 my-2"><strong>Présentation <br> de first fight</strong></div>
                    
                        <div class="motpresentation col-12 col-md-9 my-2">
                            Tout le monde est amené à se dire au moins une fois dans sa vie : « Je n'y arriverai jamais ! ».
                            Ce manque de confiance en soi peut malheureusement être un véritable frein dans votre travail.
                            En effet, atteindre vos objectifs vous demandera nécessairement de sortir de votre zone de confort. 
                            Or, pour cela, il faudra que vous soyez prêt à affronter vos peurs et vos doutes. Grâce à ces citations, 
                            vous resterez motiver. <br>« Un jour, tu te réveilleras et tu n'auras plus le temps de faire ce que tu 
                            voulais faire. Fais-le donc maintenant.», Paulo Coelho..                      
                        </div>
        
                    </div>
                </div>
            </section>
          

            <section>
                <div class="container">
                    <div class="row g-4">
                    <?php       
                        $servername = "localhost";
                        $username = "valere";
                        $password = "azerty12";
                        $dbname = "immo-project";
                        
                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            // set the PDO error mode to exception
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        }
                        catch(PDOException $e)
                        {
                            echo "Connection failed: " . $e->getMessage();
                        }
                        
                    ?>
                    <?php
                        $recipesStatement = $conn->prepare('SELECT * FROM maisonALouer');
                    ?>
                    <?php
                        $recipesStatement->execute();
                        $result = $recipesStatement->fetchAll();
            
                        foreach ($result as $maison) {
                            echo '<div class="col-12 col-sm-6 col-md-4 col-xl-3">';
                            echo '<div class="card my-4 shadow p-3 mb-5 bg-body rounded" style="width: 18rem;"">';
                            echo '<img src="' . $maison['photo'] . '" class="card-img-top imageterrain" style="height: 15rem;" alt="...">';
                            echo '<div class="card-body">';
                            echo '<h5 class="card-title">' . $maison['titre'] . '</h5>';
                            echo '<p class="card-text"><strong>Numéro:</strong> ' . $maison['Numéro'] . '</p>';
                            echo '<p class="card-text"><strong>Surface:</strong> ' . $maison['Surface'] . ' </p>';
                            echo '<p class="card-text"> <strong>Lieu:</strong> ' . $maison['Lieux'] . '</p>';
                            echo '<p class="card-text"> <strong> Prix:</strong> ' . $maison['Prix'] . ' fcfa</p>';
                            echo '<a href="#" class="btn btn-primary mt-2" type="button">En savoir plus</a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    ?>
                    </div>
                </div>
                
            </section>      


        </main>

        <!-- Le pied de page -->
        <?php
            include "assets/composants/footer.html";
        ?>
        
        <!-- Bootstrap JS bundle -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>
