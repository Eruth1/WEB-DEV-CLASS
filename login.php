<?php include 'header.php'; ?>

<h2>Login</h2>
<!-- Khai báo method="post" và action="process.php" -->
<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br><br>

    <input type="hidden" name="token" value="abc123">
    <input type="submit" value="Login">
</form>

<?php include 'footer.php'; ?>