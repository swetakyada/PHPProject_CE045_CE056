<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, intial-scale=1, user-scalable=no" />
    <title>FOOD CORNER</title>
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
    <nav style="background-color: white;">
        <div class="toggle">
            <i class="fa fa-bars menu" aria-hidden="true"></i>
        </div>
        <ul>
            <li><a href="index.php" style="font-family: 'Dancing Script', cursive;font-size: 35px;color: #49111c;">Food Mania</a></li>
            <li><a href="index.php">HOME</a></li>
            <li><a href="non-veg.php">NON-VEG</a></li>
            <li><a href="veg.php">VEG</a></li>
            <li><a href="wine.php">WINE</a></li>

            <?php 
			if(isset($_SESSION['user']))
			{
			?>
            <li><a href="orders.php">ORDER_LIST</a></li>
            <li><a href="table_booking.php">T_Booking</a></li>

            <li style="float:right;"><a href="logout.php">LogOut</a></li>
            <li style="float:right;">
                <a href="profile.php">
                    <?php echo $_SESSION['user'];?> </a>
            </li>
            <?php }else {?>
            <li><a href="about.php">About us</a></li>
            <li style="float:right;"><a href="login1.php">Login</a></li>
            <li style="float:right;"><a href="sigup1.php">SignUp</a></li>
            <?php } ?>

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