// Function to save layout to JSON
function saveLayout() {
    let jsonData = JSON.stringify(layout); // Convert layout to JSON

    fetch("jsonlogic/save.php", { // Send data to save.php
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: jsonData
    })
    .then(response => response.json())
    .then(data => console.log(data.message)) // Show success message
    .catch(error => console.error("Error saving layout:", error));
}

// Function to load layout from JSON
function loadLayout() {
    fetch("jsonlogic/load.php") // Fetch data from load.php
    .then(response => response.json())
    .then(data => {
        layout = data; // Store JSON in layout variable
        rebuildUI(); // Recreate UI elements
    })
    .catch(error => console.error("Error loading layout:", error));
}
