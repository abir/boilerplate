<?php

// Load javascript files in the order you want.
// Don't change this line
require_once dirname(__FILE__) . '../../min/setup.php';
// End don't change this line

// OPTIONS // Load javascript files in the order you want

$sources[] = '../js/lib/jquery-1.5.min.js';
/*Because the mobileinit event is triggered immediately upon execution, 
you'll need to bind your event handler before jQuery Mobile is loaded. 
http://jquerymobile.com/demos/1.0a3/#docs/api/globalconfig.html*/
/*$sources[] = '../js/mobile/custom.js';*/// You might not need this
$sources[] = '../js/mobile/jquery.mobile-1.0a3.min.js';

// END OPTIONS

// Don't change this line
require_once dirname(__FILE__) . '../../min/serve.php'; // configure cache in this file
// End don't change this line
// End of file