<? 

// This guide demonstrates the five fundamental steps of database interaction with PHP

// Credentials
$dbhost = 'localhost';
$dbuser = 'doyyyler';
$dbpass = '@land0Yl3';
$dbname = 'globe_bank';

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// 2. Perform database query
$query = "SELECT * FROM subjects";
$result_set = mysqli_query($connection, $query);

// 3. Use returned data (if any)

// 4. Release returned data
mysqli_free_result($result_set);

// 5. Close database connection
mysqli_close($connection);

?>