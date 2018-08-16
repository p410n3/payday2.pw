<?php

function loopAndPrintFiles($dirName) {
    //Loop through the created dir and list all files in there for download
    if ($handle = opendir($dirName)) {
        echo'<div class="full-width">';
        echo'<div class="row-responsive text-center download-wrap">';
        while (false !== ($file = readdir($handle))) {
            //ignore ./ and ../ to stop recursion
            if ('.' === $file) continue;
            if ('..' === $file) continue;

            echo '<div class="download text-center shadow-box-black bg-black-alpha">';
                echo '<h3 class="font-open-sans text-pd2-blue shadow-text-black">' . $file . '</h3>';
                echo '<a class="text-white font-open-sans hover-gray download-button bg-pd2-blue shadow-box-black" href="'
                        . $dirName
                        . '/'
                        .  $file
                        . '" >'
                        . 'DOWNLOAD' .
                    '</a>';
            echo '</div>';
        }
        echo'</div>';
        echo'</div>';
        closedir($handle);
    }
}