<?php

function readFromData(){
  $pathToData = __DIR__ . '/data.txt';
  $str = file_get_contents($pathToData);
  $arrOfstr = explode('ENDOF', $str);
  array_pop($arrOfstr);
  var_dump ($arrOfstr);
}

readFromData();

