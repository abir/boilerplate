<?php

// Load javascript files in the order you want.
// Don't change this line
require_once dirname(__FILE__) . '../../min/setup.php';
// End don't change this line

// OPTIONS // Load javascript files in the order you want

$sources[] = '../js/lib/jquery-1.5.min.js';
//load more javascripts files
$sources[] = '../js/web/custom.js';

// END OPTIONS

// Don't change this line
require_once dirname(__FILE__) . '../../min/serve.php'; // configure cache in this file
// End don't change this line
// End of file