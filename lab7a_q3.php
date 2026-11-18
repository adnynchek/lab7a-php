
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q3</title>
</head>
<body>

    <?php
    //function to calculate 
    function calculateArea($width, $height) {
         $area = $width * $height;
         return $area;
    }

    // Call the function
    $result = calculateArea(4, 2);

    ?>

    <h2>Calculate Rectangle Area</h2>

    <p>
        The area of a rectangle with a width of 4
        and 2 is <?php echo $result; ?>
    </p>

</body>
</html>
