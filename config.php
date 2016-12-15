<?php
//defines

// path
$app_dir = 'app/';
$pagetitle = 'Traffic Team';

// include app
require_once( $app_dir . 'prototype.init.php' );

// global functions
require_once( $app_dir . 'functions.php');

set_maintemplate('list');
//set_maintemplate('home');
//only_this_template('home');
?>
