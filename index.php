<?php

$name = "Glenn D. Nisperos";
$year = 3;
$course = "BSIT-Web Technology";
$hobbies = array("Drawing", "Reading", "Cooking");
$motto = "<b>\"Nothing will make you feel better except doing the work.<b>\""

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>First XAMPP Web App</title>
</head>

<body>
    <section class="head">
        <div id="name">
            <?php
            echo "I am ", $name;
            ?>
        </div>
        <div id="year">
            <?php
            echo $year,"rd Year";
            ?>
        </div>

        <div id="course">
            <?php
            echo $course;
            ?>
        </div>

    </section>

    <section class="hobbies">
        <div id="hobbies">
            <?php
            echo "My Hobbies"
            ?>
        </div>
        <div id="list-container">
            <ul id="list-hobbies">
                <?php foreach ($hobbies as $hobbies) { ?>
                    <li id="bullet"><?= $hobbies ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="imgs">
            <img src="imgs/drawing.jpg" alt="drawing">
            <img src="imgs/reading.jpg" alt="reading">
            <img src="imgs/cooking.jpg" alt="cooking">
        </div>
    </section>

    <section class="motto">
        <div id="motto">
            <?php
            echo $motto
            ?>
        </div>
    </section>

</body>

</html>