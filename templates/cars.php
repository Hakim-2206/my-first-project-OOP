<!--Creation du formulaire pour ajouter un véhicule-->

<h1>CARS</h1>

<form action="" method="post" enctype="multipart/form-data">
<div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Marque du vehicule</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name='marque' placeholder="Nom de la marque">
    </div>
<div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Modèle du vehicule</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name='model' placeholder="Modèle du vehicule">
    </div>
<div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Année</label>
        <input type="number" maxlength="4" class="form-control" id="exampleFormControlInput1" name='year' placeholder="YYYY">
    </div>
<div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Moteur</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name='engine' placeholder="Type de moteur">
    </div>
<div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre de places</label>
        <input type="number" min="1" max="9" class="form-control" id="exampleFormControlInput1" name='places' placeholder="Nombre de places">
    </div>   
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Commentaires</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name='comms' rows="3"></textarea>
    </div>
<div class="mb-3">
        <label for="formFile" class="form-label">Choisir une photo du vehicule (format : png, jpeg, jpg)</label>
        <input class="form-control" type="file" name='picture' id="formFile">
    </div>


        <button id="cars" name="cars">Ajouter ce vehicule</button>
    </div>

</form>