<!-- identification page -->
<?php 
    require_once("actions/AuthAction.php");

    require_once("partials/header.php");
?>

    <form action="auth.php" method="post">
        <h1>Login</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <section>
            <button type="submit">Login</button>
            <!-- <a href="register.php">Register</a> -->
        </section>
    </form>
    <?php
	require_once("partials/footer.php");
