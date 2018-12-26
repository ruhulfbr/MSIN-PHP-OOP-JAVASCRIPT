<h1>array_compact function</h1>

<?php

$name = "Ruhul";
$dept = "CSE";
$id = "CSE1701010072";
$result = 3.75;


 $new_array = compact("name", "dept", "id", "result");

 echo '<pre>';
 print_r($new_array);
