<?php


$string1 = "hello";
$string2 = "Hello";

if (ctype_lower($string1)) {
  echo "$string1 is all lowercase.";
} else {
  echo "$string1 is not all lowercase.";
}

echo "<br>";

if (ctype_upper($string2)) {
  echo "$string2 is not all lowercase.";
} else {
  echo "$string2 is all lowercase.";
}
?>
