<?php

session_start();

/*

 * DataTables example server-side processing script.

 *

 * Please note that this script is intentionally extremely simply to show how

 * server-side processing can be implemented, and probably shouldn't be used as

 * the basis for a large complex system. It is suitable for simple use cases as

 * for learning.

 *

 * See http://datatables.net/usage/server-side for full details on the server-

 * side processing requirements of DataTables.

 *

 * @license MIT - http://datatables.net/license_mit

 */



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

 * Easy set variables

 */



// DB table to use

$table = 'subcategory';



// Table's primary key

$primaryKey = 'id';



// Array of database columns which should be read and sent back to DataTables.

// The `db` parameter represents the column name in the database, while the `dt`

// parameter represents the DataTables column identifier. In this case simple

// indexes







$columns = array(

	array(

		'db' => 'um.id',

		'dt' => 'DT_RowId',

		'formatter' => function( $d, $row ) {

			// Technically a DOM id cannot start with an integer, so we prefix

			// a string. This can also be useful if you have multiple tables

			// to ensure that the id is unique with a different prefix

			return 'row_'.$d;

		},

		'field' => 'id',

		'as'=>'DT_RowId'

	),		

		 

	array( 'db' => 'um.id', 'dt' => 0, 'field' => 'id' ),

	array( 'db' => 'um.title', 'dt' => 1, 'field' => 'title' ),
	
	array( 'db' => 'um.description', 'dt' => 2, 'field' => 'description' ),
	
	array( 'db' => 'um.author', 'dt' => 3, 'field' => 'author' ),

	array( 'db' => 'um.status',   'dt' => 4, 'field' => 'status'),

	array( 'db' => 'um.added_on',   'dt' => 5, 'field' => 'added_on'),

);



// SQL server connection information

require('config.php');

$sql_details = array(

	'user' => $db_username,

	'pass' => $db_password,

	'db'   => $db_name,

	'host' => $db_host

);



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

 * If you just want to use the basic configuration for DataTables with PHP

 * server-side, there is no need to edit below this line.

 */



// require( 'ssp.class.php' );

require('ssp.customized.class.php');



$joinQuery = " FROM  news um  ";

$extraWhere = " um.status in (0,1) ";        







echo json_encode(

	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere )

);	