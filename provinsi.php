<?php
    include 'connect.php';
    $query  = mysqli_query($connect, "SELECT * FROM provinces");
    $num    = mysqli_num_rows($query);
?>

<html>
    <head>
        <title>Provinsi</title>
    </head>
    <body>
        <h1>Provinsi di Indonesia</h1>
        <?php
            if($num>0){
                while($row = mysqli_fetch_assoc($query)){?>
                <a href="kota.php?id=<?php echo $row['id']?>&name=<?php echo $row['name']?>"><?php echo json_encode($row);?></a>
                <br>
        <?php
            }
            }
        ?>
    </body>
</html>