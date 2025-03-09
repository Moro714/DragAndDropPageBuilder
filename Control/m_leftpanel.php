<link rel="stylesheet" href="../Control/c_styles.css">
<?php include_once 'C:/xampp/htdocs/Proiecte/Proiect mare/module/lp_button.php'; ?>
<?php include_once 'C:/xampp/htdocs/Proiecte/Proiect mare/module/lp_image.php'; ?>

<div class="lp">
    <h3>Drag & Drop Elements</h3>

    <!-- Draggable Image -->
    <div class="draggable-item original" draggable="true" ondragstart="drag(event, true)">
        <img src="img_logo.gif" width="100" height="50">
    </div>

    <!-- Draggable Button -->
    <div class="draggable-item original" draggable="true" ondragstart="drag(event, true)">
        <?php buttonTemplate("Test Button", "lp_button", "submitBtn"); ?>
    </div>

    <!-- Draggable Custom Image (Using Template) -->
    <div class="draggable-item original" draggable="true" ondragstart="drag(event, true)">
        <?php imageTemplate("image-box", "uniqueID", "custom-img", "image.png", "Example Image", "custom-btn", "btn123", "Press Me"); ?>
    </div>
</div>

<script>
function drag(ev, isOriginal) {
    if (isOriginal) {
        // Clone the entire draggable div
        let clone = ev.target.cloneNode(true);
        let uniqueId = "dragged-" + new Date().getTime();
        clone.id = uniqueId;
        clone.classList.remove("original"); // Remove original class
        clone.classList.add("cloned"); // Mark as a cloned element
        clone.setAttribute("ondragstart", "drag(event, false)");

        // Append clone to body so it can be moved to drop zones
        document.body.appendChild(clone);
        
        // Set dragged data
        ev.dataTransfer.setData("text", uniqueId);
    } else {
        // Move already placed element
        ev.dataTransfer.setData("text", ev.target.id);
    }
}
</script>

<style>
.lp {
    width: 250px;
    padding: 15px;
    border-right: 2px solid #ccc;
}

.draggable-item {
    padding: 10px;
    margin: 10px 0;
    text-align: center;
    cursor: grab;
}
</style>
