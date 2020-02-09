
<?php 
  function Search($value, $array) 
  { 
      return(array_search($value, $array,false)); 
  } 
  $array = array(45, 5, 1, 22, 22, 10, 10); 
  $value = "5"; 
  print_r(Search($value, $array)); 
    
  ?> 