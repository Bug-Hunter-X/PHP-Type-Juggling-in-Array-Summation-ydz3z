```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) { //Check if it's a number
      $sum += floatval($number); //convert to float to handle potential decimals
    } else {
        //Handle non-numeric values appropriately
        //You could throw an exception, use a default value, or skip it.
        //For this example, we'll skip non-numeric values
        //trigger_error("Non-numeric value encountered in array."); 
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Correct output
```