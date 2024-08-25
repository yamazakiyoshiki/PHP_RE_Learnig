<?php

require 'db_connection.php';

// ユーザー入力なし query
$sql = 'select * from contacts where id = 2';
$stmt = $pdo->query($sql);

$result = $stmt->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';

//ユーザー入力あり prepare, bind execute(SQLインジェクション対策)
$sql = 'select * from contacts where id = :id'; //名前付きプレースホルダー
$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->bindValue(':id', 3, PDO::PARAM_INT); //idを紐付け
$stmt->execute(); //実行

$result = $stmt->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';

// トランザクション処理 beginTransaction, commit, rollback

$pdo->beginTransaction();

try {
  //sql処理
  $stmt = $pdo->prepare($sql); //プリペアードステートメント
  $stmt->bindValue(':id', 3, PDO::PARAM_INT); //idを紐付け
  $stmt->execute(); //実行

  $pdo->commit();
} catch (PDOException $e) {
  $pdo->rollBack();
}
