<?php

// Load javascript files in the order you want.
// Don't change this line
require_once dirname(__FILE__) . '../../min/setup.php';
// End don't change this line

// OPTIONS // Load javascript files in the order you want

$sources[] = '../css/web/reset.css';
$sources[] = '../css/web/typography.css';
$sources[] = '../css/web/forms.css';
$sources[] = '../css/web/grid.css';
$sources[] = '../css/web/ie.css';
$sources[] = '../css/web/custom.css';

// END OPTIONS

// Don't change this line
require_once dirname(__FILE__) . '../../min/serve.php'; // configure cache in this file
// End don't change this line
// End of file