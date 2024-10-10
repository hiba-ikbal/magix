<!-- identification page -->
<?php
	require_once("actions/AuthAction.php");

	$action = new AuthAction();
	$data = $action->execute();

	$pageTitle = "Authentification";
	require_once("partials/header.php");
?>
<div class="login-form-frame">
	<form action="auth.php" method="post">
    <?php
                if (!empty($data["successMessage"])) {
                    ?>
                    <div class="success-message"><?= $data["successMessage"] ?> YEEEEEY</div>
                    <?php
                }
                if (!empty($data["errorMessage"])) {
                    ?>
                    <div class="error-message"><?= $data["errorMessage"] ?>OOOOOPS</div>
                    <?php
                }
            ?>
		<div class="form-label">
			<label for="username">Nom d'usager : </label>
		</div>
		<div class="form-input">
			<input type="text" name="username" required />
		</div>
		<div class="form-separator"></div>

		<div class="form-label">
			<label for="password">Mot de passe : </label>
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
<?php
	require_once("partials/footer.php");
