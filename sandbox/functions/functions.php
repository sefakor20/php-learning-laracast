<?php

// dump data on to the screen
function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}


// night club function checker
function nightClubChecker($age){
  if($age <= 15) {
    echo 'You are not old enough';
  } else {
    echo 'Come on in';
  }
}
