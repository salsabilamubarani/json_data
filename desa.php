<?php
    include 'connect.php';
    $id     = $_GET['id'];
    $name   = $_GET['name'];
    $name   = ucwords(strtolower($name));
    $query  = mysqli_query($connect, "SELECT * FROM villages WHERE district_id = '$id'");
    $num    = mysqli_num_rows($query);
?>
<html>
    <head>
        <title>Desa</title>
    </head>
    <body>
        <h1>Desa di <?php echo $name?></h1>
        <?php
            if($num>0){
                while($row = mysqli_fetch_assoc($query)){?>
                <span><?php echo json_encode($row);?></span>
                <br>
        <?php
            }
            }
        ?>
    </body>
</html>