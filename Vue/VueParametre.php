<?php
require("header.html");
/**
 * Created by PhpStorm.
 * User: romondiere
 * Date: 24/12/18
 * Time: 11:17
 */
require("navbar.php");
$mdl = new Modele();
?>
<div class="container-fluid ">
    <div class="row">
        <div class="col-sm-2">
        <nav class=" position-fixed navbar navbar-light bg-light flex-column">
            <a class="navbar-brand" href="#">Paramètres</a>
            <nav class="nav nav-pills flex-column">
                <a class="nav-link" href="#nbNewsPart" > Nombre de news par page</a>
                <a class="nav-link" href="#newsPart"> News</a>
            <nav class="nav nav-pills flex-column">
                <a class="nav-link ml-3 my-1" href="#addNewsPart"> Ajout news</a>
            </nav>
                <a class="nav-link" href="#RSS">RSS</a>
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link ml-3 my-1" href="#ajoutRss"> Ajout RSS</a>
                    <a class="nav-link ml-3 my-1" href="#suppressionRss"> Supprimer RSS</a>
                </nav>
            </nav>
</nav>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-md-8 my-4">
            <h2 class="mx-auto" style="width: 200px;">Paramètres :</h2>

            <div id="nbNewsPart" class="my-4">

            <h3>Nombre de news Par Page</h3>
             <form class="mt-4 form-inline" action="index.php?action=updateNbNews" method="post" >
                 <div class="form-group mx-sm-3 mb-2 ">
                     <label for="NbNews">Nombre de News Par Page</label>
                     <input type="number" class="form-control"  id="NbNews" value="<?php
                     echo $mdl->getNbNewsPage();
                     ?>" name="NbNews">
                 </div>
                     <button type="submit" class="btn btn-primary mb-2">Valider</button>
             </form>
            </div>
            <div id="newsPart">
            <h3>News</h3>

            <h4 id="addNewsPart">Ajout News</h4>
            <?php require("Vue/VueAjoutNews.php");?>
            </div>
            <h3 id="RSS">RSS</h3>
            <h4 id="ajoutRss">Ajout RSS</h4>
            <form action="index.php?action=addRSS" method="post">
                <form>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="form-group">
                        <label for="lien">URL</label>
                        <input type="url" class="form-control" id="lien" name="lien" >
                    </div>

                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </form>


            <h4 id="suppressionRss">Suppression RSS</h4>
            <form action="index.php?action=deleteRss" method="post">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Sup.</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Lien</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $mdl = new Modele();
                    $rsss=$mdl->getRsss();
                    foreach ($rsss as $rss):
                        ?>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline" >
                                <input name="RssToDelete[]" type="checkbox" value="<?php echo $rss->getLien(); ?>" class="form-check-input" />
                            </div>
                        </td>
                        <td> <?php echo $rss->getNom(); ?> </td>
                        <td><?php echo $rss->getLien(); ?></td>
                    </tr>

                    <?php endforeach;

                    ?>

                    </tbody>
                </table>
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>

        </div>
    </div>
</div>
</body>

</html>
