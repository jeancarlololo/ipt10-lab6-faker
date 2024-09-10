<?php

require 'FileUtility.php';

$data = FileUtility::readFromFile('persons.csv');

if (empty($data)) {
    echo "No data found.";
    exit;
}

$header = array_shift($data);

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Persons Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Persons Data</h1>
    <table>
        <thead>
            <tr>";

foreach ($header as $col) {
    echo "<th>$col</th>";
}

echo "    </tr>
        </thead>
        <tbody>";

foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}

echo "    </tbody>
    </table>
</body>
</html>";
