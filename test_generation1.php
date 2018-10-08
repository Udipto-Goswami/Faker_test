<?php

require_once 'vendor/autoload.php';
$conn = new Mongo();

$faker = Faker\Factory::create();

if($conn){
	
	$connection_for_database = $conn->performance_test_database;
	$collection_student = $connection_for_database->user_collection;


while(1==1)
{
	$data = array(
	"id"=>$faker->randomDigit,
    "name" => $faker->name,
    "email"=> $faker->email,
    "age" => $faker->numberBetween($min = 12, $max = 70),
    "address" =>$faker->address,
    "date_of_creation"=>$faker->date($format = 'Y-m-d', $max = 'now'),

    ); 

	if($collection_student->insert($data)){
		echo"Done";
	}

	else{
		echo"Error in Connection! ";
		return 0;
	}
}

}

?>