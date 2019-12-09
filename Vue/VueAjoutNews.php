
<form action="index.php?action=ajouter" method="post">
    <div class="form-group">
            <label for="guid">GUID</label>
            <input type="text" class="form-control" id="guid" name="guid">
        </div>
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" >
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea rows="3" class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
    <div class="form-group">
        <label for="lien">Lien</label>
        <input type="url" class="form-control" id="lien" name="url" >
    </div>
        <div class="form-group">
            <label for="categorie">Categorie</label>
            <input type="text" class="form-control" id="categorie" name="categorie" >
        </div>
        <div class="form-group">
            <label for="source">Source</label>
            <input type="text" class="form-control" id="source" name="source" >
        </div>

        <button type="submit" class="btn btn-primary">Valider</button>
</form>
