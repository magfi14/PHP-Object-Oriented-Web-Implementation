<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Speed to Height Ratio Receiver</title>
    <link rel="stylesheet" href="../Stylesheets/styles.css" />
</head>

<body>
    <h1>Speed to Height Ratio Receiver</h1>
    <p>
        <?php
        include '../Objects/speedheightratio.php';
        $speed = $_POST["speed"];
        $height = $_POST["height"];
        $ratio = new SpeedHeightRatio($speed, $height);
        $compute = $ratio->computeRatio();
        echo "The speed to height ratio is $compute:1";
        ?>
    </p>
    <p>The lift traveled a speed of <b><?php echo $speed ?></b> meters per second in a building that was <b><?php echo $height ?></b> meters tall.</p>
</body>

</html>