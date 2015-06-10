<?php
function simpleAccessibility_shortcode ($atts) {
    $content =
        '<div id="accessibility-toolbar">
            <div id="highContrast">
                <a href="#">A</a>
            </div>
            <div id="normalContrast">
                <a href="#">A</a>
            </div>
            <div id="moreSize">
                <a href="#">A+</a>
            </div>
            <div id="defaultSize">
                <a href="#">A-</a>
            </div>
        </div>';
        
    return $content;
}
?>