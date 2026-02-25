<?php
require_once dirname(__DIR__, 2) . '/data/connect.php';
$conn = db_connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First 5 Cities</title>
</head>
<body>

<section>
    <h2>First 5 cities</h2>

    <?php 
    $sql = "SELECT city_name, province FROM cities LIMIT 5";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            // var_dump($row);
            $city_name=$row["city_name"];
            $province=$row["province"];

            echo "<p>$city_name,$province";
        }
    }
    ?>

</section>

<section>
    <h2>Alberta Cities</h2>
    <?php 
    $ab_cities_sql="SELECT city_name FROM cities WHERE province = 'AB' ";
    $ab_cities_sql=mysqli_query($conn,$ab_cities_sql);
    if(mysqli_num_rows($ab_cities_result) > 0){
        echo "<ol>";
           while($ab_cities_row=mysqli_fetch_assoc($ab_cities_result));{
              echo "<li> ";
              echo  $ab_cities_row["city_name"];
              echo "</li>"  ;
           echo "</ol>";
           }

    }else{
        echo "<p> Unable to get the result </p>";
    }
    ?>
</section>

</body>
</html>