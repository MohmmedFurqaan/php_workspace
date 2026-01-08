<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practical - 5</title>
</head>
<body>
    
    <?php
        echo "<h2>for Loop</h2>";

        $n1 = 0;
        $n2 = 1;

        echo "Fibbnocci Series<br>";
        echo $n1." , ".$n2;
        

        for ($i=2; $i <= 10 ; $i++) { 
            $n3 = $n1 + $n2;
            $n1 = $n2;
            $n2 = $n3;
            echo ", ".$n3;
        }

       echo "<h2>While Loop<br></h2>";
       
       echo"Factorial Number<br>";

       $nums = 5;
       $fact = 1;
       $i = 1;
    
       while ($i <= $nums) {
          $fact = $fact * $i;
          $i++;
       }

       echo "Factorial of ".$nums." is ".$fact;

       echo "<h2>Do While Loop</h2>";

       $num = array(1, 2, 3, 5, 6, 7, 8, 9, 10);

       $i = 0;

       do {
        echo $num[$i]." ";
        $i++;
       } while ($i < count($num));


       echo '<h2>foreach</h2>';
       
       foreach ($num as $i) {
        echo $i." ";
       }


       
    ?>
</body>
</html>