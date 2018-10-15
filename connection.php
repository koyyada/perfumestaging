<?php  
/* Specify the server and connection string attributes. */  
$serverName = "(10.20.0.61)";  

/* Get UID and PWD from application-specific files.  */  
$uid = 'santosh';  
$pwd = 'sa5432';  
$connectionInfo = array( ["UID"=>$santosh,  
                         "PWD"=>$sa5432,  
                         "DatabaseName "=>$PCA]);  

/* Connect using SQL Server Authentication. */  
$conn = sqlsrv_connect( $serverName, $connectionInfo);  
if($conn === false )  
{  
     echo "Unable to connect.</br>";  
     die( print_r( sqlsrv_errors(), true));  
}  
sqlsrv_close( $conn);  
?>
