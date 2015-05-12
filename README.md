# CSV-to-MySQL-Converter
A simple PHP/PDO script to upload a CSV file to a single MySQL database table

## Usage
* Upload csv-msql-converter.php to location of your choice
* Upload the CSV file you wish to convert to the same directory
* Update the following variables with your database and CSV file information:
** `$databasehost` (your database hostname, IP address, or localhost)
** `$databasename` (name of your MySQL database)
** `$databasetable` (which table in your database to place the data)
** `$databaseusername` (username with permissions to the database)
** `$databasepassword` (password for the database user)
** `$fieldseperator` (file column separator/delimiter)
** `$lineseparator` (file record line separator)
** `$csvfile` (file name or full path if file is not located in same directory)
* Execute csv-mysql-converter.php