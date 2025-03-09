<?php
function buttonTemplate($btnText, $btnClass = "btn-primary", $btnId = "", $divClass = "btn-container", $divId = "") {
    echo "<div class='$divClass' id='$divId'>
            <div class='original draggable' draggable='true' ondragstart='drag(event, true)'>
                <button class='$btnClass' id='$btnId'>$btnText</button>
            </div>
          </div>";
}
?>
