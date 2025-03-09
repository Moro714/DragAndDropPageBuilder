<?php
function imageTemplate($divClass = "container", $divId = "img-container", $imgClass = "img-primary", $imgSrc = "", $imgAlt = "Image", $btnClass = "btn", $btnId = "btn1", $btnText = "Click Me") {
    echo 
    "<div class='$divClass' id='$divId'>
      <button class='$btnClass' id='$btnId'>$btnText</button>
      <img class='$imgClass' src='$imgSrc' alt='$imgAlt'>
    </div>";
}
?>







