		<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="index.php">
			Site d'information
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link" href="index.php">
							Accueil
						</a>
					</li>
					</ul>

<?php $admin=MdlAdmin::isAdmin();
if(isset($admin)): ?>
	<ul class="navbar-nav nav-item ">

     <li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
			role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	  Bienvenue <?php echo $admin->getLogin();?>
	</a>
	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	  <a class="dropdown-item" href="index.php?action=deconnecter">deconnexion</a>
	</div>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="index.php?action=affParam">Parametre</a>
    </li>
    </ul>

<?php else:
?>
				<div class="navbar-nav nav-item dropdown px-5 ">
	<a class="nav-link dropdown-toggle" href="#"
	id="navbarDropdownMenuLink" role="button" 
	data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Se connecter
		</a>

	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

	  <form action="index.php?action=connectionAdmin" method="POST" class=px-2>

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
	</div>

      </div>
      <?php endif; ?>
			</div>
		</nav>
