<?php require('header.html');
require('navbar.php');
?>
<form action="index.php?action=connectionAdmin" method="POST">

    <div class="form-group">
        <label for="user">login</label> <br/>
        <input type="text" class="form-control" id="user" name="user" placeholder="login">
    </div>
    <div class="form-group">
        <label for="password">mot de passe</label><br/>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
</body>
</html>

<?php require('footer.html');
?>