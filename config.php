<?php  /// Moodle Configuration File 

unset($CFG);

$CFG = new stdClass();
$CFG->dbtype    = 'mysql';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'andrea_moodle';
$CFG->dbuser    = 'andrea_moodle';
$CFG->dbpass    = '~mS1aCfR3uD!';
$CFG->dbpersist =  false;
$CFG->prefix    = 'mdl_';

$CFG->wwwroot   = 'http://cf-tj.andyosuna.com';
$CFG->dirroot   = '/home/andrea/public_html/sites/cf-tj/root';
$CFG->dataroot  = '/home/andrea/el/md/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 00777;  // try 02777 on a server in Safe Mode

$CFG->passwordsaltmain = '#<h2[U^Tj9zuEtedU^1}vN+JZN0y.EW5';

require_once("$CFG->dirroot/lib/setup.php");
// MAKE SURE WHEN YOU EDIT THIS FILE THAT THERE ARE NO SPACES, BLANK LINES,
// RETURNS, OR ANYTHING ELSE AFTER THE TWO CHARACTERS ON THE NEXT LINE.
?>