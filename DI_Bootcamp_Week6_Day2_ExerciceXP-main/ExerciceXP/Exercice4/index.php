<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ExerciceXP</title>
  </head>
  <body>
      <h2 style="color:red; font-weight:bold; text-decoration:underline;"> ExerciceXP 4</h2>

      <h3>Showing week's days based on number</h3>

      <span>

     <?php
    /**
     * Write a program to show day of the week (for example: Monday) based on numbers using switch/case statements
     * Conditions:
     * can pass 1 to 7 number in switch
     * Day 1 will be considered as Monday
     * If number is not between 1 to 7, show invalid number in default

     */
    if (isset($_POST['number'])){
      $weekNumber = $_POST['number'];
      if (!empty($weekNumber)){
        switch($weekNumber){
          case $weekNumber == 1:
          echo "The day ".$weekNumber." is Monday";
          break;

          case $weekNumber == 2:
          echo "The day ".$weekNumber." is Tuesday";
          break;

          case $weekNumber == 3:
          echo "The day ".$weekNumber." is Wednesday";
          break;

          case $weekNumber == 4:
          echo "The day ".$weekNumber." is Thursday";
          break;

          case $weekNumber == 5:
          echo "The day ".$weekNumber." is Friday";
          break;

          case $weekNumber == 6:
          echo "The day ".$weekNumber." is Saturday";
          break;

          case $weekNumber == 7:
          echo "The day ".$weekNumber." is Sunday";
          break;
          default:
          echo "Please enter a number corresponding to week's days";
        }
      }
    }
   
  ?>
    
    </span>

    <br> <br>

    <form  action="index.php" method="post">
      <input type="number" name="number" >
      <input type="submit" value="Submit" name="submit">
      </form>

  </body>
</html>