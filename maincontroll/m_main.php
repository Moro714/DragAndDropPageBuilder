<link rel="stylesheet" href="../maincontroll/mc_styles.css">

<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev, isOriginal) {
    if (isOriginal) {
        // Clone the element when dragging from the left panel
        let clone = ev.target.cloneNode(true);
        let uniqueId = "dragged-" + new Date().getTime();
        clone.id = uniqueId;
        clone.classList.remove("original"); // Remove the "original" class so it won't clone again
        clone.classList.add("cloned"); // Mark it as a cloned element
        clone.setAttribute("ondragstart", "drag(event, false)"); // Now it moves instead of cloning
        
        // Append the clone to the body temporarily
        document.body.appendChild(clone);
        
        // Set the copied element as the data being dragged
        ev.dataTransfer.setData("text", uniqueId);
    } else {
        // If dragging an already placed element, move it
        ev.dataTransfer.setData("text", ev.target.id);
    }
}

function drop(ev) {
    ev.preventDefault();
    let elementId = ev.dataTransfer.getData("text");
    let element = document.getElementById(elementId);

    if (element) {
        // Append the element to the drop target
        ev.target.appendChild(element);

        // Reset position to align within the grid
        element.style.position = "relative";
        element.style.left = "0px";
        element.style.top = "0px";
    }
}
</script>

<?php 
function customSize($rows, $columns) {
    echo '<div class="matrice">';
    for ($i = 0; $i < $rows; $i++) { 
        echo '<div class="row">';
        for ($j = 0; $j < $columns; $j++) { 
            echo '<div class="column">';
            echo '<div class="dropzone" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
            echo '</div>';
        }
        echo '</div>';
    }
    echo '</div>';
}


customSize(500, 96);
?>
