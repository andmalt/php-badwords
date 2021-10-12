<?php
    $lorem="Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, nemo. Aspernatur, architecto odio? 
    Inventore maxime deserunt laborum consequatur tempora voluptates, magni nesciunt laudantium mollitia a,
     labore ea aliquid eligendi in?";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lorem</h1>
    <p>
        <?php 
            echo $lorem;
        ?>
    </p>

    <h5>
        length string is <?php echo strlen($lorem); ?> .
    </h5>

    <h3>
        <?php
            echo $_GET["key"]
        ?>
    </h3>



</body>
</html>