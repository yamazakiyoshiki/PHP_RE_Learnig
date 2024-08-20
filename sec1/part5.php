<?php

$height = 90;

var_dump($height);

if($height === 91) {
  echo '身長は' . $height . 'です。';
} else {
  echo '身長は' . $height . 'ではありません。';
}

if($height >= 91) {
  echo '身長は' . $height . 'です。';
}

if($height <= 90) {
  echo '身長は' . $height . 'です。';
}

if($height !== 90) {
  echo '身長は' . $height . 'です。';
}

$test = '1';

if(!empty($test)) {
  echo '変数は空ではありません。';
}


$signal_1 = 'red';
$signal_2 = 'blue';

if($signal_1 === 'red' && $signal_2 === 'blue') {
  echo '赤と青です。';
}

if($signal_1 === 'red' || $signal_1 === 'blue') {
  echo '赤か青です。';
}

$math = 80;

$comment = $math > 80 ? 'good' : 'not good';
echo $comment;

$signal = 'red';

if($signal === 'red') {
  echo 'とまれ';
} else if($signal === 'yellow') {
  echo '一旦停止';
} else {
  echo 'すすめ';
}

$speed = 80;

if($signal === 'blue') {
  if($speed >= 90) {
    echo 'スピード違反';
  }
}

?>