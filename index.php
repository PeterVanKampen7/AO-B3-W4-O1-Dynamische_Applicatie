<?php
    require("includes/connect.php");
    $query = "SELECT id, name, attack, defense, health, avatar FROM characters ORDER BY name";
    $result = $conn->prepare($query);
    $result->execute();
    $rows = $result->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
    <header>
        <h1>Alle <?php echo count($rows); ?> characters uit de database</h1>
    </header>
    <div id="container">
    <?php
        foreach ($rows as $char) {
    ?>           
    
    <a class="item" href=<?php echo "character.php?id=".$char["id"];?>>
        <div class="left">
            <img class="avatar" src=<?php echo "images/".$char["avatar"];?>>
        </div>
        <div class="right">
            <h2><?php echo $char["name"];?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $char["health"];?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $char["attack"];?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $char["defense"];?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    
    <?php 
    }
    ?>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>