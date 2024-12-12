<?php
$data = [
    ["name" => "Alice", "age" => 25, "email" => "alice@example.com"],
    ["name" => "Bob", "age" => 30, "email" => "bob@example.com"],
    ["name" => "Charlie", "age" => 35, "email" => "charlie@example.com"]
];

echo "<table border='1' cellspacing='0' cellpadding='5'>";
// Print table headers
echo "<tr>";
foreach ($data[0] as $key => $value) {
    echo "<th>$key</th>";
}
echo "</tr>";

// Print table rows
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
