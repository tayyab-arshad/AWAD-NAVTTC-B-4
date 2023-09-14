<?php
date_default_timezone_set('Asia/pakistan');

$currentHour = date("H");

if ($currentHour < 12) {
  echo "Good Morning";
} else {
  echo "Good Afternoon";
}
?>
