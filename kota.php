<?php
    include 'connect.php';
    $id     = $_GET['id'];
    $name   = $_GET['name'];
    $name   = ucwords(strtolower($name));
    $query  = mysqli_query($connect, "SELECT * FROM regencies WHERE province_id = '$id'");
    $num    = mysqli_num_rows($query);
?>
<html>
    <head>
        <title>Kota</title>
    </head>
    <body>
        <h1>Kota di <?php echo $name?></h1>
        <?php
            if($num>0){
                while($row = mysqli_fetch_assoc($query)){?>
                <a href="kecamatan.php?id=<?php echo $row['id']?>&name=<?php echo $row['name']?>"><?php echo json_encode($row);?></a>
                <br>
        <?php
            }
            }
        ?>
    </body>
</html>
