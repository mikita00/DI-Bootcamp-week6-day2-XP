<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ExerciceXP</title>
  </head>
  <body>
      <h2 style="color:red; font-weight:bold; text-decoration:underline;"> ExerciceXP 3</h2>

      <h3>Checking student's grade based on the marks percentage</h3>

      <span>

     <?php
    /**
     * Instructions
     * Write a program to check student grade based on the marks using if-else statement.
     *            Conditions:
     * If marks are 60% or more, grade will be First Division.
     * If marks between 45% to 59%, grade will be Second Division.
     * If marks between 33% to 44%, grade will be Third Division.
     * If marks are less than 33%, student will be Fail.

     */
    if (isset($_POST['m_percent'])){
      $mark_P = $_POST['m_percent'];
      if(!empty($mark_P)){
        if ($mark_P >= 60){

          echo "The student's marks are ".$mark_P. " % then grade will be First Division";

        }elseif(($mark_P>=45) && ($mark_P<=59)){

          echo "The student's marks are ".$mark_P." % then grade will be Second Division";

        }elseif(($mark_P>=33) && ($mark_P<=44)){

          echo "The student's marks are ".$mark_P. " % then grade will be Third Division";

        }else{
          echo "The student's marks are ".$mark_P. " % then the student will be fail";
        }
      }else{
        echo "Please enter a number";
      }
  }
  ?>
    
    </span>

    <br> <br>

    <form  action="index.php" method="post">
      <input type="number" name="m_percent" >
      <input type="submit" value="Submit" name="submit">
      </form>

  </body>
</html>