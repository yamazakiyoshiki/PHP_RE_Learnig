<?php

function test()
{
  echo 'テスト';
}
test();

$comment = 'コメント2';
function getComment($string)
{
  echo $string;
}
getComment('コメント');
getComment($comment);

function getNumberOfComment()
{
  return 5;
}
var_dump(getNumberOfComment());
$commentNum = getNumberOfComment();
echo $commentNum;

echo '<br>';

function sumPrice($int1, $int2)
{
  $int3 = $int2 + $int1;
  return $int3;
}
$total = sumPrice(3, 5);
echo $total;
