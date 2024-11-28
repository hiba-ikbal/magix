<!-- identification page -->
<?php
	require_once("actions/AuthAction.php");

	$action = new AuthAction();
	$data = $action->execute();

	$pageTitle = "Authentification";
	require_once("partials/header.php");
?>
<body class="auth-page">
<div id="hogwarts-background">
<div id="form-wrapper">
<form action="auth.php" method="post">
<div class="form-label">
			<label for="username">Your wizzard name: </label>
		</div>
		<div class="form-input">
			<input type="text" name="username" required />
		</div>
		<div class="form-label">
			<label for="password">Alohomora: </label>
		</div>
		<div class="form-input">
			<input type="password" name="pwd" required />
		</div>
		<div class="form-separator"></div>

<div class="form-label">
	&nbsp;
</div>

<div class="form-input">
			<button type="submit">Connexion</button>
		</div>
		
		<div class="form-separator"></div>
	</form>
</div>
</div>


<?php
	require_once("partials/footer.php");
//Make sure the successMessage and errorMessage keys in the $data array are set correctly in your AuthAction.
