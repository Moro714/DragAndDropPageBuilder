<?php
$file = "../jsonlogic/data.json"; // Path to JSON file

if (file_exists($file)) {
    echo file_get_contents($file); // Send JSON data to frontend
} else {
    echo json_encode(["elements" => []]); // Return empty JSON if no file exists
}
?>
