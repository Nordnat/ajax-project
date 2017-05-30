<?php
// DB table to use
$table = 'person';
 
// Table's primary key
$primaryKey = 'id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names
$columns = array(
    array( 'db' => 'id', 'dt' => 'id' ),
    array( 'db' => 'fname', 'dt' => 'fname' ),
    array( 'db' => 'lname',  'dt' => 'lname' ),
    array( 'db' => 'age',  'dt' => 'age' ),
    array( 'db' => 'education',  'dt' => 'education' ),
    array( 'db' => 'gender',  'dt' => 'gender' ),
    array( 'db' => 'email',  'dt' => 'email' ),
    array( 'db' => 'city',  'dt' => 'city' ),
    array( 'db' => 'street',  'dt' => 'street' ),
    array( 'db' => 'city_population',  'dt' => 'city_population' ),
    array( 'db' => 'working_years',  'dt' => 'working_years' ),
    array( 'db' => 'created_at',  'dt' => 'created_at' )
);
 
// SQL server connection information
include '../php/sql_details.php';
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( '../php/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
);