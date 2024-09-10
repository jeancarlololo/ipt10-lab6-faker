<?php
require 'vendor/autoload.php';

use Faker\Factory as FakerFactory;

$faker = FakerFactory::create('en_PH');

$data = [
    'UUID' => $faker->uuid,
    'Title' => $faker->title,
    'First Name' => $faker->firstName,
    'Last Name' => $faker->lastName,
    'Street Address' => $faker->streetAddress,
    'Barangay' => $faker->barangay,
    'Municipality' => $faker->municipality,
    'Province' => $faker->province,
    'Country' => $faker->country,
    'Phone Number' => $faker->phoneNumber,
    'Mobile Number' => $faker->mobileNumber,
    'Company Name' => $faker->company,
    'Company Website' => $faker->domainName,
    'Job Title' => $faker->jobTitle,
    'Favorite Color' => $faker->safeColorName,
    'Birthdate' => $faker->date,
    'Email Address' => $faker->email,
    'Password' => $faker->password,
];


echo "<pre>";
print_r($data);
echo "</pre>";
