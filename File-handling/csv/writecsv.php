<?php
   $data =  [
                ['John Doe', 30, 'Engineering', 50000], 
                ['Jane Smith', 28, 'Marketing', 45000],
                ['David Johnson', 35, 'Finance', 60000]
            ];
    $csvFile = fopen('data.csv', 'w'); // Open the CSV file in write mode 
    foreach ($data as $row) {
        fputcsv($csvFile, $row);
    }
    fclose($csvFile);
?>