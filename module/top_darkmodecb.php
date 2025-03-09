<?php
function checkboxTemplate($checkboxId = "darkmode", $checkboxClass = "switch", $divClass = "top", $divId = "", $inputType = "checkbox") {
    echo "<div class='$divClass' id='$divId'>
            <label class='$checkboxClass'>
                <input type='$inputType' id='$checkboxId'>
                <span class='slider round'></span>
            </label>
          </div>";
}
?>