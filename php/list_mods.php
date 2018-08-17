<?php

function loopAndPrintFiles($dirName) {
    //Loop through the created dir and list all files in there for download
    if ($handle = opendir($dirName)) {
        echo'<div class="row-responsive text-center download-wrap">';
        while (false !== ($file = readdir($handle))) {
            //ignore ./ and ../ to stop recursion
            if ('.' === $file) continue;
            if ('..' === $file) continue;

            echo '<div class="download shadow-box-black bg-black-alpha">';
                echo '<p class="font-open-sans text-pd2-blue shadow-text-black">' . $file . '</p>';
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
        closedir($handle);
    }
}