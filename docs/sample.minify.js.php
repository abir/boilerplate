<?php // Drop this file in the js folder

// Load javascript files in the order you want.
// Don't change this line
require_once dirname(__FILE__) . '../../min/setup.php';
// End don't change this line

// OPTIONS // Load javascript files in the order you want

$sources[] = '..path/file1.js';
$sources[] = '..path/file2.js';

// Example of how to get an external URL to minify with this group
function get_file_contents() {
    return file_get_contents('http://domain-name/path/file3.js');
}

$sources[] = new Minify_Source(array(
    'id' => 'source1',
	'getContentFunc' => 'get_file_contents',
	'contentType' => Minify::TYPE_JS,
	'lastModified' => ($_SERVER['REQUEST_TIME'] - $_SERVER['REQUEST_TIME'] % 86400),
));
// End of example

// END OPTIONS

// Don't change this line
require_once dirname(__FILE__) . '../../min/serve.php'; // configure cache in this file
// End don't change this line
// End of file
