<?php 

  var_dump ($_GET);
  echo '<br>';
  $res = ($_GET['num1'] . $_GET['operation'] . $_GET['num2']);
  $res = eval($res);
  echo $res;
  echo '<br>';
  echo $_GET['num1'] . ' ' . $_GET['operation'] . ' ' . $_GET['num2'] . ' = ';
  echo '<br>';