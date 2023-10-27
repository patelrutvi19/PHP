<?php
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'priya',
    'last_name' => 'yadav',
  ),
  array(
    'id' => 4767,
    'first_name' => 'disha',
    'last_name' => 'Sheth',
  ),
  array(
    'id' => 3809,
    'first_name' => 'divya',
    'last_name' => 'verma',
  )
);

$last_names = array_column($a, 'last_name');
print_r($last_names);
?>