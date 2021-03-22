<?php
    require("includes/connect.php");
    $query = "SELECT * FROM characters WHERE id=".$_GET["id"];
    $result = $conn->prepare($query);
    $result->execute();
    $row = $result->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - <?php echo $row["name"];?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?php echo $row["name"];?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src=<?php echo "images/".$row["avatar"];?>>
            <div class="stats" style="background-color: <?php echo $row["color"];?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $row["health"];?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $row["attack"];?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $row["defense"];?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?php echo $row["weapon"];?></li>
                    <li><b>Armor</b>: <?php echo $row["armor"];?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
            <?php echo $row["bio"];?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<?php include("includes/footer.php");?>
</body>
</html>