<?php 
    session_start();
    include 'main.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Categories</title>
        <style type="text/css">
            td{
                text-align: center;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <center>
            <h1>Categories</h1>
                <a href="add_category.php">Add Category</a>
            <?php
                include 'connection.php';
                if(isset($_SESSION['admin']))
                { 
                    $result = mysqli_query($conn, "select * from category");
                    $count = mysqli_num_rows($result);
                    echo "<table align: 'center'; border=1px>";
                    echo "<tr>";
                    echo "<th>Id</th>";
                    echo "<th>Category name</th>";
                    echo "<th>Delete</th>";
                    echo "</tr>";
                    echo "</table>";
                    echo "<table align: 'center'; border=1px>";
                    if($count > 0)
                    {
                        while ($row = mysqli_fetch_array($result)) 
                        {
                            echo "<tr>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["name"]; echo "</td>";
                            echo "<td>"; ?><a href="delete_category.php?id=<?php echo $row['id'];?>">Delete</a><?php echo "</td>"; 
                            echo "<tr>";
                        }
                    }
                    else 
                    {
                        echo "<tr><th colspan='2'><h2>No records found.</h2></th></tr>";
                    }
                    echo "</table>";
                }
            ?>
        </center>
    </body>
</html>