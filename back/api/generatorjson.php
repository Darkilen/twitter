<?php
/*
  (object)array(
    'id' => '1',
    'user' => 'myfirsttext',
    'tweet' => 'myfirsttext',
    'date' => 'myfirsttext',
  ),
 */
$data = array(
  (object)array(
    'id' => '1',
    'user' => 'myfirsttext',
    'tweet' => 'myfirsttext',
    'date' => 'myfirsttext',
  ),
  (object)array(
    'oV' => 'mysecondvalue',
    'oT' => 'mysecondtext',
  ),
);
for($i=1;$i<=10;$i++){
  array_push($data, (object)array('id' => $i, 'user' => 'toto'));
}$json=json_encode($data);
var_dump($json);
