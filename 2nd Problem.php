<html>
  <head>
    <title>problem1</title>
  </head>
  <body>
    <?php
    $marks = 25;

    if ($marks >= 90)
     {
        echo "A+";
     }
    else if (($marks >=80) && ($marks <90))
      {
         echo "A";
      }
    else if (($marks >=70) && ($marks <80))
      {
         echo "B";
      }
    else if ($marks >=60 && $marks <70)
      {
         echo "C";
      }

    else echo "F";

     ?>

  </body>
</html>