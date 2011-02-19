<?php
// This file is required and shared by various minifier server files
// setup serve options, you shouldn't have to change this
$options = array(
    'files' => $sources,
    'maxAge' => 0, // No cache by default // Configure cache to something like 86400
);


// handle request, you shouldn't have to change this
Minify::serve('Files', $options);
// end of minify server file