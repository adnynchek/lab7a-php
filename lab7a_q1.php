<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q1</title>
</head>
<body>
    <?php
      $name = "Adam bin Abu";
      $matricNo = "Your Matric Number";
      $course = "Bachelor of Computer Science";
      $year = "Year 2";
      $address = "Your Address";
    ?>
    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>

        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matricNo"; ?></td>
        </tr>

        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>

        <tr>
            <td>Year of Study</td>
            <td><?php echo "$year"; ?></td>
        </tr>

        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>
</html>