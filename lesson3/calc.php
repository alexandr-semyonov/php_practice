<?php 

  
  echo '<br>';

  switch ($_GET['operation']) {
    case '+':
       $res = ($_GET['num1'] + $_GET['num2']);
      break;
      case '-':
      $res = ($_GET['num1'] - $_GET['num2']);
      break;
  }

  echo $_GET['num1'] . ' ' . $_GET['operation'] . ' ' . $_GET['num2'] . ' = ' . $res;