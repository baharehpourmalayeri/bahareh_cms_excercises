<?php

function is_prime($number){
  if($number <= 1){
    return false;
  }

  for ($i = 2; $i < $number; $i++){
    if($number % $i == 0){
      return false;
    }
  }
  return true;
}
$number = 7;
echo is_prime($number) ? "$number is a prime number." : "$number is not a prime number."
?>
