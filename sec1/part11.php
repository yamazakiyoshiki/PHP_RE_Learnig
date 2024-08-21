<?php

$postalCode = '123-4267';

// check_postal_code();
function checkPostalCode($str)
{
  $replaced = str_replace('-', '', $str);
  $length = strlen($replaced);

  if ($length === 7) {
    return true;
  }
  return false;
}

var_dump(checkPostalCode($postalCode));
