<?php  /// Moodle Configuration File 

unset($CFG);

$CFG = new stdClass();
$CFG->dbtype    = 'mysql';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'andrea_moodle';
$CFG->dbuser    = 'andrea_moodle';
$CFG->dbpass    = '~mS1aCfR3uD!';
$CFG->dbpersist =  false;
$CFG->prefix    = 'md_';

$CFG->wwwroot   = 'http://localhost/cf-tj';
$CFG->dirroot   = 'C:\xampp\htdocs\cf-tj';
$CFG->dataroot  = 'C:\xampp/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 00777;  // try 02777 on a server in Safe Mode

$CFG->passwordsaltmain = 'vDAa%nrGd{kyrpd0P3&3J()]o!';

require_once("$CFG->dirroot/lib/setup.php");
// MAKE SURE WHEN YOU EDIT THIS FILE THAT THERE ARE NO SPACES, BLANK LINES,
// RETURNS, OR ANYTHING ELSE AFTER THE TWO CHARACTERS ON THE NEXT LINE.
?>