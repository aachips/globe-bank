<?=
    // 5 fundamental steps of database interaction with php
	
    // Credentials
	
    $dbhost = '';
    $dbuser = '';
    $dbpass = '';
    $dbname = '';
	
	// 1) Create database connection
    
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // 2) Perform database query	
    $query = "SELECT * FROM subjects";
    $result_set = mysqli_query($connection, $query);

	// 3) Use returned data (if any)
	

	// 4) Release returned data
    mysqli_free_result($result_set);
	// 5) Close database connection
    mysqli_close($connection);
?>