<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, intial-scale=1, user-scalable=no" />
        <title>Food Mania</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/backgroundimage.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="page-bg"></div>
        <nav style="background-color: white;opacity: 0.8;">
            <div class="toggle">
                <i class="fa fa-bars menu" aria-hidden="true"></i>
            </div>
            <ul>
                <li><a href="index.php" style="font-family: 'Dancing Script', cursive;font-size: 35px;color: #49111c;">Food Mania</a></li>
                <?php 
                    if(isset($_SESSION['user']))
                    {
                        ?>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="orders.php">Orders</a></li>
                        <li style="float:right;"><a href="logout.php">Logout</a></li>
                        <li style="float:right;"><a href="profile.php">Welcome <?php echo $_SESSION['user'];?> </a></li>
                        <?php 
                    }
                    else 
                    {
                        ?>
                        <li style="float:right;"><a href="login.php">Login</a></li>
                        <li style="float:right;"><a href="signup.php">SignUp</a></li>
                        <?php 
                    } 
                ?>
            </ul>
            <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.menu').click(function() {
                        $('ul').toggleClass('active');
                    })
                })
            </script>
        </nav>
    </body>
</html>