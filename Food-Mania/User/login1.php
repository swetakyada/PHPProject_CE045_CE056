<?php
	if(isset($_POST['submit'])) 
     {
     	include_once 'connection.php';
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $passwd = mysqli_real_escape_string($conn,$_POST['password']);
	
        $sql = "select name,id from user where email = '$email' and password = '$passwd'";
        
        $count = 0;
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        
        if($count > 0)
        {
            session_start();
            $multi_array = array();
            while($row = mysqli_fetch_assoc($result))
            {
                $multi_array[] = $row;  
            }
            foreach($multi_array as $key)
            {
                    $_SESSION["user"]=$key['name'];
                    $_SESSION["uid"]=$key["id"];
            }
            ?>
            <script type="text/javascript">
                alert("Login successful");
                window.location="index.php";
            </script>
            <?php
        }
        else
        {
            $sql = "select username,id from admin where email = '$email' and password = '$passwd'";
            $count = 0;
            $result = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($result);
            if($count > 0)
            {
                session_start();
                $multi_array = array();
                while($row = mysqli_fetch_assoc($result))
                {
                    $multi_array[] = $row;  
                }
                foreach($multi_array as $key)
                {
                        $_SESSION["admin"]=$key['name'];
                        $_SESSION["id"]=$key["id"];
                }
                ?>
                <script type="text/javascript">
                    alert('login');
                    window.location="../admin/index.php";
                </script>
                <?php
            }
            else
            {
                ?>
                <script type="text/javascript">
                    alert('Invalid Details');
                    window.location="login.php";
                </script>
                <?php
            }
        }
    }
?>