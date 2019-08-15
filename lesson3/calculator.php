<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculator</title>
</head>
<body>
  <form action="" method="get">
    Num1<input type="text" name="num1" value="
      <?php
        if (isset($_GET['num1'])){
          echo $_GET['num1'];
        }
      ?>
    ">
    <br>
    <select name ="operation">
      <option value="+">+</option>
      <option value="-">-</option>
    </select>
    <br>
    Num2<input type="text" name="num2" value="
      <?php
        if (isset($_GET['num2'])){
          echo $_GET['num2'];
        }
      ?>
    ">
    <br>
    <button type="submit">Done!</button>
    <input type="text" name="res" disabled value="
    <?php 
      if (isset($_GET['operation'])){
      switch ($_GET['operation']) {
        case '+':
          $res = ($_GET['num1'] + $_GET['num2']);
          break;
          case '-':
          $res = ($_GET['num1'] - $_GET['num2']);
          break;
        }
      }

      if (isset($res)){
          echo $res;
      } else {
        echo 'Enter number and press"Done"';
      }

    ?>">
  </form>
  <hr>
      <?php
        var_dump($_GET);
      ?>      
</body>
</html>