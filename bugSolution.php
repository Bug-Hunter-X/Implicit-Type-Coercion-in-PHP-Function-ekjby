function my_function($param) {
  if ($param === null) {
    return 0;
  } else if (is_array($param)) {
    return count($param);
  } else if (is_string($param)) {
    return strlen($param);
  } else if (is_numeric($param)){
    return $param; 
  } else {
    throw new InvalidArgumentException('Invalid parameter type');
  }
}
// Example usage
echo my_function(null) . '\n'; // Output: 0
echo my_function([1, 2, 3]) . '\n'; // Output: 3
echo my_function('hello') . '\n'; // Output: 5
echo my_function(10) . '\n'; //Output: 10
try {
  echo my_function(true) . '\n'; // Throws exception
} catch (InvalidArgumentException $e) {
  echo 'Error: ' . $e->getMessage() . '\n'; // Output: Error: Invalid parameter type
} 