<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

$connect=mysqli_connect("localhost","root","","faker_test");
if($connect){

while(1==1){
	$id =$faker->randomDigit;
	$name   =$faker->name;
	$email  =$faker->email;
	$age    =$faker->numberBetween($min = 12, $max = 70);
	$address=$faker->address;
	$date   =$faker->date($format = 'Y-m-d', $max = 'now');


$query ="INSERT INTO generate_user VALUES($id,'$name','$email',$age,'$address',$date)";
	

	$insert_query = mysqli_query($connect,$query);
	if($insert_query){
		echo "Done</br>";
		}

}
	
	
}

?>