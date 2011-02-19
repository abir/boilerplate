<?php
// This file is required and shared by various minifier server files
// setup Minify, you shouldn't have to change this
set_include_path('../min/lib' . PATH_SEPARATOR . get_include_path());
require 'Minify.php';
require 'Minify/Cache/File.php';
Minify::setCache(new Minify_Cache_File()); // guesses a temp directory
$sources = array();