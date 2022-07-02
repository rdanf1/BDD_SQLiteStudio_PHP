<?php
$username = file_get_contents(filename:'user.txt');

echo 'Bonjour '.$username.PHP_EOL;

# for "$ " prompt on a new line when launched in Terminal...
# ( But PhpStorm.Run do it too ! )
echo 'line 2'.PHP_EOL;

$handle = fopen( filename: 'users.csv', mode: 'w+' );
fputcsv($handle, ['client_name', 'client_firstname', 'phone', 'vendor_name', 'vendor_firstname']);
fputcsv($handle, ['Doe', 'John', '0102030405', 'Bundy', 'Max'], separator: ';');
fputcsv($handle, ['Giovanni', 'Don', '0202030306', 'Bundy', 'Max']);
fputcsv($handle, ['Zamperini', 'Leon', '0302030207', 'Bundy', 'Max']);

