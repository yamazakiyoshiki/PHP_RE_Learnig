<?php

$text = 'あいうえお';

echo strlen($text);

echo '<br>';

echo mb_strlen($text);

echo '<br>';

$str = '文字列を置換します';
echo str_replace('置換', 'ちかん', $str);

echo '<br>';

$str2 = '指定文字列で、分割します';
var_dump(explode('、', $str2));

//正規表現
//文字列かどうか
//数字かどうか
//郵便番号
//メールアドレスかどうか test@gmail.com
$str3 = '特定の文字列が含まれるか確認する。';
echo preg_match('/文字列/', $str3);

echo '<br>';

echo substr('abcde', 2);
echo mb_substr('あいうえお', 1);


$array = ['りんご', 'みかん'];
array_push($array, 'ぶどう', 'なし');
var_dump($array);
