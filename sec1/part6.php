<?php

$members = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー'
];

foreach($members as $member) {
  echo $member;
}

foreach($members as $key => $value) {
  echo $key . 'は' . $value . 'です。';
}

$members2 = [
  '本田' => [
  'height' => 170,
  'hobby' => 'サッカー'
  ],
  '香川' => [
    'height' => 165,
    'hobby' => 'サッカー'
  ]
];

foreach($members2 as $member2) {
  foreach($member2 as $member2 => $value) {
    echo $member2 . 'は' . $value . 'です。';
  }
}

?>