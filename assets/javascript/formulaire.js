setTimeout(function() {
    var form = document.createElement("form");
    form.setAttribute("id", "formulaire");
    form.innerHTML = 
    '<div class="row mb-3">' + 
        '<div class="col-12 col-md-5">' +
            '<label for="prenom" class="form-label">Prenom</label>' +
            '<input type="text" class="form-control" id="prenom">' +
        '</div>' +
        '<div class="col-12 col-md-5 offset-md-2">' +
            '<label for="nom" class="form-label">Nom</label>' +
            '<input type="text" class="form-control" id="nom">' +
        '</div>' +
    '</div>' +
 
    '<div class="row mt-3">' +
        '<div class="col-12 mb-3">' +
            '<label for="email" class="form-label">Email address</label>' +
            '<div class="input-group">' +
                '<div class="input-group-prepend">' +
                    '<span class="input-group-text" id="inputGroupPrepend3">@</span>' +
                '</div>' +
                
                '<input type="email" class="form-control" id="email" aria-describedby="emailHelp">' +
            '</div>' +
 
            '<div id="emailHelp" class="form-text">We will never share your email with anyone else.</div>' +   
        '</div>' +
                
        '<div class="col-12 mb-3">' +
            '<label for="commentaire" class="form-label">Ecriver nous</label>' +                                       
            '<textarea class="form-control" name="commentaire" id="commentaire" rows="3"></textarea>' +
        '</div>' +
        '<div class="col-12">' +
            '<button type="submit" class="btn btn-primary w-100">Envoyer</button>'+
        '</div>'+
    '</div>';
    document.body.appendChild(form);
  }, 5000);
  