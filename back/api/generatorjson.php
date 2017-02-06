<?php
header('Access-Control-Allow-Origin: *');
require_once '../../vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create('fr_FR');
/*
  (object)array(
    'id' => '1',
    'user' => 'myfirsttext',
    'tweet' => 'myfirsttext',
    'date' => 'myfirsttext',
  ),
 */
$data = array();
for($i=1;$i<=10;$i++){
  array_push($data, (object)array('id' => $i, 'user' => $faker->name, 'tweet' => $faker->text, 'date' => $faker->datetime));
}
$json=json_encode($data);
echo $json;
$handle=fopen('test.json','w');
fwrite($handle, $json);
fclose($handle);
