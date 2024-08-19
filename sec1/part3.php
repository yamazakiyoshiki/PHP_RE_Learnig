<!-- 配列・連想配列 復習 -->

<?php
$array = ['あああ', 2, 3];

$array2 = [
  ['赤', '青', '黄'],
  ['緑', '紫', '黒']
];

// echo $array[1];
echo '<pre>';
var_dump($array2);
echo '</pre>';

echo $array2[1][1];

$array_member = [
  'name' => 'ホンダ',
  'height' => 170,
  'hobby' => 'サッカー'
];

echo $array_member['hobby'];
var_dump($array_member);

$array_member2 = [
  '本田' => [
    'height' => 170,
    'hobby' => 'サッカー'
  ],
  '香川' => [
    'height' => 165,
    'hobby' => 'サッカー'
  ]
];

echo $array_member2['香川']['height'];
var_dump($array_member2);

$array_member3 = [
  '1kumi' => [
    '本田' => [
      'height' => 170,
      'hobby' => 'サッカー'
    ],
    '香川' => [
      'height' => 165,
      'hobby' => 'サッカー'
    ]
  ],
  '2kumi' => [
  '長友' => [
    'height' => 160,
    'hobby' => 'サッカー'
  ],
  '乾' => [
    'height' => 155,
    'hobby' => 'サッカー'
  ]
  ]
];

echo $array_member3['2kumi']['長友']['height'];
var_dump($array_member3);