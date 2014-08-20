<?PHP
unset($CFG);  // Ignore this line
global $CFG;  // This is necessary here for PHPUnit execution

$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';      // 'pgsql', 'mariadb', 'mysqli', 'mssql', 'sqlsrv' or 'oci'
$CFG->dblibrary = 'native';     // 'native' only at the moment
$CFG->dbhost    = 'localhost';  // eg 'localhost' or 'db.isp.com' or IP
$CFG->dbname    = 'andrea_moodle';     // database name, eg moodle
$CFG->dbuser    = 'andrea_moodle';   // your database username
$CFG->dbpass    = '~mS1aCfR3uD!';   // your database password
$CFG->prefix    = 'mdl_';       // prefix to use for all table names

$CFG->dboptions = array(
    'dbpersist' => false,
    'dbsocket'  => false,
    'dbport'    => '',
);

$CFG->wwwroot   = 'http://cienciayfetijuana.com';
$CFG->dataroot  = '/home/andrea/el/md/moodledata';

$CFG->directorypermissions = 02777;
$CFG->admin = 'admin';

require_once(dirname(__FILE__) . '/lib/setup.php'); // Do not edit
