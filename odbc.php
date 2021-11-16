<?php
	define("UID", 'ODBC');
	define("PWD", 'ODBC');
	define("DSN", 'odbc:64MBA3');
try {
    // Connecting to Ignite using pre-configured DSN.
    

	$dbh = new PDO(DSN, UID, PWD);

    // Changing PDO error mode.
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Executing the query and getting a result set. The salary field is an indexed field.
    $res = $dbh->query("Select CODIGO_ACTIVO, NOMBRE from ACTV_Ficha_Principal");

    if ($res == FALSE)
        print_r("Exception");

    // Printing results.
    foreach($res as $row) {
        print $row['CODIGO_ACTIVO'] . "\t";
        print $row['NOMBRE'] . "\n";
    }

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "\n";
    die();
}
?>