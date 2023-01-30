<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>The food of the world</title>
    <link rel="stylesheet" type="text/css" href="style.css" />

</head>

<header>
    <nav>
        <a href="english_v.php">english</a>
        <a href="german_v.php">german</a>
    </nav>
</header>

<body>
    <br><br>
    <h1><a href="main.html">THE FOOD OF THE WORLD</a></h1><br><br>
    <?php
    require_once 'vendor/autoload.php';
    $faker = Faker\Factory::create();
    $provider = $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
    ?>
    <p>
    <?php
    for ($i = 0; $i < 20; $i++) {
        echo "<h2>" . $faker->foodName() . "</h2>";
        echo "Ingridients: " . $faker->dairyName() . ", " . $faker->vegetableName() . ", " . $faker->meatName() . "<br><br>";
        echo $faker->text(200);
        echo "<br><br><br>";   
    }
    ?>
    </p>
    

</body>

</html>