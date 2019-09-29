<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-23-23-182-18.compute-1.amazonaws.com');
$CFG->dbname    = getenv('dl0164olkg5fd');
$CFG->dbuser    = getenv('plsonagfhbyenm');
$CFG->dbpass    = getenv('c34456568f549d0d5deb611934310660ae8f262d8597abcffb045eb3eefcc5cc');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('WWWROOT');
$CFG->dataroot  = getenv('DATAROOT');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
