<?php
    session_start();
    if(!isset($_SESSION['user']))
	{
		?>
		<script type="text/javascript">
			alert("Please login");
			window.location="login.php";
		</script>
		<?php
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, intial-scale=1, user-scalable=no" />
        <title>select quantity</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body>
        <?php 
			include 'main.php';
		?>
        <div class="cont" style="opacity: 0.9;padding-top: 0px;">
            <form action="add_to_cart.php" method="post" name="login.php">
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" >
                <div class="form-input">
                    <div class="value-button" style="cursor: pointer;" id="decrease" onclick="decreaseValue()" value="Decrease Value"><h1>-</h1></div>
                    <input type="number" name="quantity" style="height: 50px;border-radius: 15px;" id="qty" value="1" />
                    <div class="value-button" id="increase" style="cursor: pointer;" onclick="increaseValue()" value="Increase Value" ><h1>+</h1></div>
                </div>
                <br>
                <input type="submit" name="submit" value="Done" class="btn-login">
            </form>
        </div>
        <script>
            function increaseValue() {
                var value = parseInt(document.getElementById('qty').value, 10);
                value = isNaN(value) ? 0 : value;
                value++;
                document.getElementById('qty').value = value;
            }

            function decreaseValue() {
                var value = parseInt(document.getElementById('qty').value, 10);
                value = isNaN(value) ? 0 : value;
                value < 1 ? value = 1 : '';
                value--;
                document.getElementById('qty').value = value;
            }
        </script>
    </body>
</html>