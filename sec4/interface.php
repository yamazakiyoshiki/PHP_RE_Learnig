<?php

// インターフェイス 設定するメソッドを強制
interface ProductInterface
{

  public function getProduct();
}

// インターフェイス 設定するメソッドを強制
interface NewsInterface
{

  public function getNews();
}

// 親クラス
class BaseProduct
{

  public function echoProduct()
  {
    echo '親クラスです。';
  }

  public function getProduct()
  {
    echo '親の関数です。';
  }
}

// 子クラス
class Product implements ProductInterface, NewsInterface
{

  // アクセス修飾子

  // 変数

  private $product = [];

  // 関数

  function __construct($product)
  {
    $this->product = $product;
  }

  public function getProduct()
  {
    echo $this->product;
  }

  public function addProduct($item)
  {
    $this->product .= $item;
  }

  public function getNews()
  {
    echo 'ニュースです。';
  }

  public static function getStaticProduct($str)
  {
    echo $str;
  }
}

$instance = new Product('テスト');

var_dump($instance);

$instance->getProduct();
echo '<br>';

// $instance->echoProduct();
// echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getNews();
echo '<br>';

$instance->getProduct();
echo '<br>';

Product::getStaticProduct('静的');
echo '</br>';
