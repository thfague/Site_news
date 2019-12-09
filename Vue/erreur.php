
<?php
include('header.html');
include ('navbar.php');
?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Erreur</h1>
        <p class="lead">Oups ...</p>
    </div>
</div>
<?php
if (isset($dVueErreur)) {
foreach ($dVueErreur as $value): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $value; ?>
    </div>
<?php endforeach;
}
?>

<?php
include('footer.html');
?>
