<?php

require 'FileUtility.php';
require 'Random.php';

$random = new Random(); 
$header = [
    'UUID', 'Title', 'First Name', 'Last Name', 'Street Address', 'Barangay', 
    'Municipality', 'Province', 'Country', 'Phone Number', 'Mobile Number', 
    'Company Name', 'Company Website', 'Job Title', 'Favorite Color', 
    'Birthdate', 'Email Address', 'Password'
];

$data = [];
for ($i = 0; $i < 300; $i++) {
    $data[] = $random->generatePerson();
}

FileUtility::writeToFile('persons.csv', $data, $header);

echo "300 records have been generated and saved to persons.csv.";
