# PHP-CSV-to-MySQL-Importer
A simple PHP/PDO script to import a CSV file to an existing MySQL database table.

## Usage
* Prepare your database
 * All table columns must be setup prior to running this script
* Prepare your CSV file
 * The first row of your CSV file must contain the column name exactly as it exists in your database
* Upload csv-msql-converter.php to location of your choice
* Upload the CSV file you wish to convert to the same directory
* Update the following variables with your database and CSV file information:
 * `$database_host` (your database hostname, IP address, or localhost)
 * `$database_name` (name of your MySQL database)
 * `$database_table` (which table in your database to place the data)
 * `$database_username` (username with permissions to the database)
 * `$database_password` (password for the database user)
 * `$csv_file` (file name or full path if file is not located in same directory)
* Execute csv-mysql-converter.php

## License

The MIT License (MIT)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.
