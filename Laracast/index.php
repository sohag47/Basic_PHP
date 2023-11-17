<?php 
    $name = "PHP";
    $fruits = [
        "Mango",
        "Pineapple",
        "JackFruit"
    ];
    $user = [
        "name" => "Minhazul Islam Sohag",
        "address" => "Gazipur"
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php 
        if ($name === "PHP") {
            echo "Hello, Welcome $name";
        }
        ?>
    </h1>
    <section id="horrible">
    <ul>
        <?php
            foreach($fruits as $fruit){
                echo "<li> {$fruit}&trade;</li>";
            }
        
        ?>
    </ul>
    </section>
    
    <section id="alternative loops">
        <ul>
            <?php foreach($fruits as $fruit): ?>
                <li><?= $fruit ?>&trade;</li>
            <?php endforeach ?>
        </ul>
    </section>

    <section id="objects">
        <?= $user["name"], $user["address"] ?>
    </section>
</body>
</html>