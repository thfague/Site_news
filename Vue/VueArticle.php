
	<?php
    require("header.html");
    require("navbar.php"); ?>
        <?php
    $mdl = new Modele();
    $nb_articles_par_page = $mdl->getNbNewsPage();
    $total = $mdl->getNBNews();
    $nbpages = ceil($total/$nb_articles_par_page);
    $page = (isset($_GET['p']))? abs(intval($_GET['p'])): 1;
    $page = ($page == 0)? 1: $page;
    $premierArticle = ($page-1)*$nb_articles_par_page;
    $nbArticle=$nb_articles_par_page;
    /****************************************************************/

if($page ==1): ?>

        <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Bienvenue !</h1>
            <p class="lead"> Ce site permet de consulter des articles en direct !</p>
        </div>
    </div>
    <?php endif;
    if(!empty($articles)) {
                    echo "<div class=\"card-columns\">";
        foreach ($articles as $article): ?>


                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><a href='<?php echo $article->getLien();?>'> <?php echo $article->getTitre(); ?> </a></h3>
                        <p class="card-text"><?php echo $article->getDescription(); ?></p>
                        <p class="card-text">
                            <span class="badge badge-secondary mx-1"><?php echo $article->getSource();?></span>
                            <span class="badge badge-light"><?php echo $article->getDtPublication();?></span>
                            </small></p>
                    </div>
                </div>





<!--
            <div class="jumbotron mx-4">
                <h2 class="display-6"><a href='<?php //echo $article->getLien();?>'> <?php //echo $article->getTitre(); ?> </a>


                </h2>
                <p class="lead display-5">
                <span class="badge badge-secondary mx-1"><?php //echo $article->getSource();?></span>
                <span class="badge badge-light"><?php //echo $article->getDtPublication();?></span>
                </p>
                <hr class="my-2">
                <p class="lead"><?php //echo $article->getDescription(); ?></p>
            </div>


            <hr class="my-2">-->

        <?php endforeach; ?>
        </div>
    </body>
        </html>
        <footer>
            <?php
            echo '<p align="center">Page : ';
            for($i=1; $i<=$nbpages; $i++) {
                if($i==$page) {
                    echo ' ['.$i.'] ';
                }
                else {
                    echo ' <a href="?action=affP&p='.$i.'">'.$i.'</a> ';
                }
            }
            echo '</p>';
            ?>
        </footer>


        <?php
    }
    else {
        echo "<h1> Pas de News </h1></body></html>";
    }
    ?>


