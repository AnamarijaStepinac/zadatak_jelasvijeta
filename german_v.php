<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Die Weltspeisen</title>
    <link rel="stylesheet" type="text/css" href="style.css" />

</head>

<header>
    <nav>
        <a href="english_v.php">englisch</a>
        <a href="german_v.php">deutsch</a>
    </nav>
</header>

<body>
    <br><br>
    <h1><a href="main.html">DIE WELTSPEISEN</a></h1><br><br>
    <?php
    require_once 'vendor/autoload.php';
    $faker = Faker\Factory::create();
    $provider = $faker->addProvider(new \FakerRestaurant\Provider\de_DE\Restaurant($faker));
    ?>
    <p>
    <?php
    for ($i = 0; $i < 20; $i++) {
        echo "<h2>" . $faker->foodName() . "</h2>";
        echo "Zutaten: " . $faker->dairyName() . ", " . $faker->vegetableName() . ", " . $faker->meatName() . "<br><br>";
        echo $faker->text(200);
        echo "<br><br><br>";   
    }
    ?>
    </p>

</body>

</html>