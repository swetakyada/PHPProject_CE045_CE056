<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, intial-scale=1, user-scalable=no" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <?php 
			include 'main.php';
		?>
</head>

<body>
    <div class="cont">
        <form action="login.php" method="post" name="login.php">
            <div class="form-input">
                <input type="email" name="email" placeholder="Email" style="height: 40px; border-radius: 8px;" required><br>
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="password" style="height: 40px; border-radius: 8px;" required><br>
            </div>
            <input type="submit" name="submit" value="Login" class="btn-login">
            

        </form>
    </div>
</body>

</html>