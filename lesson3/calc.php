<?php 

  var_dump ($_GET);
  echo '<br>';
  echo $res =  implode($_GET);
  echo '<br>';
  echo $_GET['num1'] . ' ' . $_GET['operation'] . ' ' . $_GET['num2'] . ' = ';
  echo '<br>';