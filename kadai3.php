<?php
  function sum_array($arr){
    $total = 1;
    foreach ($arr as $num) {
      $total *= $num;
    }
    return $total;
  }
  echo sum_array(array(1,3,5,7,9));
?>
