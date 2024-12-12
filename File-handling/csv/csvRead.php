<?php
    $handle = fopen("data.csv", "r");
    $csvData = [];
    while (($data = fgetcsv($handle)) !== false) { 
        $csvData[] = $data;
    }
    fclose($handle);
    print_r($csvData);
    echo "<br />";
    echo "<br />";
    echo "<br />";

    // Example: Filter rows based on a condition
    $filteredData = array_filter($csvData, function($row) { 
        return (int)$row[3] >50000;
    });
    print_r($filteredData);
?>