<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <link rel="stylesheet" href="assets/css/entete.css">
        <link rel="stylesheet" href="assets/css/index.css" />
        <link rel="stylesheet" href="assets/css/Commentaire.css" />
        <title>first fight</title>
    </head>
    <body>
        <!-- L'en-tete -->
        <?php
            include "assets/composants/header.html";
        ?>

        <main>
            <marquee  class="textdefilant">
                La communauté first fight est toute heureuse de vous compter parmi ses clients et vous remercie pour votre confiance !
            </marquee>

            <div class="test">commentaire</div>


            <section>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary modal-dialog modal-dialog-centered modal-dialog-scrollable" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Envoyer un commentaire
                </button>

                
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Veillez remplir ce formulaire</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form>

                        <div class="row mb-3">
                            <div class="col-12 col-md-5">
                                <label for="prenom" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="prenom">
                            </div>
                            <div class="col-12 col-md-5 offset-md-2">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="nom">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                    </div>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                </div>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>   
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label for="commentaire" class="form-label">Ecriver nous</label>                                        
                                <textarea class="form-control" name="commentaire" id="commentaire" rows="3"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100">Envoyer</button>
                            </div>
                        </div>
                      
                      </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
            </section>

        </main>
        
        <!-- Le pied de page -->
        <?php
            include "assets/composants/footer.html";
        ?>

    </body>
</html>
