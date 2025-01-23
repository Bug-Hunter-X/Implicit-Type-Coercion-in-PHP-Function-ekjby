function my_function($param) {
  if ($param === null) {
    // Handle null input
    return 0; 
  } else if (is_array($param)) {
    // Handle array input
    return count($param);
  } else if (is_string($param)) {
    // Handle string input
    return strlen($param);
  }
  return $param; //this line can be reached when the type of the param is not defined
}