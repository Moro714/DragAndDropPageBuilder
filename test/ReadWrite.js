const fs = require('fs');
const filePath = 'C:/xampp/htdocs/Proiecte/Proiect mare/test/data.json';


function readJsonFile() {
    try {
        if (!fs.existsSync(filePath)) {
            console.log('File does not exist, creating one...');
            writeJsonFile({}); // Create an empty JSON file
        }
        const data = fs.readFileSync(filePath, 'utf8');
        return JSON.parse(data);
    } catch (error) {
        console.error('Error reading file:', error);
        return null;
    }
}

// Function to read JSON file
function readJsonFile() {
    try {
        const data = fs.readFileSync(filePath, 'utf8');
        return JSON.parse(data);
    } catch (error) {
        console.error('Error reading file:', error);
        return null;
    }
}

// Function to write to JSON file
function writeJsonFile(content) {
    try {
        fs.writeFileSync(filePath, JSON.stringify(content, null, 2), 'utf8');
        console.log('File written successfully');
    } catch (error) {
        console.error('Error writing file:', error);
    }
}

// Example usage
const jsonData = readJsonFile();
console.log('Read JSON:', jsonData);

if (jsonData) {
    jsonData.divclass = 'div_class';
    jsonData.divid = 'div_id';
    writeJsonFile(jsonData); // Write updated JSON back to file
}
