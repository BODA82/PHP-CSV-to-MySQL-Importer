<?php
$database_host = 'localhost'; 
$database_name = 'databasename'; 
$database_table = 'databasetable'; 
$database_username='databaseusername'; 
$database_password = 'databasepassword'; 
$csv_file = 'filename.csv';

if (!file_exists($csv_file)) {
    die('File not found. Make sure you specified the correct path.');
}

try {	
    $pdo = new PDO("mysql:host=$database_host;dbname=$database_name", 
        $database_username, $database_password,
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        )
    );
} catch (PDOException $e) {
    die('database connection failed: ' . $e->getMessage());
}

$input = fopen($csv_file, 'a+');
$input2 = fopen($csv_file, 'a+');
$first_row = fgetcsv($input, 1024, ',');

foreach ($first_row as $name) {
	$values_array[] = ':' . trim($name);
}

$columns = implode(', ', fgetcsv($input2, 1024, ','));
$values = implode(', ', $values_array);

$count = 0;
while ($row = fgetcsv($input, 1024, ',')) {
	$sql = "INSERT INTO $database_table($columns) VALUES($values)";
	$query = $pdo->prepare($sql);
	for ($i=0; $i < count($row); $i++) {
		$query->bindParam($values_array[$i], $row[$i]);	
	}
	$query->execute();
	$count++;
}

echo 'Loaded a total of ' . $count . ' records from your CSV file.';
