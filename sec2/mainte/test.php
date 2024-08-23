<?php

echo __FILE__;
// /Applications/MAMP/htdocs/php_test/sec2/mainte/test.php

echo '<br>';

echo (password_hash('password123', PASSWORD_BCRYPT));

echo '<br>';

$contactFile = '.contact.dat';

$fileContents = file_get_contents($contactFile);

// echo $fileContents;

// file_put_contents($contactFile, 'テストです。');

$addText = 'テストです' . "\n";

file_put_contents($contactFile, $addText, FILE_APPEND);

$allData = file($contactFile);

foreach ($allData as $lineData) {
  $lines = explode(',', $lineData);
  echo $lines[0] . '<br>';
  echo $lines[1] . '<br>';
  echo $lines[2] . '<br>';
}

$contents = fopen($contactFile, 'a+');

$addText = '1行追記' . "\n";

fwrite($contents, $addText);

fclose($contents);
