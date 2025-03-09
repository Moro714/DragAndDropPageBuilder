<?php
// Allow only POST requests
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $jsonData = file_get_contents("php://input"); // Get JSON from JavaScript

    if (!empty($jsonData)) {
        file_put_contents("../jsonlogic/data.json", $jsonData); // Save data to file
        echo json_encode(["status" => "success", "message" => "Layout saved successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "No data received"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}
?>
